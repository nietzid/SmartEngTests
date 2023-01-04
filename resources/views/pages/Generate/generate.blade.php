@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-5 pt-5">
    @if (Auth::user()->generate_counter != 0 && Auth::user()->is_premium == 1)
    <div class="row p-5">
        <h4 class="text-center" style="color: #CA6035"><b>Which question will you choose?</b></h4>
    </div>
    <div class="row text-center">
        <div class="col-lg-4 col-md-4 col-12 mb-4">
            <a href="/generate/input-passage" style="color: #3E6D81; text-decoration: none;">
                <div class="card w-100">
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
            <a href="/generate/input-passage" style="color: #3E6D81; text-decoration: none;">
                <div class="card w-100">
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
            <a href="/generate/input-passage" style="color: #3E6D81; text-decoration: none;">
                <div class="card w-100">
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
    @elseif (Auth::user()->generate_counter == 0 && Auth::user()->is_premium == 1)
    <div class="row">
        <div class="card">
            <div class="card-body p-5">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <img src="assets/images/error-404.png" width="70%" alt="">
                    </div>
                    <div class="col-lg-7 col-sm-12 mt-3">
                        <h1 style="color: #CA6035;" class="pt-5 heading-responsive">
                            <b>
                                Upgrade your account
                            </b>
                        </h1>
                        <p class="paragraph-responsive">
                            You have reached the maximum number of questions you can generate.
                        </p>
                        <a href="<?= url('upgrade-account') ?>" class="centered-button">
                            <button class="btn mt-2 px-4" style="background-color: #3E6D81; color: white;">Upgrade Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif (Auth::user()->generate_counter == 0 && Auth::user()->is_premium == 0)
    <div class="row">
        <div class="card">
            <div class="card-body p-5">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <img src="assets/images/error-404.png" width="70%" alt="">
                    </div>
                    <div class="col-lg-7 col-sm-12 mt-3">
                        <h1 style="color: #CA6035;" class="pt-5 heading-responsive">
                            <b>
                                Upgrade your account
                            </b>
                        </h1>
                        <p class="paragraph-responsive">
                            You must be a premium member to generate questions.
                        </p>
                        <a href="<?= url('upgrade-account') ?>" class="centered-button">
                            <button class="btn mt-2 px-4" style="background-color: #3E6D81; color: white;">Upgrade Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection