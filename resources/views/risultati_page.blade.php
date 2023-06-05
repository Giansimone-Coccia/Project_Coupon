@extends('layouts.public')

@section('title', 'risultati page')

@section('content')

<div class="padding-top-24">
    <div class="main content padding box-shadow max-width-1300">
        <div class="row-offerte padding-16 ">
            @isset($aziendaSearch)
            @isset($descSearch)
            <h4 class="font-weight-500">{{$aziendaSearch}}<br>{{$descSearch}}</h4>
            @endisset
            @endisset

            @isset($message)
            <h1 class="font-weight-500">{{$message}}</h1>
            @endisset

        </div>

        @isset($promos)

        <div class="container-azienda border-top-grey padding-top-16">
            <div class="row-offerte">



                @foreach ($promos as $promo)

                <div class="single-offerta quarter " onclick="window.location.href = '{{ route('dettaglio_offerta_ricerca', [$promo->id]) }}';">
                    <div class="inline-block">
                        <div class="centerimages">
                            @include('helpers/productDate', ['dataScadenza' => $promo->tempoFruiz])
                            <img class = "rounded-corners width100" src="{{ asset('images/products/' . $promo->logoOff) }}" alt="Offerta azienda"/>
                        </div>
                        <h3>{{$promo->nomeOff}}</h3>
                    </div> 
                </div>

                @endforeach


            </div>
        </div>

        @include('pagination.paginator_ricerca', ['paginator' => $promos])
        @endisset
        <!-- End page content -->
    </div>
</div>

@endsection
