@extends('layouts.public')

@section('title', 'Chi Siamo')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class="container_chi_siamo">
        <div class="image">
            <img src="{{ asset('images/logo/coupon-logo_ChiSiamo.svg') }}" alt="logo" class="width100">      
        </div>
    <div class="text">
        <h2 style="font-size: 80px; font-weight: bold; " >About Us</h2>
        <p style="font-size: 30px">Benvenuti su Coupon 4U, il sito web dove puoi trovare le migliori offerte promozionali per le tue aziende preferite! <br> Siamo appassionati di risparmio e la nostra missione è quella di rendere il risparmio facile, conveniente e divertente per tutti i nostri utenti. Sul nostro sito web, puoi trovare una vasta gamma di coupon e offerte promozionali per una varietà di aziende. <br> La nostra squadra di esperti in risparmio lavora duramente per assicurarsi che tutte le offerte sul nostro sito web siano aggiornate e funzionanti, quindi puoi essere sicuro che stai ottenendo il miglior affare possibile. Inoltre, il nostro sito web è facile da usare. Basta cercare l'azienda che ti interessa, selezionare l'offerta che desideri riscattare e seguire le istruzioni per ottenere il tuo coupon. <br> Infine, ci teniamo a sottolineare che il nostro sito web è completamente gratuito e non c'è alcun costo nascosto o commissioni da pagare. Grazie per aver scelto Coupon 4U. Siamo entusiasti di aiutarti a risparmiare sulle tue spese quotidiane!</p>
    </div>
</div>
@endsection
