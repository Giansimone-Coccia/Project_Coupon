<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Coupon4U</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="{{ asset('res/css/style.css') }}" >
        <style>
            body,h1,h2,h3,h4,h5,h6 {
                font-family: "Karma", sans-serif
            }
            .bar-item {
                padding:20px
            }
        </style>

        <!-- end #header -->
    <nav class="top">
        <div class="white xlarge bar topmenu">
            @include('layouts/_navpublic')
        </div>
    </nav>

    <!-- end #menu -->
    <div class="margin-top-62">
        @yield('content')
    </div>

    <!-- end #content -->
    <footer>
        <div class="footer-content">
            <br>
            <img src="{{ asset('images/logo/coupon-logo.svg') }}" alt="logo" width="150" height="150">
            <p>Coupon4U è il sito adatto per ricercare tra milioni di offerte. Scegli quella giusta per te e richiedi l'emissioni di un coupon da presentare in uno dei punti vendita aderenti all'iniziativa.</p>
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
                </ul>
            </div>
        </div>

    </footer>
    <!-- end #footer -->
</div>
</body>
</html>