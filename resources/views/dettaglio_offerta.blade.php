@extends('layouts.public')

@section('title', 'Dettaglio offerta')

@section('scripts')
@parent
<script src="{{ asset('js/reloadPage.js') }}"></script>
@endsection

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
        <div class="price"><strong>Data Scadenza:</strong> {{$offerta->tempoFruiz}}</div>
        <div class="price"><strong>Modalità di fruizione:</strong> {{$offerta->modalita}}</div>
        @include('helpers/giorniRimanenti')
        @include('helpers/redeemCoupon')
    </div>
</div>
@endisset
@endsection
