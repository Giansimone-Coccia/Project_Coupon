@extends('layouts.public')

@section('title', 'mostra membri staff')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/alert.js') }}"></script>


<div class="overlay" id="overlay"></div>


<div class="main content padding" style="max-width: 1300px; margin-top: 150px;">
    <div class="couponlist" align="center">
        <h1 style="font-weight: 300">Lista membri staff:</h1>
        @isset($allStaffAdmin)
        @foreach($allStaffAdmin as $staff)
        <div class="coupon">

            <h3><span>Nome:</span>{{$staff->nome}}</h3>
            <h3><span>Cognome:</span>{{$staff->cognome}}</h3>
            <div class="button-box">
                <div>
                    {{ Form::open(array('route' => ['elimina_membri_staff.store', 'staffId' => $staff->id], 'id' => 'Eliminaform', 'class' => 'productFormNew')) }}
                    @csrf  
                    {{ Form::submit('Elimina', ['class' => 'pulsanti_staff', 'onclick'=>'showConfirmationUtente()']) }}   
                    {{ Form::close() }}
                </div>
                <div class="margin-left-10">
                    <button class="pulsanti_staff" onclick=" window.location.href = '{{ route('modifica_membro_staff', [$staff->id]) }}'; event.stopPropagation()"> Modifica </button>    
                </div>
            </div>
        </div>
        @endforeach
        @endisset
        @include('pagination.paginator', ['paginator' => $allStaffAdmin])
</div>
@endsection

