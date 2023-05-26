@extends('layouts.public')

@section('title', 'Area personale staff')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
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
            <a href="{{ route('modifica_profilo_utente') }}" class="parola_click1" > Modifica dati personali </a>
        </div>

        <hr class="area_admin">
        <div class="container_pulsanti_staff center">
            <div class="center" >
                <div class="inline-block">
                    <button class="pulsanti_staff" onclick="window.location.href = '/';"> Crea offerta abbinata</button>
                </div>
            </div>
            <div class="center">
                <div class="inline-block">
                    <button class="pulsanti_staff" onclick="window.location.href = '{{ route('mostra_aziende_area_personale')}}';";"> Gestisci offerte</button>
                </div>
            </div>

</div>
    </div>
</div>
@endsection
