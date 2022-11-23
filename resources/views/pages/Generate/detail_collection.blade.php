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
        {{$question->passages}}
        <br>
        {{$question->question}}
        <br>
        {{$question->answer}} 
        <div class="row mt-4">
            <div class="col">
                <span>
                    <a href="/edit-question/{{$question->id}}">
                        <button class="btn" style="background-color: #3E6D81;">
                            <iconify-icon inline icon="akar-icons:edit" style="color: white; font-size: 17px;"></iconify-icon>
                        </button>
                    </a>
                </span>
                <span>
                    <a href="/remove-question/{{$question->id}}">
                        <button class="btn" style="background-color: #CA6035;">
                            <iconify-icon inline icon="fluent:delete-20-regular" style="color: white; font-size: 17px;"></iconify-icon>
                        </button>
                    </a>
                </span>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection