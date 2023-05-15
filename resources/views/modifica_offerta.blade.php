@extends('layouts.public')

@section('title', 'Modifica offerta')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class="modificaOfferta">
    <form class="modOffertaForm">
        <h1>Modifica dati offerta</h1>
        <hr>
        <div class="image-mod-off">
            <label for="offertaImage"><strong>Immagine:</strong></label>
            <img class="rounded-corners" src="{{ asset('images/products/Adidas-abbigliamento.png') }}" alt="Offerta da modificare" />
            <input type="file" id="offertaImage" name="offertaImage" accept="image/*" required>
        </div>

        <div class="form-section">
            <label for="offertaDescrizione">Descrizione:</label>
            <textarea id="offertaDescrizione" name="offertaDescrizione" required></textarea>

            <label for="offertaModalita">Modalità di fruizione:</label>
            <input type="text" id="offertaModalita" name="offertaModalita" required>

            <label for="offertaScadenza">Scadenza:</label>
            <input type="date" id="offertaScadenza" name="offertaScadenza" required>

            <label for="offertaNome">Nome:</label>
            <input type="text" id="offertaNome" name="offertaNome" required>

            <button class="button">Elimina</button>
            <input type="submit" id="buttonOfferta" value="Modifica dati">
        </div>
    </form>
</div>
@endsection
