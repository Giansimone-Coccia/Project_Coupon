@extends('layouts.public')

@section('title', 'mostra utenti registrati')

@section('scripts')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/alert.js') }}"></script>
<script src="{{ asset('js/openUser.js') }}"></script>
@endsection

@section('content')

@include('helpers/buttonIndietro')
<div class="main content padding max-width-1300">
    <div class="couponlist" align="center">
        <h1 style="font-weight: 300">Lista utenti registrati:</h1>
        @isset($allRegisteredUsers)
        @isset($numCoupon)
        @php
        $contatore = 0;
        @endphp
        @foreach($allRegisteredUsers as $ruser)

        <div class="coupon-no-flex">
            <div class ="open-coupon">
                <div class="info-user">
                    <h3><strong>Nome:</strong> {{$ruser->nome}}</h3>
                    <h3><strong>Cognome:</strong> {{$ruser->cognome}}</h3>
                </div>

                <div class="button-box">
                    <div class="margin-right-16">
                        {{ Form::open(array('route' => ['elimina_utenti_registrati.store', 'userId' => $ruser->id], 'id' => 'Eliminaform', 'class' => 'productFormNew')) }}
                        @csrf  
                        {{ Form::submit('Elimina', ['class' => 'pulsanti_staff', 'onclick'=>'showConfirmationUtente()']) }}   
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

            <div class="coupon-riscattati" style="display:none;">
                <h5 ><strong>Coupon riscattati:</strong> {{$numCoupon[$contatore++]}} </h5>
            </div>
        </div>

        @endforeach
        @endisset
        @endisset
        @include('pagination.paginator', ['paginator' => $allRegisteredUsers])
    </div>
    @endsection

