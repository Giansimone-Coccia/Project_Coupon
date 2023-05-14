@extends('layouts.public')

@section('title', 'Dettaglio offerta')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

@isset($dettaglio_offerta)
@forach($dettaglio_offerta as $offerta)
<div class="container_dettaglio_offerta">
    <div class="image">
        <img src="{{ asset('images/companies/Conad-logo.png' ) }}" alt="Nome Offerta">
    </div>
    <div class="info">
        <h2>$offerta->nomeOff</h2>
        <p>$offerta->oggettoOff</p>
        <div class="price">PROMOZIONE: </div>
        <div class="price"  style="color:#CC0000">Data Scadenza: </div>
        <div class="price">Modalità di fruizione: $offerta->modalita</div>
        <button> Riscatta </button>
    </div>
</div>
@endsection
