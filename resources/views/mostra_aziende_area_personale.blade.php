@extends('layouts.public')

@section('title', 'mostra aziende staff')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div class="main content padding" style="max-width: 1300px; margin-top: 150px;">
    <div class="couponlist" align="center">
        <h1 style="font-weight: 300">Lista delle aziende che puoi gestire:</h1>
        
        <div class="coupon coupon-no-hover">
            <img src="{{ asset('images/companies/Conad.png') }}" class ="rounded-corners" alt="Logo offerta">
            <h3><span>Nome azienda:</span>ii</h3>
            <ul>
                <li><strong>Info:</strong> 12/12/2023 </li>
                <li><strong>Info:</strong>Irubare</li>
                <li><strong>Info:</strong> 123456</li>
            </ul>

       
    </div>
</div>
@endsection

