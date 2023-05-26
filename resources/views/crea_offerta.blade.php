@extends('layouts.public')

@section('title', 'Dettaglio offerta')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >


    <div class="creazioneOfferta">
      <form class="productForm" id="addproduct" name="addproduct" enctype="multipart/form-data" method="post" action="{{route('crea_offerta.store')}}">
        @csrf
        <h1>Aggiungi un offerta</h1>
        <hr>

        <label for="productName">Nome prodotto:</label>
        <input type="text" id="nomeOff" name="nomeOff" value="{{old('nomeOff')}}" >
        
        @if ($errors->first('nomeOff'))
            <ul class="errors">
            @foreach ($errors->get('nomeOff') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="productDescription">Descrizione:</label>
        <input id="oggettoOff" type="text" name="oggettoOff" value="{{old('oggettoOff')}}" ></input>
        
        @if ($errors->first('oggettoOff'))
            <ul class="errors">
            @foreach ($errors->get('oggettoOff') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
        
        <label for="productMode">Azienda di riferimento:</label>
        <select id="azienda" name="azienda" value="{{old('azienda')}}" >
          <option value="">Seleziona azienda</option>
          @foreach ($aziende as $azienda)
          <option value="{{ $azienda->id }}" {{ old('azienda') == $azienda->id ? 'selected' : '' }} > {{$azienda->nome}} </option>
          @endforeach

        </select>

        <label for="productExpiration">Scadenza:</label>
        <input type="date" id="tempoFruiz" name="tempoFruiz" value="{{old('tempoFruiz')}}" >
        
        @if ($errors->first('tempoFruiz'))
            <ul class="errors">
            @foreach ($errors->get('tempoFruiz') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="productMode">Modalità di fruizione:</label>
        <select id="modalita" name="modalita" value="{{old('modalita')}}" >
          <option value="">Seleziona modalità</option>
          <option value="Modalità 1"> Online </option>
          <option value="Modalità 2"> In Negozio </option>

        </select>
        
        <label for="productName">Luogo di fruizione:</label>
        <input type="text" id="luogoFruiz" name="luogoFruiz" value="{{old('luogoFruiz')}}" >
        
        @if ($errors->first('luogoFruiz'))
            <ul class="errors">
            @foreach ($errors->get('luogoFruiz') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="productImage">Immagine:</label>
        <input type="file" id="logoOff" name="logoOff" accept="image/*" >
        
        @if ($errors->first('logoOff'))
            <ul class="errors">
            @foreach ($errors->get('logoOff') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <input type="submit" id="buttonOfferta" value="Crea Offerta">
      </form>

    </div>

@endsection