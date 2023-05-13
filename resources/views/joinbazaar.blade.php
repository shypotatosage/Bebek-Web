@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/joinbazaar.css') }}">
@endsection
@section('title', 'Pendaftaran Bazaar')

@section('content')
    <div class="container mt-5">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-start pb-5">
            <img src="{{ asset('images/assets/bazaarbond.png') }}" class="rounded-4 bazaar-logo">
            <div class="ps-5">
                <div class="d-flex flex-row align-items-center">
                    <p class="fs-2 pe-4 fw-bold">Nama Bazaar</p>
                    <p class="color-green fs-5 fw-semibold">Status</p>
                </div>
                <p class="fw-medium fs-5">Tanggal Mulai - Tanggal Penitipan</p>
                <p class="fw-medium fs-5">Tempat Berlangsung</p>
                <p class="fw-medium fs-5">Estimasi Biaya</p>
                <p class="fw-medium fs-5">Slot Biaya</p>
            </div>
        </div>

        <form action="/tambah-lokasi" method="post">
            @csrf
            <div class="mb-3 mt-4">
                <label for="inputLocationName" class="font-montserrat mb-2">Nama Lokasi<i data-feather="map-pin" class="ms-2 property-location-icon"></i></label>
                <input type="text" class="form-control font-montserrat fw-medium" id="inputLocationName" name="location_name" placeholder="Masukkan Nama Lokasi" required>
                <small class="text-danger font-montserrat">
                @foreach ($errors->get('location_name') as $err)
                    @if ($loop->iteration > 1)
                        <br/>
                    @endif
                    {{ ucfirst($err) }}
                @endforeach
                </small>
            </div>
        </form>
    </div>
@endsection
