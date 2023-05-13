@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/profile.css') }}">
@endsection
@section('title', 'Profile')

@section('content')
<div class="flex-container pt-5" style="display: flex; justify-content: center;">
    <div style="display: flex; justify-content: center;">


                {{-- <img class="mx-5" style="width: 300px; height: 300px; border-radius: 100%;" src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="{{ asset('images/assets/bazaar.jpeg') }}"> --}}

        <img class="mx-5" style="width: 300px; height: 300px; border-radius: 100%;"  src="{{ asset('images/assets/bazaar.jpeg') }}">

        
        {{-- <img class="mx-5" style="width: 300px; height: 300px; border-radius: 100%;"  src="{{ asset('images/assets/bazaar.jpeg') }}"> --}}
    </div>
    {{-- <div style="justify-content: center;" class="pt-5">
        <div class="contact-p">
        <h1 class="title-contact" style="color: #EF233D">Profile</h1>
        <h5 class="title-contact">Hi <small style="color:#DF9B44">Tenants</small></h5>
        <i class="fa-solid fa-envelope mt-3 me-3"></i>dhammiko@gmail.com
        <br>
        <i class="fa-solid fa fa-phone mt-3 me-3"></i>081177773333
    </div> --}}
    <div style="justify-content: center;" class="pt-5">
        <div class="contact-p">
            <h1 class="title-contact" style="color: #EF233D">Profile</h1>
            <h5 class="title-contact">Hi <small style="color:#DF9B44">{{ $user->name }}</small></h5>
            <i class="fa-solid fa-envelope mt-3 me-3"></i>{{ $user->email }}
            <br>
            <i class="fa-solid fa fa-phone mt-3 me-3"></i>{{ $user->phone_number }}
            @auth
                    <form action="/logout" method="POST" class="mb-2">
                        @csrf
                        <button type="submit"
                            class="btn btn-logout font-montserrat fw-semibold py-2 px-4">Logout</button>
                    </form>
                @endauth
        </div>
    </div>
    </div>
</div> 
@endsection
