@extends('layouts.public')

@section('title', 'mostra membri staff')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div class="main content padding" style="max-width: 1300px; margin-top: 150px;">
    <div class="couponlist" align="center">
        <h1 style="font-weight: 300">Lista membri staff:</h1>
        @isset($allStaffAdmin)
        @foreach($allStaffAdmin as $staff)
        <div class="coupon">
            
            <h3><span>Nome:</span>{{$staff->nome}}</h3>
            <h3><span>Cognome:</span>{{$staff->cognome}}</h3>
            <ul>
                <button class="pulsanti_staff" onclick="window.location.href = '{{ route('modifica_membro_staff', ['staffId' => $staff->id]) }}'; event.stopPropagation();"> Modifica </button>
                <button class="pulsanti_staff"> Elimina </button>
            </ul>
        </div>
        @endforeach
        @endisset
        <a class="refAggiungi" href="{{route('crea_membro_staff')}}">Aggiungi altri memebri staff</a>
</div>
@endsection

