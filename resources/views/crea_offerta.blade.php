@extends('layouts.public')

@section('title', 'Dettaglio offerta')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >


    <div class="creazioneOfferta">
      <form class="productForm">
        <h1>Aggiungi la tua offerta </h1>
        <hr>
        <label for="productName">Nome prodotto:</label>
        <input type="text" class="productName" name="productName" required>

        <label for="productDescription">Descrizione:</label>
        <textarea id="productDescription" name="productDescription" required></textarea>

        <label for="productExpiration">Scadenza:</label>
        <input type="date" id="productExpiration" name="productExpiration" required>

        <label for="productMode">Modalità di fruizione:</label>
        <select id="productMode" name="productMode" required>
          <option value="">Seleziona modalità</option>
          <option value="Modalità 1"> Online </option>
          <option value="Modalità 2"> In Negozio </option>

        </select>

        <label for="productImage">Immagine:</label>
        <input type="file" id="productImage" name="productImage" accept="image/*" required>

        <input type="submit" id="buttonOfferta" value="Crea prodotto">
      </form>

      <script src="script.js"></script>
    </div>
