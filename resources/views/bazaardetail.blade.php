@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/joinbazaar.css') }}">
@endsection
@section('title', 'Bazaar Detail')

@section('content')

    @foreach ($items as $item)
        <div class="container mt-5">
            <div
                class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-start pb-md-5 pb-3">
                <img src="{{ asset('images/assets/bazaarbond.png') }}" class="rounded-4 bazaar-logo">
                <div class="ps-md-5 text-center text-md-start">
                    <div class="d-flex flex-column flex-md-row text-center text-md-start pt-4 pt-md-0 align-items-center">
                        <p class="fs-2 pe-4 fw-bold"><?= $item['name'] ?></p>
                        <p class="color-green fs-5 fw-semibold">
                            @if (count($tenants) >= $item['slot'])
                                FULL
                            @else
                                Available : <?= $item['slot'] - count($count) ?> Slots
                            @endif
                        </p>
                    </div>
                    <p class="fw-medium fs-5"><?= $item['starts_from'] ?> - <?= $item['ends_at'] ?></p>
                    <p class="fw-medium fs-5"><?= $item['location'] ?></p>
                    <p class="fw-medium fs-5"><?= $item['price_estimation'] ?></p>
                    {{-- <form action="{{ route('bazaars.show', $bazaar->id) }}" method="GET" class="me-3 mt-2 mt-md-0 mb-4 mb-md-0"> --}}
                    @auth
                        @if (auth()->user()->role == 'Host')
                            <form action="/updatetenants" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_bazaar" value="{{ $item['id'] }}">
                                <button type="submit" style="background-color:#cf3e12;"
                                    class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5" name="remove"
                                    value="remove">Remove</button>
                            </form>
                            <button type="button" class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5"
                                data-bs-toggle="modal" data-bs-target="#editbazaar">+
                                Edit Bazaar</button>

                            <div class="modal fade" id="editbazaar" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/update-bazaar" method="patch" enctype="multipart/form-data" class="py-5 px-4">
                                            @csrf
                                            <input type="hidden" name="bazaar_id" value="{{ $bazaar->id }}">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ asset('storage/' . $bazaar->logo) }}" alt="{{ $bazaar->name }}">
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <label for="inputName" class="mb-2 fw-semibold">Ubah Nama Bazaar</label>
                                                <input type="text" class="form-control fw-medium" id="inputName" name="name" placeholder="Masukkan Nama Bazaar" value="{{ $bazaar->name }}" required>
                                                <small class="text-danger">
                                                @foreach ($errors->get('name') as $err)
                                                    @if ($loop->iteration > 1)
                                                        <br/>
                                                    @endif
                                                    {{ ucfirst($err) }}
                                                @endforeach
                                                </small>
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <label for="inputDescription" class="font-montserrat mb-2 fw-semibold">Ubah Deskripsi Bazaar</label>
                                                <textarea class="form-control font-montserrat fw-medium" id="inputDescription" name="description"
                                                    placeholder="Masukkan Deskripsi Bazaar" required>{{ $bazaar->description }}</textarea>
                                                <small class="text-danger font-montserrat">
                                                    @foreach ($errors->get('description') as $err)
                                                        @if ($loop->iteration > 1)
                                                            <br />
                                                        @endif
                                                        {{ ucfirst($err) }}
                                                    @endforeach
                                                </small>
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <label for="inputLocation" class="mb-2 fw-semibold">Ubah Tempat Bazaar</label>
                                                <input type="text" class="form-control fw-medium" id="inputLocation" name="location" placeholder="Masukkan Lokasi Bazaar" value="{{ $bazaar->location }}" required>
                                                <small class="text-danger">
                                                @foreach ($errors->get('location') as $err)
                                                    @if ($loop->iteration > 1)
                                                        <br/>
                                                    @endif
                                                    {{ ucfirst($err) }}
                                                @endforeach
                                                </small>
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <label for="inputPriceEstimation" class="mb-2 fw-semibold">Ubah Estimasi Harga</label>
                                                <input class="form-control fw-medium" id="inputPriceEstimation" name="price_estimation" placeholder="Masukkan Estimasi Harga" value="{{ $bazaar->price_estimation }}" required>
                                                <small class="text-danger">
                                                @foreach ($errors->get('price_estimation') as $err)
                                                    @if ($loop->iteration > 1)
                                                        <br/>
                                                    @endif
                                                    {{ ucfirst($err) }}
                                                @endforeach
                                                </small>
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <label for="inputStartsFrom" class="mb-2 fw-semibold">Tanggal Mulai</label>
                                                <input id="date1" type="date"
                                                            class="form-control fw-medium"
                                                            name="starts_from" value="{{ $bazaar->starts_from }}" placeholder="mm/dd/yyyy" required>
                                                <small class="text-danger">
                                                @foreach ($errors->get('starts_from') as $err)
                                                    @if ($loop->iteration > 1)
                                                        <br/>
                                                    @endif
                                                    {{ ucfirst($err) }}
                                                @endforeach
                                                </small>
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <label for="inputEndsAt" class="mb-2 fw-semibold">Tanggal Akhir</label>
                                                <input id="date1" type="date"
                                                            class="form-control fw-medium"
                                                            name="ends_at" placeholder="mm/dd/yyyy" value="{{ $bazaar->ends_at }}" required>
                                                <small class="text-danger">
                                                @foreach ($errors->get('ends_at') as $err)
                                                    @if ($loop->iteration > 1)
                                                        <br/>
                                                    @endif
                                                    {{ ucfirst($err) }}
                                                @endforeach
                                                </small>
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <label for="inputSlot" class="mb-2 fw-semibold">Slot</label>
                                                <input type="number" class="form-control fw-medium" id="inputSlot" name="slot" placeholder="Masukkan Slot" value="{{ $bazaar->slot }}" required>
                                                <small class="text-danger">
                                                @foreach ($errors->get('slot') as $err)
                                                    @if ($loop->iteration > 1)
                                                        <br/>
                                                    @endif
                                                    {{ ucfirst($err) }}
                                                @endforeach
                                                </small>
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <label for="inputSyaratKetentuan" class="mb-2 fw-semibold">Update Dokumen Syarat & Ketentuan</label>
                                                <input type="file" accept="application/pdf" class="form-control fw-medium" id="inputSyaratKetentuan" name="syarat_ketentuan" placeholder="Upload Dokumen Syarat & Ketentuan">
                                                <small class="text-danger">
                                                @foreach ($errors->get('syarat_ketentuan') as $err)
                                                    @if ($loop->iteration > 1)
                                                        <br/>
                                                    @endif
                                                    {{ ucfirst($err) }}
                                                @endforeach
                                                </small>
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <label for="inputLogoBazaar" class="mb-2 fw-semibold">Update Logo Bazaar</label>
                                                <input type="file" accept="image/*" class="form-control fw-medium" id="inputLogoBazaar" name="logo" placeholder="Upload Logo Bazaar">
                                                <small class="text-danger">
                                                @foreach ($errors->get('logo') as $err)
                                                    @if ($loop->iteration > 1)
                                                        <br/>
                                                    @endif
                                                    {{ ucfirst($err) }}
                                                @endforeach
                                                </small>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary fw-semibold py-2 px-4 mt-2 mb-4" id="create-bazaar-btn">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @else
                            @if (count($count) >= $item['slot'])
                                <button type="submit" style="background-color:#2B2D42;"
                                    class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5"
                                    disabled>Daftar</button>
                            @else
                                <form action="/join-bazaar/<?= $item['id'] ?>" method="get">
                                    <button type="submit" style="background-color:#2B2D42;"
                                        class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5">Daftar</button>
                                    </a>
                            @endif
                        @endif
                    @endauth


                    {{-- </form> --}}
                </div>
            </div>
            @php
                $i = 1;
            @endphp
            @foreach ($count as $tenant)
                <div class="flex-container pb-4  w-100" style="display: flex;">
                    <p class="fw-medium fs-5 fw-bold"><?= $i ?></p>
                    <p class="fw-medium fs-5 ms-5 fw-semibold"><?= $tenant['username'] ?></p>
                    <p class="fw-medium fs-5 ms-5"><?= $tenant['activity_detail'] ?></p>

                    @auth
                        @if (auth()->user()->role == 'Host')
                            <form action="/updatetenants" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_btenant" value="{{ $tenant['id'] }}">
                                <input type="hidden" name="id_bazaar" value="{{ $item['id'] }}">

                                @if ($tenant['status'] == 'pending')
                                    <button type="submit" style="background-color:#12cf12;" name="acc" value="acc"
                                        class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5 fs-5 ms-5">Accept</button>
                                    <button type="submit" style="background-color:#cf1812;" name="rej" value="rej"
                                        class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5 fs-5 ms-5">Reject</button>
                                @else
                                    @if ($tenant['status'] == 'accepted')
                                        <input type="hidden" name="change" value="change">
                                        <button type="submit" style="background-color:#cf1812;"
                                            class="btn btn-secondary font-montserrat fw-semibold py-2 px-4 mt-2 px-5 fs-5 ms-5">Cancel</button>
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
