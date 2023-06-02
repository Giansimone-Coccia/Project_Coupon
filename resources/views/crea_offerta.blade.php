@extends('layouts.public')

@section('title', 'Dettaglio offerta')

@section('scripts')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/functions.js') }}"></script>


<script>
$(function () {
    var actionUrl = "{{ route('crea_offerta.store') }}";
    var formId = 'addproduct';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addproduct").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>
@endsection

@section('content')
    <div class="creazioneOfferta">
        @include('helpers/buttonIndietro')
        {{ Form::open(array('route' => 'crea_offerta.store', 'id' => 'addproduct', 'class' => 'productForm')) }}
        @csrf
        <h1>Aggiungi un offerta</h1>
        <hr>
        
        {{ Form::label('nomeOff', 'Nome offerta', ['class' => 'label-input']) }}
        {{ Form::text('nomeOff', '', ['class' => 'input', 'id' => 'nomeOff', 'value' => old('nomeOff')]) }}
        
        {{ Form::label('oggettoOff', 'Oggetto offerta', ['class' => 'label-input']) }}
        {{ Form::text('oggettoOff', '', ['class' => 'input', 'id' => 'oggettoOff', 'value' => old('oggettoOff')]) }}
        
        {{ Form::label('azienda', 'Azienda di riferimento:', ['class' => 'label-input']) }}
        {{ Form::select('azienda', ['' => 'Seleziona azienda'] + $aziende->pluck('nome', 'id')->toArray(), old('azienda'), ['class' => 'input', 'id' => 'azienda']) }}

        {{ Form::label('tempoFruiz', 'Tempo fruizione', ['class' => 'label-input']) }}
        {{ Form::date('tempoFruiz', '', ['class' => 'input', 'id' => 'tempoFruiz', 'value' => old('tempoFruiz')]) }}

        {{ Form::label('modalita', 'Modalità di fruizione:', ['class' => 'label-input']) }}
        {{ Form::select('modalita', ['Online' => 'Online', 'In negozio' => 'In Negozio'], old('modalita'), ['class' => 'input', 'id' => 'modalita']) }}
        
        {{ Form::label('luogoFruiz', 'Luogo fruizione', ['class' => 'label-input']) }}
        {{ Form::text('luogoFruiz', '', ['class' => 'input', 'id' => 'luogoFruiz', 'value' => old('luogoFruiz')]) }}

        {{ Form::label('logoOff', 'Immagine:', ['class' => 'label-input']) }}
        {{ Form::file('logoOff', ['class' => 'input', 'id' => 'logoOff', 'accept' => 'image/*']) }}

        {{ Form::submit('Aggiungi', ['class' => "buttonOfferta"]) }}
      
        {{ Form::close() }}

    </div>

@endsection