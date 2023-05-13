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
            </div>
        </div>

        <form action="/tambah-stand" method="post">
            @csrf
            <div class="mb-3 mt-4">
                <label for="inputName" class="font-montserrat mb-2 fw-semibold">Nama Stand</label>
                <input type="text" class="form-control font-montserrat fw-medium" id="inputName" name="name" placeholder="Masukkan Nama Stand" required>
                <small class="text-danger font-montserrat">
                @foreach ($errors->get('name') as $err)
                    @if ($loop->iteration > 1)
                        <br/>
                    @endif
                    {{ ucfirst($err) }}
                @endforeach
                </small>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-6 text-center">
                    <label for="selectActivity" class="font-montserrat mb-2 fw-semibold">Aktivitas</label>
                    <select name="activity" class="form-select font-montserrat fw-medium" id="selectActivity">
                        <option value="Jual" class="font-montserrat fw-medium">Jual</option>
                        <option value="Promosi" class="font-montserrat fw-medium">Promosi</option>
                    </select>
                    <small class="text-danger font-montserrat">
                        @foreach ($errors->get('activity') as $err)
                            @if ($loop->iteration > 1)
                                <br/>
                            @endif
                            {{ ucfirst($err) }}
                        @endforeach
                    </small>
                </div>
                <div class="col-6 text-center">
                    <label for="selectElectricity" class="font-montserrat mb-2 fw-semibold">Listrik</label>
                    <select name="electricity" class="form-select font-montserrat fw-medium" id="selectElectricity">
                        <option value="true" class="font-montserrat fw-medium">Pakai</option>
                        <option value="false" class="font-montserrat fw-medium">Tidak Pakai</option>
                    </select>
                    <small class="text-danger font-montserrat">
                        @foreach ($errors->get('electricity') as $err)
                            @if ($loop->iteration > 1)
                                <br/>
                            @endif
                            {{ ucfirst($err) }}
                        @endforeach
                    </small>
                </div>
            </div>
            <div class="mb-3 mt-4">
                <label for="inputActivityDetail" class="font-montserrat mb-2 fw-semibold">Detail Aktivitas</label>
                <textarea class="form-control font-montserrat fw-medium" id="inputActivityDetail" name="activity_detail" placeholder="Masukkan Detail Aktivitas" required></textarea>
                <small class="text-danger font-montserrat">
                @foreach ($errors->get('activity_detail') as $err)
                    @if ($loop->iteration > 1)
                        <br/>
                    @endif
                    {{ ucfirst($err) }}
                @endforeach
                </small>
            </div>
            <div class="mb-3 mt-4">
                <label for="inputExtraNeeds" class="font-montserrat mb-2 fw-semibold">Kebutuhan Tambahan</label>
                <textarea class="form-control font-montserrat fw-medium" id="inputExtraNeeds" name="extra_needs" placeholder="Masukkan Kebutuhan Tambahan" required></textarea>
                <small class="text-danger font-montserrat">
                @foreach ($errors->get('extra_needs') as $err)
                    @if ($loop->iteration > 1)
                        <br/>
                    @endif
                    {{ ucfirst($err) }}
                @endforeach
                </small>
            </div>
            <form action="{{ route('dropzone.storehouse') }}" class="dropzone col justify-content-center text-center mb-4" id="my-dropzone">
                @csrf
                <div class="dz-message" data-dz-message>
                    <img src="{{ asset('/images/assets/imgdragdropicon.png') }}" alt="Add Image Icon" class="dragdropicon mb-3">
                    <p class="font-montserrat fw-medium dragdroptext d-none d-lg-block">Drag & Drop Gambar Di Sini Untuk Di Upload</p>
                    <p class="font-montserrat fw-medium dragdroptext d-lg-none">Upload Gambar Di Sini</p>
                </div>
            </form>
            <small class="text-danger font-montserrat">
                @foreach ($errors->get('gambar_rumah') as $err)
                    @if ($loop->iteration > 1)
                        <br/>
                    @endif
                    {{ ucfirst($err) }}
                @endforeach
            </small>
        </form>
    </div>
@endsection
