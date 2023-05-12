<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Coupon4U</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
    .bar-item {padding:20px}
</style>

            <!-- end #header -->
            <nav class="top">
                <div class="white xlarge bar topmenu">
                    @include('layouts/_navpublic')
                </div>
            </nav>

            <!-- end #menu -->
            <div id="page">
                <div id="page-bgtop">
                    <div id="page-bgbtm">
                        <!-- @yield('content') -->
                        <p>Prova</p>
                        <div style="clear: both;">&nbsp;</div>
                    </div>
                </div>
            </div>

            <!-- end #content -->
            <div id="footer">
                <br>
                <p>universit&agrave; politecnica delle marche - Corso di  <a href="https://learn.univpm.it/course/view.php?id=7098">tecnologie web</a>.</p>
            </div>
            <!-- end #footer -->
        </div>
    </body>
</html>