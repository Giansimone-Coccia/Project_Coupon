@extends('layouts.public')

@section('title', 'mostra aziende staff')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/alert.js') }}"></script>




<div class="overlay" id="overlay"></div>

<div id = "listaOfferte" class="main content padding" style="max-width: 1300px; margin-top: 70px;">

    <div class="couponlist" align="center">
        <h1 style="font-weight: 300">Lista delle offerte dell'azienda {{$azienda->nome}}:</h1>

        @isset($allOfferteAzienda)
        @foreach($allOfferteAzienda as $offerta)
        <div class="coupon" onclick="window.location.href = '{{ route('dettaglio_offerta_ricerca', [$offerta->id]) }}';" >
            <img src="{{ asset('images/products/' . $offerta->logoOff) }}" class ="rounded-corners" alt="Logo offerta">
            <h3><span>Nome offerta:</span>{{$offerta->nomeOff}}</h3>
            @include('helpers/buttonStaff')
        </div>
        
        <div class="popup center" id="confirmPopup">
            <h3>Sei sicuro di voler eliminare questo coupon?<h3>
                    <div class="button-box">
                        <div>
                            <form method="post" action="{{route('elimina_offerta.store', ['offertaId' => $offerta->id])}}">
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
        @include('pagination.paginator', ['paginator' => $allOfferteAzienda])
    </div>
</div>
@endsection

