{{-- @extends('layouts.mainlayout')
@section('title', $title)
@section('content') --}}

<link rel="stylesheet" href="{{ asset('styles/support.css') }}">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <div class="contact-area">
        <h1 class="title-contact">Hubungi Kami</h1>
        {{-- <div class="company-sosmed">
            <i class="fa-brands fa-facebook"></i>
            <h5 class="contact-link"><a href="https://www.facebook.com/grahamandiri.permai7">Graha Mandiri Permai</a></h5>
        </div> --}}
        <div class="company-sosmed">
            <i class="fa fa-instagram"></i>
            <h5 class="contact-link"><a
                    href="https://www.instagram.com/grahamandiri_permai/?igshid=YmMyMTA2M2Y%3D">@petzone.indonesia</a>
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
            {{-- @foreach ($contacts as $contact) --}}
            <div class="list">
                <div class="imgBx">
                    <img src="/images/contact/1.jpg">
                    {{-- @if ($contact['contact_image'] != '')
                                <img src="/images/profile_picture/{{ $contact['contact_image'] }}">
                            @else
                                <img src="{{ asset('/images/profile_picture/defaultprofilepicture.jpg') }}">
                            @endif --}}
                    {{-- <img src="/images/profile_picture/defaultprofilepicture.jpg"> --}}
                </div>
                <div class="content">


                    <div class="contact-p">
                        <h4>Marsha Alexis Likorawung</h4>
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
                    <img src="/images/contact/1.jpg">
                </div>
                <div class="content">


                    <div class="contact-p">
                        <h4>Trisha Alexis Likorawung</h4>
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
                    <img src="/images/contact/1.jpg">
                </div>
                <div class="content">


                    <div class="contact-p">
                        <h4>Micheila Jiemesha</h4>
                        <p>Business Hour : 09.00 - 22.00
                            <br>
                            <i class="fa-brands fa-whatsapp"></i><a
                                href="https://api.whatsapp.com/send?phone=082271486565">082271486565</a>
                            <br>
                            <i class="fa-solid fa-envelope"></i><a href="mailto: mjiemesha@gmail.com">mjiemesha@gmail.com</a>
                        </p>

                    </div>
                </div>

            </div>
            <div class="list">
                <div class="imgBx">
                    <img src="/images/contact/1.jpg">
                </div>
                <div class="content">


                    <div class="contact-p">
                        <h4>Evelyn Callista Yaurentius</h4>
                        <p>Business Hour : 09.00 - 12.00
                            <br>
                            <i class="fa-brands fa-whatsapp"></i><a
                                href="https://api.whatsapp.com/send?phone=0811467737">0811467737</a>
                            <br>
                            <i class="fa-solid fa-envelope"></i><a href="mailto: eyaurentius@gmail.com">eyaurentius@gmail.com</a>
                        </p>

                    </div>
                </div>

            </div>

        </div>
        {{-- <div class="contact-pagination d-flex justify-content-center">
                    {!! $contacts->links() !!}
                </div> --}}
        {{-- @endforeach --}}
    </div>
    </div>

    {{-- <section>

    </section>

    <div class="map-container">
        <h1>Datang Ke Kantor Marketing Kami</h1>
        <p>Jalan Pemuda No. 10, Waingapu, Sumba Timur</p>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1706.5402800363822!2d120.25974900396793!3d-9.65025413772907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c9b67a050a6b7%3A0xfef584515665379!2sJl.%20Pemuda%20No.10%2C%20Matawai%2C%20Kec.%20Kota%20Waingapu%2C%20Kabupaten%20Sumba%20Timur%2C%20Nusa%20Tenggara%20Tim.!5e0!3m2!1sen!2sid!4v1670669376414!5m2!1sen!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> --}}


