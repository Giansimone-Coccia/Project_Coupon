@extends('layouts.public')

@section('title', 'Modifica offerta')

@section('scripts')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/changePreview.js') }}"></script>
<script src="{{ asset('js/autoloadImg.js') }}"></script>

@endsection

@section('content')
<div class="modificaOfferta">
    @include('helpers/buttonIndietro')
    <!--laravel collective-->
    {{ Form::open(array('route' => ['modifica_offerta.store', 'offertaId' => $offerta->id], 'id' => 'modificaOfferta', 'class' => 'modOffertaForm', 'enctype' => 'multipart/form-data')) }}
    @csrf
    <h1>Modifica dati offerta</h1>
    <hr>
    <div class="image-mod-off">
        {{ Form::label('logoOff', 'Immagine:', ['class' => 'label-input']) }} 
        <img id="previewImage" class="rounded-corners" src="{{ asset('images/products/' .$offerta->logoOff) }}" alt="Offerta da modificare" /> <!--serve per visualizzare l'immagine-->
        {{ Form::file('logoOff', ['class' => 'input','id' => 'logoOff', 'accept' => 'image/*', 'onchange' => 'previewFile(event)', 'required']) }}
        <!--onchange => previewFile è inutile, in teoria chiama la funzione javascript previewFile ma non esiste -->
    </div>

    @if ($errors->first('logoOff'))
    <ul class="errors">
        @foreach ($errors->get('logoOff') as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
    @endif

    <div class="form-section">

        {{ Form::label('oggettoOff', 'Descrizione:') }}
        {{ Form::textarea('oggettoOff', $offerta->oggettoOff, ['class' => 'input', 'id' => 'oggettoOff', 'rows' => 3]) }}
        
        <!--Il primo 'oggettoOff' viene utilizzato per identificare il campo quando il form viene inviato.-->

        @if ($errors->first('oggettoOff'))
        <ul class="errors">
            @foreach ($errors->get('oggettoOff') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{ Form::label('modalita', 'Modalità di fruizione:') }}
        {{ Form::select('modalita', ['Online' => 'Online', 'In negozio' => 'In Negozio'], $offerta->modalita) }}

        {{ Form::label('tempoFruiz', 'Scadenza:') }}
        {{ Form::date('tempoFruiz', $offerta->tempoFruiz, ['class' => 'input', 'id' => 'tempoFruiz']) }}

        @if ($errors->first('tempoFruiz'))
        <ul class="errors">
            @foreach ($errors->get('tempoFruiz') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{ Form::label('nomeOff', 'Nome:') }}
        {{ Form::text('nomeOff', $offerta->nomeOff, ['class' => 'input', 'id' => 'nomeOff']) }}

        @if ($errors->first('nomeOff'))
        <ul class="errors">
            @foreach ($errors->get('nomeOff') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{ Form::label('luogoFruiz', 'Luogo di fruizione:') }}
        {{ Form::text('luogoFruiz', $offerta->luogoFruiz, ['class' => 'input', 'id' => 'luogoFruiz']) }}

        @if ($errors->first('luogoFruiz'))
        <ul class="errors">
            @foreach ($errors->get('luogoFruiz') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{ Form::submit('Modifica dati') }}

    </div>
    {{ Form::close() }}

</div>
@endsection
