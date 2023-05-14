@extends('layouts.public')

@section('title', 'lista_coupon')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class="main content padding" style="max-width: 1300px; margin-top: 150px;">
    <div class="couponlist">
        <h1 style="font-weight: 300">Lista coupon riscattati:</h1>
        @isset($couponUtente)
        @foreach($couponUtente as $coupon)
        <div class="coupon">
            <img src="{{ asset('images/companies/Conad.png') }}" class = "rounded-corners" alt="Logo offerta">
            <h3><span>Nome offerta:</span> {{$couponOfferta->nomeOff}}</h3>
            <ul>
                <li><strong>Scadenza:</strong> {{$coupon -> dataScad}} </li>
                <li><strong>Modalità di fruizione:</strong>{{$couponOfferta->modalita}}</li>
                <li><strong>Codice coupon:</strong> {{$coupon -> codCoupon}} </li>
            </ul>
        </div>
        @endforeach
        @endisset
    </div>
    <!-- End page content -->
</div>
@endsection
