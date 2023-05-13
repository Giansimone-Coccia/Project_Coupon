@extends('layouts.public')

@section('title', 'Area personale utente')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class="body_area_personale_utente">
    <div class="container_area_utente">
        <h1>Area Personale</h1>
        <h2>Informazioni personali</h2>
        <div class="section_area_utente">
            <p>Nome Utente: S1111111</p>
            <p>Email: s1111111@studenti.uni.it</p>
            <p>Nome: Laura</p>
            <p>Genere: F </p>
            <p>Password: *******</p>
            <p>Telefono: 3333333333</p>
            <p>Cognome: Rossi</p>
            <p>Età: 22</p>
            <a href="{{ route('modifica_profilo_utente') }}" class="parola_click1" > Modifica dati personali </a>
        </div>


        <h2>Coupon Riscattati</h2>
        <p> <a href="{{ route('lista_coupon') }}" class="parola_click"> Clicca qui </a> per visualizzare tutti i coupon riscattati</p>

    </div>
</div>
@endsection