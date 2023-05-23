@extends('layouts.public')

@section('title', 'mostra utenti registrati')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div class="main content padding" style="max-width: 1300px; margin-top: 150px;">
    <div class="couponlist" align="center">
        <h1 style="font-weight: 300">Lista utenti registrati:</h1>
        @isset($allRegisteredUsers)
        @isset($numCoupon)
        {{$i=0}}
        @foreach($allRegisteredUsers as $ruser)
        
        <div class="coupon">
            
            <h3><span>Nome:</span>{{$ruser->nome}}</h3>
            <h3><span>Cognome:</span>{{$ruser->cognome}}</h3>
            <h5><span>Coupon riscattati:</span> {{$numCoupon[$i++]}} </h5>
            <ul>
                <button class="pulsanti_staff" > Modifica </button>
                <button class="pulsanti_staff"> Elimina </button>
            </ul>
        </div>

        @endforeach
        @endisset
        @endisset
</div>
@endsection

