@extends('layouts.public')

@section('title', 'mostra utenti registrati')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/alert.js') }}"></script>


<div class="main content padding" style="max-width: 1300px; margin-top: 150px;">
    <div class="couponlist" align="center">
        <h1 style="font-weight: 300">Lista utenti registrati:</h1>
        @isset($allRegisteredUsers)
        @isset($numCoupon)
        @php
        $contatore = 0;
        @endphp
        @foreach($allRegisteredUsers as $ruser)
        
        <div class="coupon">
            
            <h3><span>Nome:</span>{{$ruser->nome}}</h3>
            <h3><span>Cognome:</span>{{$ruser->cognome}}</h3>
            <h5><span>Coupon riscattati:</span> {{$numCoupon[$contatore++]}} </h5>
            <div class="button-box">
                <div class="margin-right-16">
                    {{ Form::open(array('route' => ['elimina_utenti_registrati.store', 'userId' => $ruser->id], 'id' => 'Eliminaform', 'class' => 'productFormNew')) }}
                    @csrf  
                    {{ Form::submit('Elimina', ['class' => 'pulsanti_staff', 'onclick'=>'showConfirmationUtente()']) }}   
                    {{ Form::close() }}
                </div>
            </div>
        </div>

        @endforeach
        @endisset
        @endisset
        @include('pagination.paginator', ['paginator' => $allRegisteredUsers])
</div>
@endsection

