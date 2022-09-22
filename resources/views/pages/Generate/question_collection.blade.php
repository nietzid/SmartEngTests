@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div style="color: #CA6035;" class="row p-4 pb-0 pt-5">
        <h3>
            <b>
                Question Collection
            </b>
        </h3>
        <p style="color: black;">
            Below is your question collection. You can add the question that’s been generated to the test.
        </p>
        <div class="mb-2">
            <a href="<?= url('generate/add-question-manual'); ?>">
                <button type="button" name="submit" class="btn btn-block text-light mt-4 ps-5 pe-5" style="background-color: #3E6D81; float: right;">Add Question</button>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="accordion accordion-flush m-0" id="accordionFlushExample">
            <div class="accordion-item m-3" style="border: 1px solid lightgrey; border-radius: 10px;">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" style="background-color: white !important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <b>
                            Summary
                        </b>
                    </button>
                </h2>
                @foreach ($questions as $question)
                @if ($question->category == 'Summary')
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-4 pt-3 pb-3" style="background-color: white !important;">
                        {{$question->question}}
                        <span style="float: right;">
                            <a href="/remove-question/{{$question->id}}">
                                <button class="btn btn-light" style="border: 1px solid lightgrey;">
                                    <iconify-icon inline icon="fluent:delete-20-regular" style="color: red; font-size: 20px;"></iconify-icon>
                                </button>
                            </a>
                        </span>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

            <div class="accordion-item m-3" style="border: 1px solid lightgrey; border-radius: 10px;">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" style="background-color: white !important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <b>
                            Short Answer Question
                        </b>
                    </button>
                </h2>
                @foreach ($questions as $question)
                @if ($question->category == 'Short Answer Question')
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-4 pt-3 pb-3" style="background-color: white !important;">
                        {{$question->question}}
                        <span style="float: right;">
                            <a href="/remove-question/{{$question->id}}">
                                <button class="btn btn-light" style="border: 1px solid lightgrey;">
                                    <iconify-icon inline icon="fluent:delete-20-regular" style="color: red; font-size: 20px;"></iconify-icon>
                                </button>
                            </a>
                        </span>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

            <div class="accordion-item m-3" style="border: 1px solid lightgrey; border-radius: 10px;">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" style="background-color: white !important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <b>
                            Fill in The Blank
                        </b>
                    </button>
                </h2>
                @foreach ($questions as $question)
                @if ($question->category == 'Fill in The Blank')
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-4 pt-3 pb-3" style="background-color: white !important;">
                        {{$question->question}}
                        <span style="float: right;">
                            <a href="/remove-question/{{$question->id}}">
                                <button class="btn btn-light" style="border: 1px solid lightgrey;">
                                    <iconify-icon inline icon="fluent:delete-20-regular" style="color: red; font-size: 20px;"></iconify-icon>
                                </button>
                            </a>
                        </span>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

            <div class="accordion-item m-3" style="border: 1px solid lightgrey; border-radius: 10px;">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" style="background-color: white !important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        <b>
                            True or False
                        </b>
                    </button>
                </h2>
                @foreach ($questions as $question)
                @if ($question->category == 'True or False')
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-4 pt-3 pb-3" style="background-color: white !important;">
                        {{$question->question}}
                        <span style="float: right;">
                            <a href="/remove-question/{{$question->id}}">
                                <button class="btn btn-light" style="border: 1px solid lightgrey;">
                                    <iconify-icon inline icon="fluent:delete-20-regular" style="color: red; font-size: 20px;"></iconify-icon>
                                </button>
                            </a>
                        </span>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

            <div class="accordion-item m-3" style="border: 1px solid lightgrey; border-radius: 10px;">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" style="background-color: white !important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        <b>
                            Multiple Choice
                        </b>
                    </button>
                </h2>
                @foreach ($questions as $question)
                @if ($question->category == 'Multiple Choice')
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-4 pt-3 pb-3" style="background-color: white !important;">
                        {{$question->question}}
                        <span style="float: right;">
                            <a href="/remove-question/{{$question->id}}">
                                <button class="btn btn-light" style="border: 1px solid lightgrey;">
                                    <iconify-icon inline icon="fluent:delete-20-regular" style="color: red; font-size: 20px;"></iconify-icon>
                                </button>
                            </a>
                        </span>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection