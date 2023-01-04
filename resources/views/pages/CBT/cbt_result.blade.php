@extends('layouts.logged-navbar')

@section('content')
<div class="container p-4 pt-5">
    <div class="card">
        <div class="card-body p-5 pt-2">
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <div class="row">
                        <h1 style="color: #CA6035;" class="pt-5 heading-responsive">
                            <b>
                                Test Result
                            </b>
                        </h1>
                        <p class="paragraph-responsive">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        </p>
                    </div>
                    <div class="row">
                        <table class="table table-borderless" style="width: 50%;">
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    : name
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Date
                                </td>
                                <td>
                                    : date
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Time Spent
                                </td>
                                <td>
                                    : time
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Score
                                </td>
                                <td>
                                    : score
                                </td>
                            </tr>
                        </table>
                    </div>
                    <a href="" class="centered-button">
                        <button class="btn mt-2 px-4" style="background-color: #3E6D81; color: white;">View Details</button>
                    </a>
                </div>
                <div class="col-lg-5 col-sm-12 pt-5">
                    <img src="/assets/images/exam.png" width="70%" alt="hilang">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection