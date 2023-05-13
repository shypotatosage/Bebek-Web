@extends('layouts.mainheader')
@section('css')
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>
    <link rel="stylesheet" href="{{ asset('styles/mybazaar.css') }}">
@endsection
@section('title', 'Pendaftaran Bazaar')
@section('content')
    <div class="container mt-4 text-center">
        <h1>{{ $bazaar->name }}</h1>
        <p>{{ $bazaar->description }}</p>
        <p>{{ $bazaar->location }}</p>
        <p>{{ $bazaar->starts_from . ' - ' . $bazaar->ends_at }}</p>
        <button class="btn btn-primary" id="pay-button">Pay Now</button>
    </div>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{$snapToken}}');
          // customer will be redirected after completing payment pop-up
        });
    </script>
@endsection
