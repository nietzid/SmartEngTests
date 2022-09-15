@extends('layouts.app')

@section('content')
<div class="container-fluid p-4 pt-5">
    <div class="row ms-5 me-5">
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
                <a href="<?= url('cbt/create-test'); ?>">
                    <button type="button" name="submit" class="btn btn-block text-light ps-5 pe-5" style="background-color: #3E6D81;">Create Test</button>
                </a>
            </div>
        </div>
        <div class="col">
            <img src="/assets/img/test_img.png" width="25%" style="float: right;" alt="Home">
        </div>
    </div>
    <div class="row m-5">
        @foreach ($tests as $test)            
        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
            <a href="{{ url('cbt/admin', $market->id) }}" style="text-decoration: none; color: black;">
                <div class="card p-2">
                    <div class="card-body">
                        {{$test->title}}
                        <hr class="p-3 pt-0">
                        <p>
                            {{$test->description}}
                            <br>
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
</div>
@endsection