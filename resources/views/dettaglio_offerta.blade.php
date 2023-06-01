@extends('layouts.public')

@section('title', 'Dettaglio offerta')

@section('content')
@isset($offerta)
@include('helpers/buttonIndietro')
<div class="container_dettaglio_offerta box-shadow">
   
    <div class="image">
        <img src="{{ asset('images/products/'.$offerta->logoOff ) }}" class="rounded-corners" alt="Nome Offerta">
    </div>
    <div class="info">
        <h2>{{$offerta->nomeOff}}</h2>
        <p>{{$offerta->oggettoOff}}</p>
        <div class="price"><strong>Luogo Fruizione:</strong> {{$offerta->luogoFruiz}}</div>
        <div class="price"  style="color:#CC0000"><strong>Data Scadenza:</strong> {{$offerta->tempoFruiz}}</div>
        <div class="price"><strong>Modalità di fruizione:</strong> {{$offerta->modalita}}</div>
        @include('helpers/redeemCoupon')
    </div>
</div>
@endisset
@endsection
