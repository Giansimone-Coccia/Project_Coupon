@extends('layouts.public')

@section('title', 'lista_coupon')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class="main content padding" style="max-width: 1300px; margin-top: 150px;">
    <div class="couponlist">
        <h1 style="font-weight: 300">Lista coupon riscattati:</h1>
        <div class="coupon">
            <img src="{{ asset('images/companies/Conad-logo.png' ) }}" alt="Logo offerta 1">
            <h3><span>Nome offerta:</span> Offerta 1</h3>
            <ul>
                <li><strong>Scadenza:</strong> 31/12/2023</li>
                <li><strong>Modalità di fruizione:</strong> Online</li>
                <li><strong>Codice coupon:</strong> ABC123</li>
            </ul>
        </div>

        <div class="coupon">
            <img src="{{ asset('images/companies/Apple-Logo.png' ) }}" alt="Logo offerta 1">
            <h3><span>Nome offerta:</span> Offerta 1</h3>
            <ul>
                <li><strong>Scadenza:</strong> 31/12/2023</li>
                <li><strong>Modalità di fruizione:</strong> Online</li>
                <li><strong>Codice coupon:</strong> ABC123</li>
            </ul>
        </div>
    </div>
    <!-- End page content -->
</div>
@endsection
