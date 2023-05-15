@section('title', 'Coupon')

<!DOCTYPE html>
<html>
    <head>
        <title>Coupon riscattato</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    </head>
    <body>
        @isset($buono)
        @isset($offerta)
        <div class="coupon-page">
            <div class="container-coupon">
                <h3>{{$offerta->nomeOff}}</h3>
            </div>
            <img src="{{ asset('images/products/'.$offerta->logoOff ) }}" alt="logo.{{$offerta->nomeOff}}" style="width:100%;">
            <div class="container-coupon" style="background-color:white">
                <h2><b>{{$offerta->nomeOff}}</b></h2>
                <p>{{$offerta->oggettoOff}}</p>
            </div>
            <div class="modalita">
                <p>Modalità di fruizione: {{$offerta->modalita}}</p>
            </div>
            <p class="utente">Utente richiedente: {{$offerta->utenteRich}}</p>
            <div class="container-coupon">
                <p>Codice promozione: <span class="promo">{{$buono->dataScad}}</span></p>
<!--ricorda di inserire data scadenza e codice coupon -->
            </div>
        </div>
        @endisset
        @endisset
    </body>
</html>