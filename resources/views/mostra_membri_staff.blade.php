@extends('layouts.public')

@section('title', 'mostra membri staff')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/alert.js') }}"></script>


<div class="main content padding max-width-1300">
    <div class="couponlist" align="center">
        <h1 style="font-weight: 300">Lista membri staff:</h1>
        @isset($allStaffAdmin)
        @foreach($allStaffAdmin as $staff)
        <div class="coupon">

            <h3><span>Nome:</span>{{$staff->nome}}</h3>
            <h3><span>Cognome:</span>{{$staff->cognome}}</h3>
            <div class="button-box">
                @include('helpers/buttonStaffXAdmin')
            </div>
        </div>
        @endforeach
        @endisset
        @include('pagination.paginator', ['paginator' => $allStaffAdmin])
</div>
@endsection

