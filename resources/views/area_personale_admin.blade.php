@extends('layouts.public')

@section('title', 'Area personale staff')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class="body_area_personale_utente">
    <div class="container_area_utente">
        <h1>Area Personale</h1>
        <h2>Informazioni personali</h2>
        @isset($admin)
        <div class="section_area_utente">
            <p><strong>Nome Utente:</strong> {{$admin->username}}</p>
            <p><strong>Password:</strong> {{$admin->password}}</p>
        </div>
        @endisset
        <hr class="area_admin">
        <div class="container_pulsanti_staff center">
            
            <div class="center" >
                <div class="inline-block">
                    <button class="pulsanti_staff" onclick="window.location.href = '/';"> Membri dello Staff</button>
                </div>
            </div>
            <div class="center">
                <div class="inline-block">
                    <button class="pulsanti_staff" onclick="window.location.href = '/';"> Utenti Registrati</button>
                </div>
            </div>
            <div class="center" >
                <div class="inline-block">
                    <button class="pulsanti_staff" onclick="window.location.href = '/';"> Statistiche Coupon Emessi </button>
                </div>
            </div>
            <div class="center">
                <div class="inline-block">
                    <button class="pulsanti_staff" onclick="window.location.href = '/';"> Lista Aziende </button>
                </div>
            </div>


</div>
    </div>
</div>
@endsection