@extends('layouts.public')

@section('title', 'mostra aziende staff')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div class="main content padding" style="max-width: 1300px; margin-top: 150px;">
    <div class="couponlist" align="center">
        <h1 style="font-weight: 300">Lista delle aziende che puoi gestire:</h1>
        @isset($allAziendeAdmin)
        @foreach($allAziendeAdmin as $azienda)
        <div class="coupon" onclick="window.location.href = '{{ route('mostra_promo_da_modificare', [$azienda->id]) }}';">
            
            <img src="{{ asset('images/companies/' . $azienda->image) }}" class ="rounded-corners" alt="Logo offerta" >
            <h3><span>Nome azienda:</span>{{$azienda->nome}}</h3>
            <ul>
                <button class="pulsanti_staff" onclick="window.location.href = '{{ route('modifica_azienda', [$azienda->id]) }}'; event.stopPropagation();"> Modifica </button>
                <button class="pulsanti_staff"> Elimina </button>
            </ul>
        </div>
        @endforeach
        @endisset
        <a class="refAggiungi" href="{{route('crea_azienda')}}"  onclick="window.location.href = '{{ route('mostra_promo_da_modificare', [$azienda->id]) }}';"> Aggiungi altre aziende</a>
</div>
@endsection

