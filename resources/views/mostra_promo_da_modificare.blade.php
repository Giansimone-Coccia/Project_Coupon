@extends('layouts.public')

@section('title', 'mostra aziende staff')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div class="main content padding" style="max-width: 1300px; margin-top: 150px;">
    <div class="couponlist" align="center">
        <h1 style="font-weight: 300">Lista delle offerte dell'azienda {{$azienda->nome}}:</h1>
        
        @isset($allOfferteAzienda)
        @foreach($allOfferteAzienda as $offerta)
        <div class="coupon coupon-no-hover">
            <img src="{{ asset('images/products/' . $offerta->logoOff) }}" class ="rounded-corners" alt="Logo offerta">
            <h3><span>Nome azienda:</span>{{$offerta->nomeOff}}</h3>
            <ul>
                <button class="pulsanti_staff" > Modifica </button>
                <button class="pulsanti_staff"> Elimina </button>
            </ul>
        </div>
        @endforeach
        @endisset
       
    </div>
</div>
@endsection

