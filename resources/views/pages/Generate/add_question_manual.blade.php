@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row p-4 pb-0 pt-5">
        <h4 style="color: #CA6035;" class="text-center">
            <b>
                Add Question to Your Test!
            </b>
        </h4>

        <div class="row mt-5">
            <form action="" method="post">
                <label for="Passage">Passage</label>
                <textarea class="form-control mb-3" type="text" name="passage_id" id="passage_id" rows="7"></textarea>

                <label for="Category">Total Question</label>
                <input class="form-control mb-4" type="number" name="number-of-question" id="number-of-question">
            </form>
            <a href="<?= url('generate/add-question-test'); ?>">
                <button type="button" class="btn btn-block text-light mt-4 ps-5 pe-5" style="background-color: #3E6D81; float: right;">Next</button>
            </a>
        </div>
    </div>
</div>
@endsection