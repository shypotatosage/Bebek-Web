@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/dashboard.css') }}">
@endsection
@section('title', 'Dashboard')

@section('content')
    {{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h5 class="d-inline-block text-uppercase border-bottom border-5" style="color:white; border-color: rgba(256, 256, 256, .3) !important;">Welcome To BazaarBond</h5>
                <h1 class="display-1 text-white mb-md-4">Digital Solution For Your Market</h1>
                @if (Auth::check() && Auth::user()->role == "Host")
                    <div class="pt-2">
                        <a href="/create-bazaar" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Create Bazaar</a>
                        {{-- <a href="" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</a> --}}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
    <div>
        <div class="home-container">
            {{-- <div class="home-container1 py-5">
                <div class="banner-spacer py-5 my-5">
                    <span class="home-text fs-5">Selamat datang!</span>
                    <h1 class="home-text1 fw-semibold">BazaarBond</h1>
                </div>
            </div> --}}
            <div class="home-features">
                <h1 class="home-text2">Discover New Bazaar</h1>
                <div class="home-container3">
                    @foreach ($items as $item)
                        <a href="/bazaar-details/{{ $item->id }}" class="text-decoration-none color-black">
                            <div class="feature-card1-feature-card">
                                <img alt="image"
                                    src="{{ asset('storage/' . $item->logo) }}"
                                    class="feature-card1-image" />
                                <h3 class="feature-card1-text"><span><?= $item['name'] ?></span></h3>
                                <hr>
                                <h4 class="card-text"><span><?= $item['starts_from'] ?></span></h4>
                                <h4 class="card-text">
                                    @if ($item['num_attendees'] >= $item['slot'])
                                        <span>FULL
                                    @else
                                        <span>Available : <?= $item['slot'] - $item['num_attendees'] ?> Slots
                                    @endif

                                    </span>
                                </h4>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center pb-5">
            {!! $items->links() !!}
        </div>
    </div>
@endsection
