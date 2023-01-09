@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-4">
    <div class="row p-3 pt-3">
        <h4 class="text-center mb-5 mt-4" style="color: #CA6035"><b>Preview Question</b></h4>
        <p>
            <?=Session::get('passage')?>  
        </p>
    </div>

    <?php foreach(Session::get('response')->questionList as $question){?>
    <div class="row ps-4 pe-4">
        <div class="card p-4 ps-3" style="box-shadow:none;">
        <div class="row">
                <div class="col">
                    <p>
                        {{$question->question}}<br>
                        <?php foreach($question->answers as $answer){?>
                        &emsp;{{$answer[0]}}. {{$answer[1]}}<br>
                        <?php } ?>
                        <span class="fw-bold">
                            &emsp;
                        </span>
                    </p>Answer: {{$question->key}}
                </div>
                <div class="col-1">
                    <button class="float-end btn bg-color-primary text-white">
                        <iconify-icon inline icon="clarity:note-edit-line"></iconify-icon>
                    </button>
                    <button class="float-end btn bg-color-secondary text-white mt-2">
                        <iconify-icon inline icon="fluent:delete-20-regular"></iconify-icon>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <a href="/question-collection">
        <button class="btn bg-color-primary text-white float-end ps-5 pe-5 mt-3 me-2 mb-5 fw-bold">Save</button>
    </a>
</div>
@endsection