@extends('layouts.public')

@section('title', 'risultati page')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class="padding-top-24">
    <div class="main content padding box-shadow " style="max-width: 1300px;">
        <div class="row-offerte padding-16 ">
            @isset($aziendaSearch)
            @isset($descSearch)
            <h4 style="font-weight: 500">{{$aziendaSearch}}<br>{{$descSearch}}</h4>
            @endisset
            @endisset
            @isset($message)
            <h1 style="font-weight: 500">{{$message}}</h1>
            @endisset
        </div>
        
        @isset($promos)
        
        <div class="container-azienda border-top-grey padding-top-16">
            <div class="row-offerte">


                
                @foreach ($promos as $promo)

                <div class="quarter">
                    <div class="single-offerta " onclick="window.location.href = '{{ route('dettaglio_offerta_ricerca', [$promo->id]) }}';">
                        <div class="inline-block">
                            <div class="centerimagesoffers">
                                <img class = "rounded-corners width100" src="{{ asset('images/products/' . $promo->logoOff) }}" alt="Offerta azienda"/>
                            </div>
                            <h3>{{$promo->nomeOff}}</h3>
                        </div> 
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
