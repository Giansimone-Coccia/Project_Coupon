@extends('layouts.public')

@section('title', 'Offerte azienda')

@section('content')

<div class=" padding-top-24">

    <div class="main content padding box-shadow max-width-1300">

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
                    <h2 class="title-azienda font-30-bold" >{{$azienda->nome}}</h2>
                    <p>{{$azienda->descAzienda}}</p>
                    <p><strong>Localizzazione:</strong> {{$azienda->localizzazione}}</p>
                    <p><strong>Tipologia di azienda:</strong> {{$azienda->tipologia}}</p>
                    <p><strong>Ragione sociale:</strong> {{$azienda->ragSoc}}</p>
                </div>
            </div>
        </div>
        <div class="container-azienda border-top-grey margin-top-16" >
            <div class="row-offerte padding-top-16">


                @isset($promos)
                @foreach ($promos as $promo)

                <div class="single-offerta quarter" onclick="window.location.href = '{{ route('dettaglio_offerta',[$promo->id,$azienda->id]) }}';">
                    <div class="inline-block">
                        <div class="centerimages">

                            @include('helpers/productDate', ['dataScadenza' => $promo->tempoFruiz])
                            <img class = "rounded-corners width100" src="{{ asset('images/products/' . $promo->logoOff) }}" alt="Offerta azienda"/>

                        </div>
                        <h3>{{$promo->nomeOff}}</h3>
                    </div> 
                </div>
                @endforeach
                @endisset
            </div>
            @include('pagination.paginator', ['paginator' => $promos])
        </div>

        @endisset
    </div>
</div>

</div>
@endsection
