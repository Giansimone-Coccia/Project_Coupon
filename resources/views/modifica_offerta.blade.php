@extends('layouts.public')

@section('title', 'Modifica offerta')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class="modificaOfferta">
    <form class="modOffertaForm" id="viewOfferta" name="viewOfferta" enctype="multipart/form-data" method="post" action="{{route('modifica_offerta.store', ['offertaId' => $offerta->codOfferta])}}">
        @csrf
        <h1>Modifica dati offerta</h1>
        <hr>
        <div class="image-mod-off">
            <label for="offertaImage"><strong>Immagine:</strong></label>
            <input type="file" id="logoOff" name="logoOff" accept="image/*" >
        </div>
        
        @if ($errors->first('logoOff'))
            <ul class="errors">
            @foreach ($errors->get('logoOff') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <div class="form-section">
            <label for="offertaDescrizione">Descrizione:</label>
            <input type="text" id="oggettoOff" name="oggettoOff" value="{{$offerta->oggettoOff}}"></input>
            
            @if ($errors->first('oggettoOff'))
                <ul class="errors">
                @foreach ($errors->get('oggettoOff') as $message)
                    <li>{{ $message }}</li>
                @endforeach
                </ul>
            @endif

            <label for="offertaModalita">Modalità di fruizione:</label>
            <select id="modalita" name="modalita" value="{{$offerta->modalita}}" >
                <option value="">Seleziona modalità</option>
                <option value="Modalità 1"> Online </option>
                <option value="Modalità 2"> In Negozio </option>
             </select>

            <label for="offertaScadenza">Scadenza:</label>
            <input type="date" id="tempoFruiz" name="tempoFruiz" value="{{$offerta->tempoFruiz}}" >
            @if ($errors->first('tempoFruiz'))
                <ul class="errors">
                @foreach ($errors->get('tempoFruiz') as $message)
                    <li>{{ $message }}</li>
                @endforeach
                </ul>
            @endif


            <label for="offertaNome">Nome:</label>
            <input type="text" id="nomeOff" name="nomeOff" value="{{$offerta->nomeOff}}">
            @if ($errors->first('nomeOff'))
                <ul class="errors">
                @foreach ($errors->get('nomeOff') as $message)
                    <li>{{ $message }}</li>
                @endforeach
                </ul>
            @endif
            
            <label for="productName">Luogo di fruizione:</label>
        <input type="text" id="luogoFruiz" name="luogoFruiz" value="{{$offerta->luogoFruiz}}" >
        
        @if ($errors->first('luogoFruiz'))
            <ul class="errors">
            @foreach ($errors->get('luogoFruiz') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
            
            
            <input type="submit" id="buttonOfferta" value="Modifica dati">
            
        </div>
    </form>
</div>
@endsection
