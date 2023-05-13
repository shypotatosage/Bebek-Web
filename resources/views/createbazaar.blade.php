@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/joinbazaar.css') }}">
@endsection
@section('title', 'Buat Bazaar')

@section('content')
    <div class="container mt-5">
        
        <form action="/create-bazaar" method="post" enctype="multipart/form-data" class="pb-5">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <div class="mb-3 mt-4">
                <label for="inputName" class="mb-2 fw-semibold">Nama Bazaar</label>
                <input type="text" class="form-control fw-medium" id="inputName" name="name" placeholder="Masukkan Nama Bazaar" required>
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
                <label for="inputDescription" class="font-montserrat mb-2 fw-semibold">Deskripsi Bazaar</label>
                <textarea class="form-control font-montserrat fw-medium" id="inputDescription" name="description"
                    placeholder="Masukkan Deskripsi Bazaar" required></textarea>
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
                <label for="inputLocation" class="mb-2 fw-semibold">Tempat Bazaar</label>
                <input type="text" class="form-control fw-medium" id="inputLocation" name="location" placeholder="Masukkan Lokasi Bazaar" required>
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
                <label for="inputPriceEstimation" class="mb-2 fw-semibold">Estimasi Harga</label>
                <input class="form-control fw-medium" id="inputPriceEstimation" name="price_estimation" placeholder="Masukkan Estimasi Harga" required>
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
                            name="starts_from" value="mm/dd/yyyy">
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
                            name="ends_at" value="mm/dd/yyyy">
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
                <input type="number" class="form-control fw-medium" id="inputSlot" name="slot" placeholder="Masukkan Slot" required>
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
                <label for="inputSyaratKetentuan" class="mb-2 fw-semibold">Upload Dokumen Syarat & Ketentuan</label>
                <input type="file" accept="application/pdf" class="form-control fw-medium" id="inputSyaratKetentuan" name="syarat_ketentuan" placeholder="Upload Dokumen Syarat & Ketentuan" required>
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
                <label for="inputLogoBazaar" class="mb-2 fw-semibold">Upload Logo Bazaar</label>
                <input type="file" accept="image/*" class="form-control fw-medium" id="inputLogoBazaar" name="logo" placeholder="Upload Logo Bazaar" required>
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
                <button type="submit" class="btn btn-primary fw-semibold py-2 px-4 mt-2 mb-4" id="create-bazaar-btn">Create</button>
            </div>
        </form>
    </div>
@endsection
