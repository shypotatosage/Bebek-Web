@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/aboutus.css') }}">
@endsection
@section('title', 'Pendaftaran Bazaar')

@section('content')
<div class="container mt-5">
<!-- About Start -->
<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    <div class="container mb-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3">
                    <h5 style="color: #0369A1" class="fw-bold text-uppercase">About Us</h5>
                    <h1 class="mb-0">The Future Solution For UMKM & Bazaar</h1>
                </div>
                <p class="mb-4">Bazaarbond is here as an digital solution in bringing together UMKM and Bazaars.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i style="color: #0369A1" class="fa fa-check me-3"></i>Guaranteed Safety</h5>
                        <h5 class="mb-3"><i style="color: #0369A1" class="fa fa-check me-3"></i>Professional Staff</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i style="color: #0369A1" class="fa fa-check me-3"></i>24/7 Support</h5>
                        <h5 class="mb-3"><i style="color: #0369A1" class="fa fa-check me-3"></i></i>Fair Prices</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('images/assets/bazaar.jpeg') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    <div class="container mb-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3">
                    <h5 style="color: #0369A1" class="fw-bold text-uppercase">Our Partner</h5>
                    <h1 class="mb-0">The Future Solution For UMKM & Bazaar</h1>
                </div>
                <div class="d-flex justify-content-center">
                    <img class="px-3" src="{{ asset('images/assets/bazaar.jpeg') }}" style="object-fit: cover; width:100px">
                    <img class="px-3" src="{{ asset('images/assets/bazaar.jpeg') }}" style="object-fit: cover; width:100px">
                </div>
            </div>
        </div>
    </div>
</div> --}}
</div>
@endsection