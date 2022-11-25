@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-4">
    <div class="row p-5 pb-5">
        <h1 class="text-center text-color-secondary"><b>Finish</b></h1>
    </div>
    <div class="Timeline mb-5 flex">
        <div class="event1">
            <svg height="30" width="120">
                <circle cx="60" cy="12" r="7" fill="#CA6035" />
            </svg>
            <div class="timeline-text">Account information</div>
        </div>
        <svg height="5" width="200">
            <line x1="0" y1="0" x2="200" y2="0" style="stroke:#CA6035; stroke-width:15" />
        </svg>

        <div class="event1">
            <svg height="30" width="120">
                <circle cx="60" cy="12" r="7" fill="#CA6035" />
            </svg>
            <div class="timeline-text">Plan Option</div>
        </div>
        <svg height="5" width="200">
            <line x1="0" y1="0" x2="200" y2="0" style="stroke:#CA6035; stroke-width:15" />
        </svg>

        <div class="event1">
            <svg height="30" width="120">
                <circle cx="60" cy="12" r="7" fill="#CA6035" />
            </svg>
            <div class="timeline-text">Checkout</div>
        </div>
        <svg height="5" width="200">
            <line x1="0" y1="0" x2="200" y2="0" style="stroke:#CA6035; stroke-width:15" />
        </svg>

        <div class="event1">
            <svg height="30" width="120">
                <circle cx="60" cy="12" r="7" fill="#CA6035" />
            </svg>
            <div class="timeline-text">Finish</div>
        </div>
    </div>
    <div class="row mb-5 pb-5">
        <div class="col-lg-5 col-sm-12 flex">
            <img src="../assets/images/done.png" class="flex" width="70%" alt="">
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