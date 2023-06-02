@extends('layouts.public')

@section('title', 'Crea azienda')

@section('scripts')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/functions.js') }}"></script>


<script>
$(function () {
    var actionUrl = "{{ route('crea_azienda.store') }}";
    var formId = 'addAzienda';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addAzienda").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection

@section('content')
<div class="creazioneOfferta">
    @include('helpers/buttonIndietro')
    {{ Form::open(array('route' => ['crea_azienda.store'], 'id' => 'addAzienda', 'class' => 'productForm', 'enctype' => 'multipart/form-data')) }}
    @csrf
    <h1>Aggiungi la tua azienda</h1>
    <hr>

    {{ Form::label('nome', 'Nome azienda:') }}
    {{ Form::text('nome', '',['class' => 'input', 'id' => 'nome']) }}

    {{ Form::label('descAzienda', 'Descrizione azienda:') }}
    {{ Form::text('descAzienda', '',['class' => 'input', 'id' => 'descAzienda']) }}

    {{ Form::label('localizzazione', 'Localizzazione:') }}
    {{ Form::text('localizzazione', '',['class' => 'input', 'id' => 'localizzazione']) }}

    {{ Form::label('ragSoc', 'Ragione sociale:') }}
    {{ Form::text('ragSoc', '',['class' => 'input', 'id' => 'ragSoc']) }}

    {{ Form::label('tipologia', 'Tipologia azienda:') }}
    {{ Form::text('tipologia', '',['class' => 'input', 'id' => 'tipologia']) }}

    {{ Form::label('image', 'Immagine:', ['class' => 'label-input']) }}
    {{ Form::file('image', ['class' => 'input','id' => 'image', 'accept' => 'image/*', 'onchange' => 'previewFile(event)', 'required']) }}


    {{ Form::submit('Crea azienda') }}

    {{ Form::close() }}

</div>

@endsection