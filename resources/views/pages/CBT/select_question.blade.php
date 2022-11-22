@extends('layouts.logged-navbar')

@section('content')
<div class="container">
    <div style="color: #CA6035;" class="row pb-0 pt-5">
        <h3>
            <b>
                Question Collection
            </b>
        </h3>
        <p style="color: black;">
            Below is your question collection. You can add the question that’s been generated to the test.
        </p>
    </div>

    <div class="row pt-5">
        <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <!-- <a href="http://127.0.0.1:5000/generate_question" style="color: #3E6D81; text-decoration: none;"> -->
                <a href="{{ url('cbt/detail-select-question/' .$id. '/Error Identification') }}" style="color: #3E6D81; text-decoration: none;">
                    <div class="card">
                        <div class="card-body">
                            <img src="/assets/images/error_identification.png" alt="">
                            <br><br>
                            <b>
                                Error Identification
                            </b>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <a href="{{ url('cbt/detail-select-question/' .$id. '/Sentence Completion') }}" style="color: #3E6D81; text-decoration: none;">
                    <div class="card">
                        <div class="card-body">
                            <img src="/assets/images/sentence_completion.png" alt="">
                            <br><br>
                            <b>
                                Sentence Completion
                            </b>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <a href="{{ url('cbt/detail-select-question/' .$id. '/Vocabulary') }}" style="color: #3E6D81; text-decoration: none;">
                    <div class="card">
                        <div class="card-body">
                            <img src="/assets/images/vocabulary.png" alt="">
                            <br><br>
                            <b>
                                Vocabulary
                            </b>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection