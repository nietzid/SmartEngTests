@extends('layouts.logged-navbar')

@section('content')
<div class="container">
    <div style="color: #CA6035;" class="row mb-5 pt-5 mt-3 text-center">
        <h3>
            <b>
                <?= $question_type;
                // dd($questions);
                ?>
            </b>
        </h3>
    </div>

    @foreach ($questions as $question)
    <div class="card p-3 mt-3 shadow-md">
        <div class="row pb-3">
            <b>
                {{$question->passages}}
            </b>
        </div>
        <div class="row ps-3">
            A. {{$question->question}} <br>
            B. {{$question->question}} <br>
            C. {{$question->question}} <br>
            D. {{$question->question}} <br>
            <b class="pt-2 ps-0">
                Ans: {{$question->answer}}
            </b>
        </div>
        <div class="row mt-4">
            <div class="col">
                <span>
                    <a href="/add-question-to-test/{{$id}}/{{$question->id}}">
                        <button class="btn bg-color-primary text-white">
                            <iconify-icon inline icon="fluent:add-16-filled"></iconify-icon> Add
                        </button>
                    </a>
                </span>
            </div>
        </div>
    </div>
    @endforeach
    <nav class="nav fixed-bottom p-5 pt-4 pb-4 bg-light" style="box-shadow: 0px 0px 10px 3px rgb(0,0,0,0.10)">
        <div class="container ms-auto">
            <div class="row">
                <div class="col-6">
                    <a href="/cbt/select-question/" ,$id>
                        <button class="btn bg-color-secondary ps-5 pe-5 text-white">Back</button>
                    </a>
                </div>
                <div class="col-6">
                    <a href="/cbt/admin-test-detail/" ,$id>
                        <button class="btn bg-color-secondary text-white ps-5 pe-5" style="float: right;">Done</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>
@endsection