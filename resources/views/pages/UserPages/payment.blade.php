@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-4">
    <div class="row p-5 pb-5">
        <h3 class="text-center text-color-primary">
            <b>
                Checkout
            </b>
        </h3>
    </div>
    <div class="Timeline pb-3 mb-5 flex">
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
            <line x1="0" y1="0" x2="200" y2="0" style="stroke:#D9D9D9; stroke-width:15" />
        </svg>

        <div class="event1">
            <svg height="30" width="120">
                <circle cx="60" cy="12" r="7" fill="#D9D9D9" />
            </svg>
            <div class="timeline-text">Finish</div>
        </div>
    </div>
    <div class="row mb-5 pb-5">
        <div class="col-lg-6 col-sm-12">
            <div class="card p-4 ps-0">
                <div class="card-body">
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <img src="/assets/images/ovo.png" alt="" style="width: 25px;"> OVO
                        </label>
                        <input class="form-check-input float-end" type="radio" name="payment">
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <img src="/assets/images/paypal.png" alt="" style="width: 25px;"> Paypal
                        </label>
                        <input class="form-check-input float-end" type="radio" name="payment">
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <img src="/assets/images/credit.png" alt="" style="width: 25px;"> Credit Card
                        </label>
                        <input class="form-check-input float-end" type="radio" name="payment" checked>
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <img src="/assets/images/ovo.png" alt="" style="width: 25px;"> OVO
                        </label>
                        <input class="form-check-input float-end" type="radio" name="payment">
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <img src="/assets/images/paypal.png" alt="" style="width: 25px;"> Paypal
                        </label>
                        <input class="form-check-input float-end" type="radio" name="payment">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="row">
                <div class="card pb-4">
                    <div class="mt-3">
                        <label class="form-label fw-bold text-color-primary">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mt-3">
                        <label class="form-label fw-bold text-color-primary">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="mt-3">
                        <label class="form-label fw-bold text-color-primary">Name On Card</label>
                        <input type="text" class="form-control" name="credit">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="nav bg-light fixed-bottom p-5 pt-4 pb-4 bg-white" style="box-shadow: 0px 0px 10px 3px rgb(0,0,0,0.10);">
        <div class="container ms-auto">
            <div class="row">
                <div class="col-6">
                    <a href="/upgrade-account/plan-option">
                        <button class="btn bg-color-secondary ps-5 pe-5 text-white">Back</button>
                    </a>
                </div>
                <div class="col-6">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn bg-color-secondary text-white ps-5 pe-5" style="float: right;">Submit</button>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <p>
                        Are you sure you want to buy this package?
                    </p>
                </div>

                <div class="row">
                    <b>
                        Plan Details
                    </b>
                    <p>
                        Yearly Premium
                    </p>
                </div>

                <div class="row">
                    <b>
                        Account
                    </b>
                    <p>
                        Youremail@mail.com
                    </p>
                </div>

                <b>
                    Subtotal
                </b>
                <p>
                    Rp. 599.000,-
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn text-white bg-color-secondary" data-bs-dismiss="modal">Close</button>
                <a href="/upgrade-account/success-upgrade">
                    <button type="submit" class="btn text-white bg-color-primary">Save changes</button>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
</script>
@endsection