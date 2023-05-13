@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/profile.css') }}">
@endsection
@section('title', 'Profile')

@section('content')
    <div class="row pt-5 d-flex justify-content-center w-100 mt-5">
        <div class="d-flex justify-content-center col-lg-6">
            <img class="mx-5" style="width: 300px; height: 300px; border-radius: 100%;"
                src="{{ asset('images/assets/bazaar.jpeg') }}">
        </div>
        <div class="d-flex justify-content-center justify-content-lg-start align-items-center col-lg-6 pt-5">
            <div class="contact-p text-center text-lg-start w-100 justify-content-center justify-content-lg-start">
                <h1 class="title-contact fw-bold" style="color: #146C94">Profile</h1>
                <h5 class="title-contact fs-3">Hi <small style="color:#DF9B44" class="fs-3">{{ $user->name }}</small>
                </h5>
                <p class="fs-5"><i class="fa-solid fa-envelope mt-3 me-3 fs-5"></i>{{ $user->email }}</p>
                <p class="fs-5"><i class="fa-solid fa fa-phone me-3"></i>{{ $user->phone_number }}</p>
                @auth
                    <form action="/logout" method="POST" class="mb-2">
                        @csrf
                        <button type="submit" class="btn btn-danger font-montserrat fw-semibold py-2 px-4">Logout</button>
                    </form>
                    <button type="button" class="btn btn-warning font-montserrat fw-semibold py-2 px-4" data-bs-toggle="modal"
                        data-bs-target="#addNewAdmin">+
                        Edit profile</button>
                @endauth
            </div>
        </div>
        <div class="modal fade" id="addNewAdmin" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <form method="POST" action="/updateuser" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit profile</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="category">Email</label>
                            <input type="email" class="form-control" id="category" value="{{ $user->email }}"
                                name="email" required>
                            <label for="phone">Phone number</label>
                            <input type="text" class="form-control" id="phone" value="{{ $user->phone_number }}"
                                name="phone" required>
                            <label for="bank">Bank account number</label>
                            <input type="text" class="form-control" id="bank" value="{{ $user->bank_account_number }}"
                                name="bank" required>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
