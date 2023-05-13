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
        <div class="coupon-page">
            <div class="container-coupon">
                <h3>Conad</h3>
            </div>
            <img src="{{ asset('images/companies/Conad-logo.png' ) }}" alt="logo-conad" style="width:100%;">
            <div class="container-coupon" style="background-color:white">
                <h2><b>CONAD 20% OFF</b></h2>
                <p>20% di sconto applicabile in qualsiasi reparto tra i negozi Conad aderenti all'iniziativa</p>
            </div>
            <div class="modalita">
                <p>Modalità di fruizione: Negozio fisico</p>
            </div>
            <p class="utente">Utente richiedente: Mario Rossi</p>
            <div class="container-coupon">
                <p>Codice promozione: <span class="promo">BOH232</span></p>
                <p class="expire">Scade: 03 Gen, 2024</p>
            </div>
        </div>
    </body>
</html>