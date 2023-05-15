@extends('layouts.public')

@section('title', 'Modifica offerta')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class="container">
    <div class="image-section">
      <img src="path_to_your_image.jpg" alt="Offerta">
      <button class="button">Modifica Immagine</button>
    </div>
    <div class="form-section">
      <h2>Modifica Offerta</h2>
      <form>
        <label for="descrizione">Descrizione:</label>
        <input type="text" id="descrizione" name="descrizione" placeholder="Inserisci la descrizione dell'offerta" required>
        
        <label for="modalita">Modalità di fruizione:</label>
        <input type="text" id="modalita" name="modalita" placeholder="Inserisci la modalità di fruizione" required>
        
        <label for="scadenza">Scadenza:</label>
        <input type="date" id="scadenza" name="scadenza" required>
        
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Inserisci il nome dell'offerta" required>
        
        <button class="button">Salva</button>
        <button class="button">Annulla</button>
      </form>
    </div>
  </div>
@endsection
