@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/mybazaar.css') }}">
@endsection
@section('title', 'Pendaftaran Bazaar')
@section('content')
    <div class="container mt-4">
        @if (Auth::user()->role == "Tenant")
            <h2 class="pt-4 text-center w-100 fw-bold">Bazaars I Applied To</h2>
            
            @if (count($bazaars) == 0)
                <div class="w-100 py-5 my-5">
                    <div class="py-5 text-center w-100 my-5">
                        <h3 class="fw-medium py-5 my-5">You haven't applied to any Bazaars yet</h3>
                    </div>
                </div>
            @else
                <div class="row mt-4 pb-5 justify-content-evenly">
                    
                    @foreach ($bazaars as $bazaar)

                        <div class="rounded-4 col-10 col-md-5 col-lg-3 me-2 bazaar-tenant-card p-4 my-3 my-md-4">
                            <img src="{{ asset('images/assets/bazaar.jpeg') }}" alt="" class="w-100 rounded-3">
                            <p class="fw-semibold fs-4 w-100 text-center pt-3"><?=$bazaar['name']?></p>
                            <div class="row justify-content-center">
                                @if ($bazaar->status == "pending")
                                    <h5 class="text-warning text-center">Pending</h5>
                                @elseif ($bazaar->status == "accepted")
                                    <h5 class="text-success text-center">Approved</h5>
                                @else
                                    <h5 class="text-danger text-center">Declined</h5>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @else
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="pt-4 fw-bold">Bazaar List</h2>
                <a href="/create-bazaar"><button class="btn btn-primary">Create Bazaar</button></a>
            </div>
            
            @if (count($bazaars) == 0)
                <div class="w-100 py-5 my-5">
                    <div class="py-5 text-center w-100 my-5">
                        <h3 class="fw-medium py-5 my-5">You haven't owned any Bazaars yet</h3>
                    </div>
                </div>
            @else
                <div class="row mt-4 pb-5 justify-content-evenly">
                    @foreach ($bazaars as $bazaar)
                        <div class="rounded-4 col-10 col-md-5 col-lg-3 me-2 bazaar-tenant-card p-4 my-3 my-md-4">
                            <img src="{{ asset('images/assets/bazaar.jpeg') }}" alt="" class="w-100 rounded-3">
                            <p class="fw-semibold fs-4 w-100 text-center pt-3 my-1">{{ $bazaar->name }}</p>
                            <p class="fw-medium fs-6 w-100 text-center my-0">{{ count($bazaar->bazaar_tenants) . ' Tenants' }}</p>
                            <p class="fw-medium fs-6 w-100 text-center py-0">{{ $bazaar->location }}</p>

                            <div class="d-flex justify-content-center w-100">
                                <a href="{{ '/bazaar-details/' . $bazaar->id}}" class="d-flex justify-content-center w-100">
                                    <button class="btn btn-primary">Check</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @endif
    </div>
@endsection
