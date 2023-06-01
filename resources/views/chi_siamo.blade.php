@extends('layouts.public')

@section('title', 'Chi Siamo')

@section('content')

<div class=" padding-top-32">
    <div class="main content padding box-shadow max-width-1300">

        <div class="container_chi_siamo">
            <div class="image-about-us">
                <div class="image-dimension">
                    <img src="{{ asset('images/products/Logo.svg') }}" alt="logo" class="width100">  
                </div>
            </div>
            <div class="text">
                <h2 class="font-bold font-size-64">About Us</h2>
                <p class="font-size-24">Benvenuti su Coupon 4U, il sito web dove puoi trovare le migliori offerte promozionali per le tue aziende preferite! <br> Siamo appassionati di risparmio e la nostra missione è quella di rendere il risparmio facile, conveniente e divertente per tutti i nostri utenti. Sul nostro sito web, puoi trovare una vasta gamma di coupon e offerte promozionali per una varietà di aziende. <br> La nostra squadra di esperti in risparmio lavora duramente per assicurarsi che tutte le offerte sul nostro sito web siano aggiornate e funzionanti, quindi puoi essere sicuro che stai ottenendo il miglior affare possibile. Inoltre, il nostro sito web è facile da usare. Basta cercare l'azienda che ti interessa, selezionare l'offerta che desideri riscattare e seguire le istruzioni per ottenere il tuo coupon. <br> Infine, ci teniamo a sottolineare che il nostro sito web è completamente gratuito e non c'è alcun costo nascosto o commissioni da pagare. Grazie per aver scelto Coupon 4U. Siamo entusiasti di aiutarti a risparmiare sulle tue spese quotidiane!</p>
            </div>
        </div>
    </div>
</div>
@endsection
