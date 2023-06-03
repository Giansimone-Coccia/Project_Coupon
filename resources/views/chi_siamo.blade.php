@extends('layouts.public')

@section('title', 'Chi Siamo')

@section('content')

<div class=" padding-top-32">
    <div class="main content padding padding-24 box-shadow max-width-1300">

        <div class="container_chi_siamo">
            <div class="image-about-us">
                <div class="image-dimension">
                    <img src="{{ asset('images/logo/coupon-logo.svg') }}" alt="logo" class="width100">  
                </div>
            </div>
            <div class="text">
                <h2 class="font-bold font-size-64"> Informazioni Generali </h2>
                <p class="font-size-24">Il nostro sito web offre un servizio unico che consente agli utenti di ottenere <strong>coupon</strong> per una vasta gamma di prodotti provenienti da diverse <strong>aziende</strong>. La nostra sezione <strong>Home</strong> dedicata consente agli utenti di visualizzare facilmente tutte le aziende partecipanti. Una volta selezionata un'azienda specifica, è possibile consultare tutte le <strong>offerte</strong> disponibili.

                <br> Per accedere ai coupon, gli utenti devono <strong>registrarsi</strong> e effettuare il <strong>login</strong> nel nostro sito. Una volta autenticati, possono procedere all'acquisizione dei coupon desiderati. Basta semplicemente premere il pulsante "riscatta" presente nella pagina con i dettagli dell'offerta scelta. L'utente può riscattare un solo coupon per ciascuna offerta.

                <br> Nell'area personale, gli utenti hanno la possibilità di modificare i propri dati personali e visualizzare un elenco completo dei coupon precedentemente riscattati. I coupon possono essere utilizzati in due modalità: stampando la pagina generata dopo aver premuto il pulsante "riscatta" e presentandola direttamente in negozio, oppure inserendo il codice online, a seconda delle istruzioni specifiche fornite per ciascuna offerta.

                <br> Il nostro obiettivo è rendere il processo di acquisizione e utilizzo dei coupon il più semplice e conveniente possibile per i nostri utenti. Speriamo che il nostro sito possa offrire un'esperienza piacevole e gratificante, consentendo a tutti di approfittare di fantastiche offerte da parte delle aziende partecipanti.</p>
            </div>
        </div>
    </div>
</div>
@endsection
