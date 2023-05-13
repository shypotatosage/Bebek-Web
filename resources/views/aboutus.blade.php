@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/aboutus.css') }}">
@endsection
@section('title', 'Pendaftaran Bazaar')

@section('content')

<div class="flex-container pb-4 ">
    <div>
        <h1 class="title-contact">About Us</h1>
        <h5 class="title-contact">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
    </div>
    <div style="display: flex; justify-content: center;">
        <img class="img-us" src="{{ asset('images/assets/bazaarbond.png') }}">
    </div>
</div> 
@endsection
