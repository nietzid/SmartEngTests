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
    <div class="card p-4 mt-3 shadow-md" style="color: #555555;">
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
                    <a href="/edit-question/{{$question->id}}">
                        <button type="button btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #3E6D81;">
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