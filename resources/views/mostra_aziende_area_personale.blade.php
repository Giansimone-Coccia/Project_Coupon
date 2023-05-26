@extends('layouts.public')

@section('title', 'mostra aziende staff')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/pop-up.js') }}"></script>

<div class="overlay" id="overlay"></div>

<div class="main content padding" style="max-width: 1300px; margin-top: 70px;">
    <div class="couponlist" align="center">
        <h1 style="font-weight: 300">Lista delle aziende che puoi gestire:</h1>
        @isset($allAziendeAdmin)
        @foreach($allAziendeAdmin as $azienda)
        <div class="coupon" onclick="window.location.href = '{{ route('mostra_promo_da_modificare', [$azienda->id]) }}';">
            
            <img src="{{ asset('images/companies/' . $azienda->image) }}" class ="rounded-corners" alt="Logo offerta" >
            <h3><span>Nome azienda:</span>{{$azienda->nome}}</h3>
        </div>
        
        <div class="popup center" id="confirmPopup">
            <h3>Sei sicuro di voler eliminare questa azienda?<h3>
                    <div class="button-box">
                        <div>
                            <form method="post" action="{{route('elimina_azienda.store', ['aziendaId' => $azienda->id])}}">
                                @csrf
                                <button  type="submit" class="pulsanti_staff" id="yesBtn">Sì</button>
                            </form>
                        </div>
                        <div class="margin-left-10">
                            <button type="" class="pulsanti_staff" id="noBtn">No</button>
                        </div>
                    </div>
        </div>
        
        @endforeach
        @endisset
        <a class="refAggiungi" href="{{route('crea_azienda')}}"  onclick="window.location.href = '{{ route('mostra_promo_da_modificare', [$azienda->id]) }}';"> Aggiungi altre aziende</a>
    </div>
</div>
@endsection

