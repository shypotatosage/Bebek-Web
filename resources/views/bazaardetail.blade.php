@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/joinbazaar.css') }}">
@endsection
@section('title', 'Pendaftaran Bazaar')

@section('content')

    @foreach ($items as $item)
        <div class="container mt-5">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-start pb-md-5 pb-3">
                <img src="{{ asset('images/assets/bazaarbond.png') }}" class="rounded-4 bazaar-logo">
                <div class="ps-md-5 text-center text-md-start">
                    <div class="d-flex flex-column flex-md-row text-center text-md-start pt-4 pt-md-0 align-items-center">
                        <p class="fs-2 pe-4 fw-bold"><?=$item['name']?></p>
                        <p class="color-green fs-5 fw-semibold">
                            @if (count($tenants)>=$item["slot"])
                            FULL
                            @else
                            Available : <?=$item["slot"]-count($count)?> Slots
                            @endif
                        </p>
                    </div>
                    <p class="fw-medium fs-5"><?=$item['starts_from']?> - <?=$item['ends_at']?></p>
                    <p class="fw-medium fs-5"><?=$item['location']?></p>
                    <p class="fw-medium fs-5"><?=$item['price_estimation']?></p>
                    {{-- <form action="{{ route('bazaars.show', $bazaar->id) }}" method="GET" class="me-3 mt-2 mt-md-0 mb-4 mb-md-0"> --}}
                    @if (auth()->user()->role == "Host")
                        <button type="submit" style="background-color:#cf3e12;" class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5">Remove</button>
                    @else
                    
                        @if (count($count)>=$item["slot"])
                        <button type="submit" style="background-color:#2B2D42;" class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5" disabled>Daftar</button>
                        @else
                        <form action="/join-bazaar/<?=$item['id']?>" method="get">
                            <button type="submit" style="background-color:#2B2D42;" class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5">Daftar</button>
                        </a>
                        
                         @endif
                    
                       
                    @endif


                    {{-- </form> --}}
                </div>
            </div>
            @php
                $i = 1;
            @endphp
            @foreach ($count as $tenant)
                <div class="flex-container pb-4  w-100" style="display: flex;">
                    <p class="fw-medium fs-5 fw-bold"><?=$i?></p>
                    <p class="fw-medium fs-5 ms-5 fw-semibold"><?=$tenant['username']?></p>
                    <p class="fw-medium fs-5 ms-5"><?=$tenant['activity_detail']?></p>
                
                @auth
                    @if (auth()->user()->role == "Host")
                        <form action="/updatetenants" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id_btenant" value="{{ $tenant['id'] }}">
                            <input type="hidden" name="id_bazaar" value="{{ $item['id'] }}">

                        @if ($tenant['status'] == "pending")
                            <button type="submit" style="background-color:#12cf12;" name="acc" value="acc" class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5 fs-5 ms-5">Accept</button> 
                            <button type="submit" style="background-color:#cf1812;" name="rej" value="rej" class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5 fs-5 ms-5">Reject</button> 
                        @else
                            @if ($tenant['status'] == "accepted")
                                <input type="hidden" name="change" value="change">
                                <button type="submit" style="background-color:#cf1812;" class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5 fs-5 ms-5">Cancel</button> 
                            @endif
                        @endif
                        </form>
                    @endif
                @endauth   
            </div>
            @endforeach
            
            {{-- <h3 class="fw-bold mb-5">Tenant Available</h3>
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
            </div> --}}
        </div>
    @endforeach
    
@endsection
<footer>
    @include('layouts.footer')
</footer>