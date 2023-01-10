@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-4">
    {{ Form::open(array('url' => '/generate/store-passage', 'method' => 'POST')) }}
        @csrf
        <div class="row p-3 pt-3">
            <h4 class="text-center mb-1 mt-4" style="color: #CA6035"><b>Preview Passage</b></h4>
            <input type="text" name="title" class="form-control mb-5" name="passage" id="passage" value="{{Session::get('response')->title}} ">
            <br/>
            <textarea class="form-control" name="passage" id="passage" rows="13">
                {{Session::get('response')->text}} 
            </textarea>
        </div>
        <button type="submit" name="submit_passage" class="btn bg-color-primary text-white float-end w-100 mt-3 fw-bold">Generate</button>
    {{ Form::close() }}
</div>
@endsection