@extends('layouts.public')

@section('title', 'mostra aziende staff')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/alert.js') }}"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<button onclick="window.location.href = '{{ route('mostra_aziende_area_personale') }}';"  class="pulsante_indietro">
<i class="fas fa-arrow-left"></i> 
</button>
<div id = "listaOfferte" class="main content padding max-width-1300">

    <div class="couponlist" align="center">
        <h1 class="font-weight-300">Lista delle offerte dell'azienda {{$azienda->nome}}:</h1>

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

