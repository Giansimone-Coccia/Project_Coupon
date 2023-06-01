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
    {{ Form::open(array('route' => ['modifica_offerta.store', 'offertaId' => $offerta->id], 'id' => 'modificaOfferta', 'class' => 'modOffertaForm')) }}
    @csrf
    <h1>Modifica dati offerta</h1>
    <hr>
    <div class="image-mod-off">
        {{ Form::label('logo', 'Immagine:', ['class' => 'label-input']) }}
        <img id="previewImage" class="rounded-corners" src="{{ asset('images/products/' .$offerta->logoOff) }}" alt="Offerta da modificare" />
        {{ Form::file('logo', ['class' => 'input', 'id' => 'logo', 'accept' => 'image/*', 'onchange' => 'previewFile(event)', 'required']) }}
    </div>
    
    @if ($errors->first('logo'))
        <ul class="errors">
            @foreach ($errors->get('logo') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

    <div class="form-section">

        {{ Form::label('offertaDescrizione', 'Descrizione:') }}
        {{ Form::text('offertaDescrizione', $offerta->oggettoOff, ['class' => 'input', 'id' => 'offertaDescrizione']) }}
        
        @if ($errors->first('offertaDescrizione'))
            <ul class="errors">
                @foreach ($errors->get('offertaDescrizione') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

        {{ Form::label('offertaModalita', 'Modalità di fruizione:') }}
        {{ Form::select('offertaModalita', ['Modalità 1' => 'Online', 'Modalità 2' => 'In Negozio'], $offerta->modalita) }}

        {{ Form::label('offertaScadenza', 'Scadenza:') }}
        {{ Form::date('offertaScadenza', $offerta->tempoFruiz, ['class' => 'input', 'id' => 'offertaScadenza']) }}
        
         @if ($errors->first('offertaScadenza'))
            <ul class="errors">
                @foreach ($errors->get('offertaScadenza') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

        {{ Form::label('offertaNome', 'Nome:') }}
        {{ Form::text('offertaNome', $offerta->nomeOff, ['class' => 'input', 'id' => 'offertaNome']) }}
        
        @if ($errors->first('offertaNome'))
            <ul class="errors">
                @foreach ($errors->get('offertaNome') as $message)
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
