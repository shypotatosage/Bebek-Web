@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/joinbazaar.css') }}">
@endsection
@section('title', 'Pendaftaran Bazaar')

@section('content')
    <div class="container mt-4">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-start">
            <img src="{{ asset('images/assets/bazaarbond.png') }}" class="rounded-4 bazaar-logo">
            <div class="ps-4">
                <div class="d-flex flex-row align-items-center">
                    <p class="fs-3 pe-4 fw-semibold">Nama Bazaar</p>
                    <p class="color-green">Status</p>
                </div>
            </div>
        </div>
    </div>
@endsection
