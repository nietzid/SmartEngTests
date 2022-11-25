@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-4">
    <form action="" method="post">
        <div class="row p-3 pt-3">
            <h4 class="text-center mb-5 mt-4" style="color: #CA6035"><b>Preview Passage</b></h4>
            <textarea class="form-control" name="passage" id="passage" rows="13">
                {{Session::get('reponse')->text}} 
            </textarea>
        </div>
        <button type="submit" name="submit_passage" class="btn bg-color-primary text-white float-end w-100 mt-3 fw-bold">Generate</button>
    </form>
</div>
@endsection