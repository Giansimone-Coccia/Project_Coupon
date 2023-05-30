@extends('layouts.public')

@section('title', 'Modifica offerta')


@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
@endsection

@section('scripts')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/functions.js') }}"></script>
<script src="{{ asset('js/changePreview.js') }}"></script>


<script>
$(function () {
    var actionUrl = "{{ route('modifica_offerta.store', ['offertaId' => $offerta->id]) }}";
    var formId = 'modificaOfferta';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#modificaOfferta").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection

@section('content')
<div class="modificaOfferta">
    {{ Form::open(array('route' => ['modifica_offerta.store', 'offertaId' => $offerta->id], 'id' => 'modificaOfferta', 'class' => 'modOffertaForm')) }}
    @csrf
    <h1>Modifica dati offerta</h1>
    <hr>
    <div class="image-mod-off">
        {{ Form::label('logoOff', 'Immagine:, ['class' => 'label-input']) }}
        <img id="previewImage" class="rounded-corners" src="{{ asset('images/products/' .$offerta->logoOff) }}" alt="Offerta da modificare" />
        {{ Form::file('logoOff', ['class' => 'input', 'id' => 'logoOff', 'accept' => 'image/*', 'onchange' => 'previewFile(event)', 'required']) }}
    </div>

    <div class="form-section">
        
        {{ Form::label('offertaDescrizione', 'Descrizione:') }}
        {{ Form::text('offertaDescrizione', $offerta->oggettoOff, ['class' => 'input', 'id' => 'offertaDescrizione']) }}
        
        {{ Form::label('offertaModalita', 'Modalità di fruizione:') }}
        {{ Form::select('modalita', ['', 'Modalità 1' => 'Online', 'Modalità 2' => 'In Negozio'], $offerta->modalita) }}
        
        {{ Form::label('offertaScadenza', 'Scadenza:') }}
        {{ Form::text('offertaScadenza', $offerta->tempoFruiz, ['class' => 'input', 'id' => 'offertaScadenza']) }}
        
        {{ Form::label('offertaNome', 'Nome:') }}
        {{ Form::text('offertaNome', $offerta->nomeOff, ['class' => 'input', 'id' => 'offertaNome']) }}
        
        {{ Form::label('luogoFruiz', 'Luogo di fruizione:') }}
        {{ Form::text('luogoFruiz', $offerta->luogoFruiz, ['class' => 'input', 'id' => 'luogoFruiz']) }}

        {{ Form::submit('Modifica dati', ['id' => 'buttonOfferta']) }}

        {{ Form::close() }}
    </div>
</form>
</div>
@endsection
