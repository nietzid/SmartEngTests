@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-4">
    <div class="row p-5 pb-5">
        <h1 class="text-center" style="color: #CA6035"><b>Finish</b></h1>
    </div>
    <div class="row mb-5 pb-5">
        <div class="col-lg-5 col-sm-12">
            <img src="../assets/images/done.png" class="flex" width="80%" alt="">
        </div>
        <div class="col-lg-7 col-sm-12">
            <div class="row">
                <div class="card p-5">
                    <h3 class="text-color-primary mt-5">
                        <b>
                            Your Account Has Been Upgraded
                        </b>
                    </h3>
                    <p class="text-grey">
                        You will receive an email within 24 hours confirming the changes
                    </p>
                    <button class="btn mt-3  mb-5 text-color-primary bg-light" style="width: fit-content; border: 1px solid #3E6D81;">
                        Print Invoice
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection