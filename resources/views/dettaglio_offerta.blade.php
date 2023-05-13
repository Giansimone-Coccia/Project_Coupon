@extends('layouts.public')

@section('title', 'Dettaglio offerta')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div class="container_dettaglio_offerta">
    <div class="image">
        <img src="{{ asset('images/companies/Conad-logo.png' ) }}" alt="Nome Offerta">
    </div>
    <div class="info">
        <h2>CONAD 20% OFF</h2>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <div class="price">PROMOZIONE: sconto 20%</div>
        <div class="price"  style="color:#CC0000">Data Scadenza: 20/08/2023</div>
        <div class="price">Modalità di fruizione: Negozio fisico 20%</div>
        <button> Riscatta </button>
    </div>
</div>
@endsection
