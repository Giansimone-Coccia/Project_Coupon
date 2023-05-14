@extends('layouts.public')

@section('title', 'Offerte azienda')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class=" padding-top-16">
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
                    <p>Localizzazione: {{$azienda->localizzazione}}</p>
                    <p>Tipologia di azienda: {{$azienda->tipologia}}</p></div>
            </div>
        </div>
        @endisset

        <div class="container-azienda border-top-grey margin-top-16" >
            <div class="row-offerte padding-top-16">
                <div class="column-offerte">

                    @isset($promos)
                    @foreach ($promos as $promo)

                    <div class="single-offerta">
                        <div class="inline-block">
                            <div class="centerimagesoffers">
                                <img class = "rounded-corners" onclick="window.location.href = '{{ route('dettaglio_offerta', [$azienda->codiceA, 'AB001']) }}';" 
                                     src="{{ asset('images/products/' . $promo->logoOff) }}" alt="Offerta azienda"/>
                            </div>
                            <h3>{{$promo->nomeOff}}</h3>
                        </div> 
                    </div>
                    @endforeach
                    @endisset
                </div>
            </div>
        </div>

        <!-- End page content -->
    </div>
</div>
@endsection
