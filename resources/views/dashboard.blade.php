

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
<div>
    <link href="./home.css" rel="stylesheet" />
    <div class="home-container">
      <div class="home-container1">
        <div class="home-banner">
        </div>
        <div class="banner-spacer">
            <span class="home-text">Selamat datang!</span>
            <h1 class="home-text1">BazaarBond</h1>
        </div>
      </div>
      <div class="home-features">
        <h1 class="home-text2">Discover new bazaar</h1>
        <div class="home-container3">
            @foreach ($items as $item)
                <div class="feature-card1-feature-card">
                <img
                  alt="image"
                  src="https://images.unsplash.com/photo-1512295767273-ac109ac3acfa?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDF8fHllbGxvdyUyMHRlY2h8ZW58MHx8fHwxNjI2MjU1NDk0&ixlib=rb-1.2.1&w=1000"
                  class="feature-card1-image"/>
                <h3 class="feature-card1-text"><span><?=$item["name"]?></span></h3>
                <hr>
                <h4 class="card-text"><span><?=$item["starts_from"]?></span></h4>
                <h4 class="card-text"><span>Num:<?=$item["num_attendees"]?>/Slot:<?=$item["slot"]?>
                </span></h4>
              </div>
            @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection