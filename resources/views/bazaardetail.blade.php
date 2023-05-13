@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/joinbazaar.css') }}">
@endsection
@section('title', 'Pendaftaran Bazaar')

@section('content')
    <div class="container mt-5">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-start pb-md-5 pb-3">
            <img src="{{ asset('images/assets/bazaarbond.png') }}" class="rounded-4 bazaar-logo">
            <div class="ps-md-5 text-center text-md-start">
                <div class="d-flex flex-column flex-md-row text-center text-md-start pt-4 pt-md-0 align-items-center">
                    <p class="fs-2 pe-4 fw-bold">Nama Bazaar</p>
                    <p class="color-green fs-5 fw-semibold">Status</p>
                </div>
                <p class="fw-medium fs-5">Tanggal Mulai - Tanggal Penitipan</p>
                <p class="fw-medium fs-5">Tempat Berlangsung</p>
                <p class="fw-medium fs-5">Estimasi Biaya</p>
                <p class="fw-medium fs-5">Slot Biaya</p>
                {{-- <form action="{{ route('bazaars.show', $bazaar->id) }}" method="GET" class="me-3 mt-2 mt-md-0 mb-4 mb-md-0"> --}}
                    <button type="submit" style="background-color:#2B2D42;" class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5">Daftar</button>
                {{-- </form> --}}
            </div>
        </div>

        <h3 class="fw-bold mb-5">Tenant Available</h3>
        <div class="flex-container pb-4  w-100" style="display: flex;">
            <p class="fw-medium fs-5 fw-bold">1</p>
            <p class="fw-medium fs-5 ms-5 fw-semibold">Nama Bazaar</p>
            <p class="fw-medium fs-5 ms-5">Deskripsi Bazaar</p>
        </div>
        <div class="flex-container pb-4  w-100" style="display: flex;">
            <p class="fw-medium fs-5 fw-bold">2</p>
            <p class="fw-medium fs-5 ms-5 fw-semibold">Nama Bazaar</p>
            <p class="fw-medium fs-5 ms-5">Deskripsi Bazaar</p>
        </div>
        <div class="flex-container pb-4  w-100" style="display: flex;">
            <p class="fw-medium fs-5 fw-bold">3</p>
            <p class="fw-medium fs-5 ms-5 fw-semibold">Nama Bazaar</p>
            <p class="fw-medium fs-5 ms-5">Deskripsi Bazaar</p>
        </div>
    </div>
@endsection
