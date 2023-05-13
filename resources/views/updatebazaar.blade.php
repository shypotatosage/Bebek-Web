@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/updatebazaar.css') }}">
@endsection
@section('title', 'Update Bazaar')

@section('content')
    <div class="container mt-5">
        <form action="/update-bazaar" method="POST" enctype="multipart/form-data" class="py-5 px-4">
            @csrf
            @method('PATCH')
            <input type="hidden" name="bazaar_id" value="{{ $bazaar->id }}">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('storage/' . $bazaar->logo) }}" alt="{{ $bazaar->name }}" style="width: 250px; height: 250px;" class="rounded-5">
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
                <button type="submit" class="btn btn-primary fw-semibold py-2 px-4 mt-2 mb-4" id="update-bazaar-btn">Update</button>
            </div>
        </form>
    </div>
@endsection
