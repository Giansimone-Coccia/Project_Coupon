@extends('layouts.public')

@section('title', 'lista_coupon')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class="main content padding coupons-riscattati">
    <div class="couponlist" align="center">
        <h1 class="font-weight-300">Lista coupon riscattati:</h1>
        @isset($couponUtente)
        @php
        $contatore = 0;
        @endphp
        @foreach($couponUtente as $coupon)
        <div class="coupon" onclick="window.location.href = '{{ route('coupon_riscattato', [$coupon->id]) }}';">
            <img src="{{ asset('images/products/' . $couponOfferta[$contatore]->logoOff) }}" class = "rounded-corners" alt="Logo offerta">
            <h3><span>Nome offerta:</span> {{$couponOfferta[$contatore]->nomeOff}}</h3>
            <ul>
                <li><strong>Scadenza:</strong> {{$coupon -> dataScad}} </li>
                <li><strong>Modalità di fruizione:</strong>{{$couponOfferta[$contatore++]->modalita}}</li>
                <li><strong>Codice coupon:</strong> {{$coupon -> codCoupon}} </li>
            </ul>
        </div>
        @endforeach
        @endisset
    </div>
    <!-- End page content -->
</div>
@endsection
