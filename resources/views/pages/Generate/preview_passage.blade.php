@extends('layouts.logged-navbar')

@section('content')
<div class="container mt-4">
    <form action="" method="post">
        <div class="row p-3 pt-3">
            <?php
            // dd($reponse)
            ?>
            <h4 class="text-center mb-5 mt-4" style="color: #CA6035"><b>Preview Passage</b></h4>
            <textarea class="form-control" name="passage" id="exampleFormControlInput1" rows="13" value="{{$reponse->text}}">
            {{-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat incidunt fugiat laudantium eos! Quas minus saepe tenetur nesciunt veniam ipsam quod, quidem nisi tempore facilis quaerat rerum, modi reiciendis! Sequi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est praesentium delectus reiciendis! Fuga officia libero deserunt? Molestiae, non, atque debitis placeat amet maiores earum optio distinctio odio corrupti tenetur at! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum a quasi tempore consectetur recusandae, excepturi delectus totam quo at voluptate debitis iusto vel autem distinctio nam corrupti voluptas nostrum neque. Lorem, ipsum dolor sit amet consectetur adipisicing elit. In quae neque unde eaque. Voluptatibus, voluptate deleniti a eveniet nemo molestiae ea nostrum dolore doloremque neque recusandae, officiis fuga nobis alias? --}}
            </textarea>
        </div>
        <!-- <a href="/generate/result"> -->
        <button type="submit" name="submit_passage" class="btn bg-color-primary text-white float-end w-100 mt-3 fw-bold">Generate</button>
        <!-- </a> -->
    </form>
</div>
@endsection