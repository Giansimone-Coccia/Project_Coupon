@extends('layouts.public')

@section('title', 'Area personale utente')

@section('content')

<div class="body_area_personale_utente">
    <div class="container_area_utente">
        <h1>Area Personale</h1>
        <h2>Informazioni personali</h2>
        <div class="section_area_utente">
            <p><strong>Nome Utente:</strong> {{Auth::user()->username}}</p>
            <p><strong>Email:</strong> {{Auth::user()->email}}</p>
            <p><strong>Nome:</strong> {{Auth::user()->nome}}</p>
            <p><strong>Genere:</strong> {{Auth::user()->genere}} </p>
            <p><strong>Telefono:</strong> {{Auth::user()->telefono}}</p>
            <p><strong>Cognome:</strong> {{Auth::user()->cognome}}</p>
            <p><strong>Data Nascita:</strong> {{Auth::user()->dataNascita}}</p>
            <a href="{{ route('modifica_profilo_utente') }}" class="parola_click1 color-link" > Modifica dati personali </a>
        </div>

        <h2>Coupon Riscattati</h2>
        <p> <a onclick="window.location.href = '{{ route('lista_coupon') }}';" class="parola_click color-link"> Clicca qui</a> per visualizzare tutti i coupon riscattati</p>
    </div>
</div>
@endsection