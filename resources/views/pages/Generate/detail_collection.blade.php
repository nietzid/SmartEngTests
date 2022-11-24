@extends('layouts.logged-navbar')

@section('content')
<div class="container">
    <div style="color: #CA6035;" class="row mb-5 pt-5 mt-3 text-center">
        <h3>
            <b>
                <?= $question_type;
                // dd($questions);
                ?>

            </b>
        </h3>
    </div>

    @foreach ($questions as $question)
    <div class="card p-4 mt-3 shadow-md" style="color: #555555;">
        <div class="row pb-3">
            <b>
                {{$question->passages}}
            </b>
        </div>
        <div class="row ps-3">
            A. {{$question->question}} <br>
            B. {{$question->question}} <br>
            C. {{$question->question}} <br>
            D. {{$question->question}} <br>
            <b class="pt-2 ps-0">
                Ans: {{$question->answer}}
            </b>
        </div>
        <div class="row mt-4">
            <div class="col">
                <span>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$question->id}}" style="background-color: #3E6D81;">
                        <iconify-icon inline icon="akar-icons:edit" style="color: white; font-size: 17px;"></iconify-icon>
                    </button>
                </span>
                <!-- Button trigger modal -->
                <!-- <a href="detail.php?id_siswa=" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal-">Detail</a> -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal-{{$question->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detail Info</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="text-align: justify">
                                <table class="table">
                                    <tr>
                                        <td>
                                            Passage
                                        </td>
                                        <td>
                                            <input type="text" class="form-control W-100" value="{{$question->passages}}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Option A
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" value="{{$question->question}}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Option B
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" value="{{$question->question}}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Option C
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" value="{{$question->question}}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Option D
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" value="{{$question->question}}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Answer
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" value="{{$question->an}}" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-secondary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                <span>
                    <a href="/remove-question/{{$question->id}}">
                        <button class="btn" style="background-color: #CA6035;">
                            <iconify-icon inline icon="fluent:delete-20-regular" style="color: white; font-size: 17px;"></iconify-icon>
                        </button>
                    </a>
                </span>
            </div>
        </div>
    </div>
    @endforeach
</div>

<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
</script>
@endsection