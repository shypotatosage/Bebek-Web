@extends('layouts.mainheader')
@section('css')
    <!-- CSS only -->
<link rel="icon" href="{{ asset('images/assets/Icon.jpeg') }}" type="image/ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('styles/navigation.css') }}">

<!-- JavaScript Bundle with Popper -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://kit.fontawesome.com/5a6d7f64b3.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>

<link rel="stylesheet" href="{{ asset('styles/supportStyle.css') }}">
@endsection
@section('title', 'Contact Us')

@section('content')

    <div class="contact-area pb-4">
        <h1 class="title-contact">Hubungi Kami</h1>
        <div class="company-sosmed">
            <i class="fa-brands fa-facebook"></i>
            <h5 class="contact-link"><a href="https://www.facebook.com/grahamandiri.permai7">BazaarBond</a></h5>
        </div>
        <div class="company-sosmed">
            <i class="fa-brands fa-instagram"></i>
            <h5 class="contact-link"><a
                    href="https://www.instagram.com/petzone.indonesia/?igshid=YmMyMTA2M2Y%3D">@bazaarbond</a>
            </h5>
        </div>
        <div class="company-sosmed">
            <i class="fa-brands fa-whatsapp"></i>
            <h5 class="contact-link"><a href="https://api.whatsapp.com/send?phone=081216501976">081216501976</a></h5>
        </div>
    </div>
    <h1 class="title-contact">Kontak Developer</h1>
    <div class="admin-contact-area">
        <div class="box-contact">
            <div class="list">
                <div class="imgBx">
                    <img src="{{ asset('images/assets/bazaar.jpeg') }}">
                </div>
                <div class="content">
                    <div class="contact-p">
                        <h4>Dhammiko Dharmawan</h4>
                        <p>Business Hour : 09.00 - 22.00
                            <br>
                            <i class="fa-brands fa-whatsapp"></i><a
                                href="https://api.whatsapp.com/send?phone=081216501976">081216501976</a>
                            <br>
                            <i class="fa-solid fa-envelope"></i><a href="mailto: dhammiko@gmail.com">dhammiko@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="list">
                <div class="imgBx">
                    <img src="{{ asset('images/assets/bazaar.jpeg') }}">
                </div>
                <div class="content">
                    <div class="contact-p">
                        <h4>Evelyn Callista Yaurentius</h4>
                        <p>Business Hour : 09.00 - 22.00
                            <br>
                            <i class="fa-brands fa-whatsapp"></i><a
                                href="https://api.whatsapp.com/send?phone=081216501976">081216501976</a>
                            <br>
                            <i class="fa-solid fa-envelope"></i><a href="mailto: marsha@gmail.com">marsha@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="list">
                <div class="imgBx">
                    <img src="{{ asset('images/assets/bazaar.jpeg') }}">
                </div>
                <div class="content">
                    <div class="contact-p">
                        <h4>Hayya</h4>
                        <p>Business Hour : 09.00 - 22.00
                            <br>
                            <i class="fa-brands fa-whatsapp"></i><a
                                href="https://api.whatsapp.com/send?phone=081216501976">081216501976</a>
                            <br>
                            <i class="fa-solid fa-envelope"></i><a href="mailto: marsha@gmail.com">marsha@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div><div class="list">
                <div class="imgBx">
                    <img src="{{ asset('images/assets/bazaar.jpeg') }}">
                </div>
                <div class="content">
                    <div class="contact-p">
                        <h4>Marcel Jeremy</h4>
                        <p>Business Hour : 09.00 - 22.00
                            <br>
                            <i class="fa-brands fa-whatsapp"></i><a
                                href="https://api.whatsapp.com/send?phone=081216501976">081216501976</a>
                            <br>
                            <i class="fa-solid fa-envelope"></i><a href="mailto: marsha@gmail.com">marsha@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div><div class="list">
                <div class="imgBx">
                    <img src="{{ asset('images/assets/bazaar.jpeg') }}">
                </div>
                <div class="content">
                    <div class="contact-p">
                        <h4>Micheila Jiemesha</h4>
                        <p>Business Hour : 09.00 - 22.00
                            <br>
                            <i class="fa-brands fa-whatsapp"></i><a
                                href="https://api.whatsapp.com/send?phone=081216501976">081216501976</a>
                            <br>
                            <i class="fa-solid fa-envelope"></i><a href="mailto: marsha@gmail.com">marsha@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection