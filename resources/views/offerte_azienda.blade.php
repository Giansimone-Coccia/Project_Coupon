@extends('layouts.public')

@section('title', 'Offerte azienda')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class=" padding-top-24">
    <div class="main content padding box-shadow" style="max-width: 1300px;">

        @isset($azienda)
        <div class="container_offerte_azienda">
            <div class="image-azienda">
                <div class="inline-block">
                    <div class="centerimagesoffers">
                        <img class = "rounded-corners" src="{{ asset('images/companies/'. $azienda->image) }}"  alt="$azienda->nome"/>                        
                    </div>
                </div>
            </div>
            <div class="description padding">
                <div>
                    <h2 style="font-size: 30px; font-weight: bold; " class="title-azienda" >{{$azienda->nome}}</h2>
                    <p>{{$azienda->descAzienda}}</p>
                    <p><strong>Localizzazione:</strong> {{$azienda->localizzazione}}</p>
                    <p><strong>Tipologia di azienda:</strong> {{$azienda->tipologia}}</p></div>
            </div>
        </div>
        @endisset

        <div class="container-azienda border-top-grey margin-top-16" >
            <div class="row-offerte padding-top-16">


                @isset($promos)
                @foreach ($promos as $promo)

                <div class="single-offerta quarter" onclick="window.location.href = '{{ route('dettaglio_offerta_ricerca', [$promo->id]) }}';">
                    <div class="inline-block">
                        <div class="centerimagesoffers">

                            @include('helpers/productDate', ['dataScadenza' => $promo->tempoFruiz])
                            <img class = "rounded-corners width100" src="{{ asset('images/products/' . $promo->logoOff) }}" alt="Offerta azienda"/>

                        </div>
                        <h3>{{$promo->nomeOff}}</h3>
                    </div> 
                </div>
                @endforeach
                @endisset
            </div>
        </div>
    </div>
</div>

</div>
@endsection
