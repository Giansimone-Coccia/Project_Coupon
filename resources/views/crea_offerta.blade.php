@extends('layouts.public')

@section('title', 'Dettaglio offerta')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >


    <div class="creazioneOfferta">
      <form class="productForm">
        @csrf
        <h1>Aggiungi la tua offerta </h1>
        <hr>

        <label for="productName">Nome prodotto:</label>
        <input type="text" id="nomeOff" name="nomeOff" value="{{old('nomeOff')}}" required>
        
        @if ($errors->first('productName'))
            <ul class="errors">
            @foreach ($errors->get('productName') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="productDescription">Descrizione:</label>
        <textarea id="oggettoOff" name="oggettoOff" value="{{old('oggettoOff')}}" required></textarea>
        
        @if ($errors->first('productDescription'))
            <ul class="errors">
            @foreach ($errors->get('productDescription') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
        
        <label for="productMode">Azienda di riferimento:</label>
        <select id="azienda" name="azienda" value="{{old('azienda')}}" required>
          <option value="">Seleziona azienda</option>
          @foreach ($aziende as $azienda)
          <option value="{{ $azienda->codiceA }}" {{ old('codiceA') == $azienda->codiceA ? 'selected' : '' }} > {{$azienda->nome}} </option>
          @endforeach

        </select>

        <label for="productExpiration">Scadenza:</label>
        <input type="date" id="tempoFruiz" name="tempoFruiz" value="{{old('tempoFruiz')}}" required>
        
        @if ($errors->first('productExpiration'))
            <ul class="errors">
            @foreach ($errors->get('productExpiration') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="productMode">Modalità di fruizione:</label>
        <select id="modalita" name="modalita" value="{{old('modalita')}}" required>
          <option value="">Seleziona modalità</option>
          <option value="Modalità 1"> Online </option>
          <option value="Modalità 2"> In Negozio </option>

        </select>

        <label for="productImage">Immagine:</label>
        <input type="file" id="logoOff" name="logoOff" value="{{old('logoOff')}}" accept="image/*" required>
        
        @if ($errors->first('productImage'))
            <ul class="errors">
            @foreach ($errors->get('productImage') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <input type="submit" id="buttonOfferta" value="Crea prodotto">
      </form>

    </div>

@endsection