@extends('layouts.public')

@section('title', 'Area personale utente')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class="body_area_personale_utente">
    <div class="container_area_utente">
        <h1>Area Personale</h1>
        <h2>Informazioni personali</h2>
        @isset($utenti)
        <div class="section_area_utente">
            <p><strong>Nome Utente:</strong> {{$utenti->username}}</p>
            <p><strong>Email:</strong> {{$utenti->email}}</p>
            <p><strong>Nome:</strong> {{$utenti->nome}}</p>
            <p><strong>Genere:</strong> {{$utenti->genere}} </p>
            <p><strong>Password:</strong> {{$utenti->password}}</p>
            <p><strong>Telefono:</strong> {{$utenti->telefono}}</p>
            <p><strong>Cognome:</strong> {{$utenti->cognome}}</p>
            <p><strong>Data Nascita:</strong> {{$utenti->dataNascita}}</p>
            <a href="{{ route('modifica_profilo_utente') }}" class="parola_click1" > Modifica dati personali </a>
        </div>
        @endisset

        <h2>Coupon Riscattati</h2>
        <p> <a href = '#'; class="parola_click"> Clicca qui </a> per visualizzare tutti i coupon riscattati</p>

    </div>
</div>
@endsection