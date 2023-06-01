@extends('layouts.public')

@section('title', 'Area personale admin')

@section('content')

<div class="body_area_personale_utente">
    <div class="container_area_utente">
        <h1>Area Personale</h1>
        <h2>Informazioni personali</h2>

        <div class="section_area_utente">
            <p><strong>Nome Utente:</strong> {{Auth::user()->username}}</p>
        </div>

        <hr class="area_admin">
        <div class="container_pulsanti_staff center">

            <div class="center" >
                <div class="inline-block">
                    <button class="pulsanti_staff" onclick="window.location.href = '{{ route('mostra_membri_staff')}}';"> Membri dello Staff</button>
                </div>
            </div>

            <div class="center">
                <div class="inline-block">
                    <button class="pulsanti_staff" onclick="window.location.href = '{{route('crea_membro_staff')}}';"> Crea Staff</button>
                </div>
            </div>

            <div class="center">
                <div class="inline-block">
                    <button class="pulsanti_staff" onclick="window.location.href = '{{ route('mostra_aziende_area_personale')}}';"> Lista Aziende </button>
                </div>
            </div>

            <div class="center">
                <div class="inline-block">
                    <button class="pulsanti_staff" onclick="window.location.href = '{{route('crea_azienda')}}';"> Crea Azienda </button>
                </div>
            </div>

            <div class="center">
                <div class="inline-block">
                    <button class="pulsanti_staff" onclick="window.location.href = '{{ route('FAQ') }}';"> Lista FAQ </button>
                </div>
            </div>

            <div class="center">
                <div class="inline-block">
                    <button class="pulsanti_staff" onclick="window.location.href = '{{route('crea_faq')}}';"> Crea FAQ </button>
                </div>
            </div>

        </div>

        <div class="center">
            <div class="inline-block">
                <button class="pulsanti_staff" onclick="window.location.href = '{{ route('mostra_utenti_registrati')}}';"> Utenti Registrati</button>
            </div>
        </div>
        <hr class="area_admin">
        @isset($numCoupon)
        <p>Numero totale coupon emessi: {{$numCoupon}}</p>
        @endisset
    </div>
</div>
@endsection