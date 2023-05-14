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
            <p>Nome Utente: {{$utenti->username}}</p>
            <p>Email: {{$utenti->email}}</p>
            <p>Nome: {{$utenti->nome}}</p>
            <p>Genere: {{$utenti->genere}} </p>
            <p>Password: {{$utenti->password}}</p>
            <p>Telefono: {{$utenti->telefono}}</p>
            <p>Cognome: {{$utenti->cognome}}</p>
            <p>Data Nascita: {{$utenti->dataNascita}}</p>
            <a href="{{ route('modifica_profilo_utente') }}" class="parola_click1" > Modifica dati personali </a>
        </div>
        @endisset

        <h2>Coupon Riscattati</h2>
        <p> <a href = '#'; class="parola_click"> Clicca qui </a> per visualizzare tutti i coupon riscattati</p>

    </div>
</div>
@endsection