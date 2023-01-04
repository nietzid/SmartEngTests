@extends('layouts.logged-navbar')

@section('content')
<div class="container-fluid">
    @if (Auth::user()->is_premium == 0)
    <div class="row p-4 pb-0 pt-3 text-center">
        <h3 class="mt-5 mb-5 text-bold text-color-primary">
            <b>
                UPGRADE YOUR ACCOUNT
            </b>
        </h3>
    </div>

    <div class="container mb-5">
        <div class="row text-sm">
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="fw-bold" style="color: #646464">
                            FREE USER
                        </h4>
                        <h4 class="fw-bold mb-4 text-color-primary">
                            0k
                        </h4>
                        <p>
                            <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Generate Question (5 max)
                        </p>
                        <p>
                            <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Join Computer Based Test Simulation
                        </p>
                        <p>
                            <iconify-icon inline icon="akar-icons:cross" style="color: red;"></iconify-icon> Create Computer Based Test Simulation
                        </p>
                        <p>
                            <iconify-icon inline icon="akar-icons:cross" style="color: red;"></iconify-icon> Add question from Question Collection to CBT
                        </p>
                        <button class="btn mt-3 w-100 text-color-primary fw-bold">
                            It`s Free
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="fw-bold" style="color: #646464">
                            MONTHLY PREMIUM
                        </h4>
                        <h4 class="fw-bold mb-4 text-color-primary">
                            99k
                        </h4>
                        <p>
                            <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Generate Question (5 max)
                        </p>
                        <p>
                            <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Join Computer Based Test Simulation
                        </p>
                        <p>
                            <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Create Computer Based Test Simulation
                        </p>
                        <p>
                            <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Add question from Question Collection to CBT
                        </p>
                        <a href="upgrade-account/account-information">
                            <button class="btn mt-3 w-100 bg-color-primary text-white fw-bold">
                                Upgrade Now
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="fw-bold" style="color: #646464">
                            YEARLY PREMIUM
                        </h4>
                        <h4 class="fw-bold mb-4 text-color-primary">
                            599k
                        </h4>
                        <p>
                            <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Unlimited Generate Question
                        </p>
                        <p>
                            <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Join Computer Based Test Simulation
                        </p>
                        <p>
                            <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Create Computer Based Test Simulation
                        </p>
                        <p>
                            <iconify-icon inline icon="akar-icons:check" style="color: green; font-size: 20px;"></iconify-icon> Add question from Question Collection to CBT
                        </p>
                        <a href="upgrade-account/account-information">
                            <button class="btn mt-3 w-100 bg-color-primary text-white fw-bold">
                                Upgrade Now
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif (Auth::user()->is_premium == 1)
    <div class="container mt-5 pt-5">
        <div class="card">
            <div class="card-body p-5">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <img src="assets/images/error-404.png" width="70%" alt="">
                    </div>
                    <div class="col-lg-7 col-sm-12 mt-3">
                        <h1 style="color: #CA6035;" class="pt-5 heading-responsive">
                            <b>
                                Your account is premium.
                            </b>
                        </h1>
                        <p class="paragraph-responsive">
                            You can upgrade again when your premium account is expired.
                        </p>
                        <a href="/" class="centered-button">
                            <button class="btn mt-2 px-4" style="background-color: #3E6D81; color: white;">Back To Home</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection