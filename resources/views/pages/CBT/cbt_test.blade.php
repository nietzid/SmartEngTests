@extends('layouts.logged-navbar')

@section('content')
<div class="p-5 pb-3 font-poppins">
    <p id="demo" style="color: #3e6d81; font-size: 20px; font-weight: 600; text-align: right;"></p>
    <div class="row mb-2 mt-2 gap-4">
        @php
        // dd($questions);
        $question = $questions[$id-1];
        @endphp
        <div class="col-lg-9 col-md-9 col-12 p-4" style="text-align: justify; box-shadow: 0px 0px 10px -2px rgba(0, 0, 0, 0.35);">
            <p>
                {{$question->passages}}
            </p>
        </div>
        <div class="col-lg col-md col p-4" style="background-color: white;text-align: justify; box-shadow: 0px 0px 10px -2px rgba(0, 0, 0, 0.35);">
            <div class="row row-cols-5 gap-3" style="text-align: center;">
                @php
                $total_question = $questions->count();
                @endphp
                <?php for ($x = 1; $x <= $total_question; $x++) { ?>
                    <a style="background-color: lightgray;" class="page-link py-2 rounded shadow-sm" href="<?php echo $x ?>">
                        <?php echo $x; ?>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="row p-4">
                {{$question->question}}
                <br>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="option" value="A" />
                    {{$question->option1}}
                    <label class="form-check-label">
                    </label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="option" value="B" />
                    {{$question->option2}}
                    <label class="form-check-label">
                    </label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="option" value="C" />
                    {{$question->option3}}
                    <label class="form-check-label">
                    </label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="option" value="D" />
                    {{$question->option4}}
                    <label class="form-check-label">
                    </label>
                </div>
            </div>
        </div>
    </div>
    <nav class="nav bg-light fixed-bottom p-5 pt-4 pb-4 bg-white" style="box-shadow: 0px 0px 10px 3px rgb(0,0,0,0.10);">
        <div class="container ms-auto">
            <div class="row">
                <div class="col-6">
                    <a href="<?php echo $id - 1 ?>">
                        <button class="btn bg-color-secondary" style="width: 150px; color: white;">
                            Back
                        </button>
                    </a>
                </div>
                <div class="col-6">
                    <?php
                    if ($id != $total_question) {
                    ?>
                        <a href="<?php echo $id + 1 ?>">
                            <button class="btn bg-color-primary" style="float: right; width: 150px; color: white;">
                                Next
                            </button>
                        </a>
                    <?php
                    } else {
                    ?>
                        <a href="/cbt/test/result">
                            <button class="btn bg-color-primary" style="float: right; width: 150px; color: white;">
                                Submit
                            </button>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>
</div>
<script>
    // var question = {{ Js::from($question) }};
    // Set the date we're counting down to
    // var countDownDate = new Date(question->date +"," + question->end_time).getTime();
    var countDownDate = new Date("Jan 4, 2023 15:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = "<span class='iconify-inline' data-icon='fluent:timer-12-regular' style='color: #3e6d81;'></span>   " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
@endsection