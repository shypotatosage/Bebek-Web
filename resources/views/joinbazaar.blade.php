@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/joinbazaar.css') }}">
@endsection
@section('title', 'Pendaftaran Bazaar')

@section('content')
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-start">
        <img src="{{ asset('images/assets/bazaarbond.png') }}" class="rounded-4 bazaar-logo">
        <div>
            <p>Nama Bazaar</p>
        </div>
    </div>
@endsection
