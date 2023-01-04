@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-5">
    @if (Auth::user()->is_premium == 1)
    <div class="row pt-5">
        <div class="col">
            <div style="color: #CA6035;">
                <h2>
                    <b>
                        Test Collection
                    </b>
                </h2>
                <p style="color: black;">
                    Here you can view and manage all the tests you have created!
                </p>
                <a href="{{ asset('cbt/create-test') }}">
                    <button type="button" name="submit" class="btn btn-block text-light ps-3 pe-3" style="background-color: #3E6D81; border-radius: 25px">Create Test</button>
                </a>
            </div>
        </div>
        <div class="col">
            <img src="{{ asset('/assets/images/test_img.png') }}" width="25%" style="float: right;" alt="Home">
        </div>
    </div>
    <div class="row mt-5">
        @foreach ($tests as $test)
        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
            <a href="{{ url('cbt/admin-test-detail', $test->id) }}" style="text-decoration: none; color: black;">
                <div class="card p-2" style="min-height: 250px;">
                    <div class="card-body">
                        <b>
                            {{$test->title}}
                        </b>
                        <hr class="pt-0">
                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;">
                            {{$test->description}}
                        </p>
                        <p>
                            {{$test->date}}
                            <br>
                            {{$test->start_time}} - {{$test->end_time}}
                        </p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    @else
    <div class="row">
        <div class="card">
            <div class="card-body p-5">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <img src="{{ asset('assets/images/error-404.png') }}" width="70%" alt="">
                    </div>
                    <div class="col-lg-7 col-sm-12 mt-3">
                        <h1 style="color: #CA6035;" class="pt-5 heading-responsive">
                            <b>
                                Upgrade your account
                            </b>
                        </h1>
                        <p class="paragraph-responsive">
                            You must be a premium member to access this feature.
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