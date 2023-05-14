@extends('layouts.public')

@section('title', 'Dettaglio offerta')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

@isset($dettaglio_offerta)
@foreach($dettaglio_offerta as $offerta)
<div class="container_dettaglio_offerta">
    <div class="image">
        <img src="{{ asset('images/products/'.$offerta->logoOff ) }}" alt="Nome Offerta">
    </div>
    <div class="info">
        <h2>{{$offerta->nomeOff}}</h2>
        <p>{{$offerta->oggettoOff}}</p>
        <div class="price">PROMOZIONE: {{$offerta->codOfferta}}</div>
        <div class="price"  style="color:#CC0000">Data Scadenza: {{$offerta->tempoFruiz}}</div>
        <div class="price">Modalità di fruizione: {{$offerta->modalita}}</div>
        <button> Riscatta </button>
    </div>
</div>
@endforeach
@endisset
@endsection
