@extends('layouts.public')

@section('title', 'mostra aziende staff')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/alert.js') }}"></script>

@endsection


<div class="overlay" id="overlay"></div>

<div class="main content padding" style="max-width: 1300px; margin-top: 70px;">
    <div class="couponlist" align="center">
        <h1 style="font-weight: 300">Lista delle aziende che puoi gestire:</h1>
        @isset($allAziendeAdmin)
        @foreach($allAziendeAdmin as $azienda)
        
        <div class="coupon" onclick="window.location.href = '{{ route('mostra_promo_da_modificare', [$azienda->id]) }}';">
            
            <img src="{{ asset('images/companies/' . $azienda->image) }}" class ="rounded-corners" alt="Logo offerta" >
            <h3><span>Nome azienda:</span>{{$azienda->nome}}</h3>
        @include('helpers/buttonAdmin')
            
           
        </div>
        
        
       

        @endforeach
        @endisset
        @include('pagination.paginator', ['paginator' => $allAziendeAdmin])
    </div>
</div>
@endsection

