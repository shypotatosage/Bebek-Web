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
                @endauth
            </div>
        </div>
    </div>
@endsection
