@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/joinbazaar.css') }}">
@endsection
@section('title', 'Buat Bazaar')

@section('content')
    <div class="container mt-5">
        
        <form action="/create-bazaar" method="post" class="pb-5">
            @csrf
            <div class="mb-3 mt-4">
                <label for="inputName" class="font-montserrat mb-2 fw-semibold">Nama Bazaar</label>
                <input type="text" class="form-control font-montserrat fw-medium" id="inputName" name="name" placeholder="Masukkan Nama Bazaar" required>
                <small class="text-danger font-montserrat">
                @foreach ($errors->get('name') as $err)
                    @if ($loop->iteration > 1)
                        <br/>
                    @endif
                    {{ ucfirst($err) }}
                @endforeach
                </small>
            </div>
            <div class="mb-3 mt-4">
                <label for="inputLocation" class="font-montserrat mb-2 fw-semibold">Tempat Bazaar</label>
                <input type="text" class="form-control font-montserrat fw-medium" id="inputLocation" name="location" placeholder="Masukkan Lokasi Bazaar" required>
                <small class="text-danger font-montserrat">
                @foreach ($errors->get('location') as $err)
                    @if ($loop->iteration > 1)
                        <br/>
                    @endif
                    {{ ucfirst($err) }}
                @endforeach
                </small>
            </div>
            <div class="mb-3 mt-4">
                <label for="inputPriceEstimation" class="font-montserrat mb-2 fw-semibold">Estimasi Price</label>
                <input class="form-control font-montserrat fw-medium" id="inputPriceEstimation" name="estimation_price" placeholder="Masukkan Estimasi Harga" required>
                <small class="text-danger font-montserrat">
                @foreach ($errors->get('estimation_price') as $err)
                    @if ($loop->iteration > 1)
                        <br/>
                    @endif
                    {{ ucfirst($err) }}
                @endforeach
                </small>
            </div>
            <div class="mb-3 mt-4">
                <label for="inputExtraNeeds" class="font-montserrat mb-2 fw-semibold">Tanggal Mulai</label>
                <input id="date1" type="date"
                            class="form-control font-montserrat fw-medium"
                            name="start_date" value="mm/dd/yyyy">
                <small class="text-danger font-montserrat">
                @foreach ($errors->get('extra_needs') as $err)
                    @if ($loop->iteration > 1)
                        <br/>
                    @endif
                    {{ ucfirst($err) }}
                @endforeach
                </small>
            </div>
            <div class="mb-3 mt-4">
                <label for="inputExtraNeeds" class="font-montserrat mb-2 fw-semibold">Tanggal Akhir</label>
                <input id="date1" type="date"
                            class="form-control font-montserrat fw-medium"
                            name="start_date" value="mm/dd/yyyy">
                <small class="text-danger font-montserrat">
                @foreach ($errors->get('extra_needs') as $err)
                    @if ($loop->iteration > 1)
                        <br/>
                    @endif
                    {{ ucfirst($err) }}
                @endforeach
                </small>
            </div>
            <div class="mb-3 mt-4">
                <label for="inputLogoBazaar" class="font-montserrat mb-2 fw-semibold">Upload Logo Bazaar</label>
                <input type="file" accept="application/pdf" class="form-control font-montserrat fw-medium" id="inputLogoBazaar" name="bazaar_logo" placeholder="Upload Logo Bazaar" required>
                <small class="text-danger font-montserrat">
                @foreach ($errors->get('bazaar_logo') as $err)
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
