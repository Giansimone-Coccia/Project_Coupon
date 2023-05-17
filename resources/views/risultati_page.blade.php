@extends('layouts.public')

@section('title', 'risultati page')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div class="main content padding" style="max-width: 1300px; margin-top: 70px;">
    <div class="row-offerte">
        @isset($message)
        <h1 style="font-weight: 500">{{$message}}</h1>
        @endisset
    </div>
    <div class="container-azienda">
        <div class="row-offerte">
            
            

            @isset($promos)
            @foreach ($promos as $promo)
            

            <div class="single-offerta " onclick="window.location.href = '{{ route('dettaglio_offerta_ricerca', [$promo->id]) }}';">
                <div class="inline-block">
                    <div class="centerimagesoffers">
                        <img class = "rounded-corners width100" src="{{ asset('images/products/' . $promo->logoOff) }}" alt="Offerta azienda"/>
                    </div>
                    <h3>{{$promo->nomeOff}}</h3>
                </div> 
            </div>
            
            @endforeach
            @endisset

        </div>
    </div>

    <!-- End page content -->
</div>

@endsection
