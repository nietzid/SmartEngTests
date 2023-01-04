@extends('layouts.admin-navbar')

@section('content')
<div>
    <h1 style="color: #3E6D81;">
        <b>
            Payment List
        </b>
    </h1>
    <p>
        list of payment request
    </p>
    <table class="table mt-5">
        <thead>
            <tr>
                <th style="color: #CA6035;"> No </th>
                <th style="color: #CA6035;"> Time </th>
                <th style="color: #CA6035;"> Name </th>
                <th style="color: #CA6035;"> Email </th>
                <th style="color: #CA6035;"> Status Upgrade </th>
                <th style="color: #CA6035;"> Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($joinData as $data)
            <tr>
                <td>
                    -
                </td>
                <td>
                    {{ $data->created_at }}
                </td>
                <td>
                    {{ $data->name }}
                </td>
                <td>
                    {{ $data->email }}
                </td>
                <td>
                    @if ($data->upgrade_request == 'request')
                    <span class="badge badge-pill badge-warning p-2 px-4">
                        {{ $data->upgrade_request }}
                    </span>
                    @elseif ($data->upgrade_request == 'failed')
                    <span class="badge badge-pill badge-danger p-2 px-4">
                        {{ $data->upgrade_request }}
                    </span>
                    @else
                    <span class="badge badge-pill badge-success p-2 px-4">
                        {{ $data->upgrade_request }}
                    </span>
                    @endif
                </td>
                <td>
                    <button type="button" class="btn text-white" style="background-color: #3E6D81;" data-bs-toggle="modal" data-bs-target="#updateModal-{{ $data->id }}">
                        <iconify-icon inline icon="ic:round-check"></iconify-icon> Accept
                    </button>
                    <div class="modal fade" id="updateModal-{{ $data->id }}" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateModalLabel">{{ $data->email }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body pt-3">
                                    Are you sure want to accept request upgrade this user?
                                </div>
                                <div class="modal-footer">
                                    <form action="accept-request/<?php $data->id ?>" method="post">
                                        @csrf
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Accept</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn text-white" style="background-color: #CA6035;" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $data->id }}">
                        <iconify-icon inline icon="radix-icons:cross-2"></iconify-icon> Decline
                    </button>
                    <div class="modal fade" id="deleteModal-{{ $data->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">{{ $data->email }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body pt-3 pb-3">
                                    Are you sure want to decline request upgrade this user?
                                </div>
                                <div class="modal-footer">
                                    <form action="decline-request/{{ $data->id }}" method="post">
                                        @csrf
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger">Decline</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
</script>
@endsection