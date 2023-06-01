<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/map.js') }}"></script>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Coupon4U</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        @section('link')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <!--<script type="text/javascript" src="public/js/jquery.js"></script>-->
        @show
        @section('scripts')
        @show
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <style>
            body,h1,h2,h3,h4,h5,h6 {
                font-family: "Karma", sans-serif
            }
            .bar-item {
                padding:20px
            }
        </style>

    </head>
    <body>

        <!-- end #header -->
        <nav class="top">
            <div class="white xlarge bar topmenu">
                @include('layouts/_navpublic')
            </div>
        </nav>

        <!-- end #menu -->
        <div class="margin-top-50">
            @yield('content')
        </div>

        <!-- end #content -->
        <footer>

            <div class="footer-content padding-top-16">

                <img src="{{ asset('images/logo/coupon-logo.svg') }}" alt="logo" width="150" height="150">
                <p>Coupon4U è il sito adatto per ricercare tra milioni di offerte. Scegli quella giusta per te e richiedi l'emissioni di un coupon da presentare in uno dei punti vendita aderenti all'iniziativa.</p>
                <div id="mappaDiv">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2889.939933218729!2d13.515312415631946!3d43.58696746472868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d802321a175a5%3A0x3e1261137bd6ae51!2sVia+Brecce+Bianche%2C+12%2C+60131+Ancona%2C+Italy!5e0!3m2!1sen!2sus!4v1454947673841" width="500" height="280" id="mappa"></iframe>
                </div>

                <br>
                <ul>
                    <li><p>Tel: +39 3541897526</p></li>
                    <li><p>FAX: +39 0541278</p></li>
                    <li><p>E-mail: info@Coupon4U.it</p></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>Copyright 2023. All Rights Reserved. Coupon4U </p>
                <div class="footer-menu">
                    <ul class="f-menu">
                        <li><a onclick="window.location.href = '{{ route('start') }}';">Home</a></li>
                        <li><a onclick="window.location.href = '{{ route('chi_siamo') }}';">About</a></li>
                        <li><a href="mailto:info@coupon4u.it" title="Mandaci un messaggio">Contattaci</a></li>
                        <li><a class="anchor" title="Mandaci un messaggio" title="Dove siamo" id="dove-siamo">Dove siamo</a></li>
                    </ul>
                </div>
            </div>

        </footer>
        <!-- end #footer -->
    </div>
</body>
</html>