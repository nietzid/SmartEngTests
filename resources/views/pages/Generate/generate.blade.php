<!-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <title>EGQ</title>
</head> -->
@extends('layouts.app')
@section('content')
<div class="container mt-5 pt-5">
    <div class="row p-5">
        <h4 class="text-center" style="color: #CA6035"><b>Which question will you choose?</b></h4>
    </div>
    <div class="row text-center">
        <div class="col-lg-4 col-md-4 col-12 mb-4">
            <a href="http://127.0.0.1:5000/generate_question" style="color: #3E6D81; text-decoration: none;">
                <div class="card">
                    <div class="card-body">
                        <img src="/assets/img/error_identification.png" alt="">
                        <br><br>
                        <b>
                            Error Identification
                        </b>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mb-4">
            <a href="question-type" style="color: #3E6D81; text-decoration: none;">
                <div class="card">
                    <div class="card-body">
                        <img src="/assets/img/sentence_completion.png" alt="">
                        <br><br>
                        <b>
                            Sentence Completion
                        </b>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mb-4">
            <a href="question-type" style="color: #3E6D81; text-decoration: none;">
                <div class="card">
                    <div class="card-body">
                        <img src="/assets/img/vocabulary.png" alt="">
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
@endsection