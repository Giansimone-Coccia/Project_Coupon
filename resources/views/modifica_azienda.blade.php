@extends('layouts.public')

@section('title', 'Modifica Azienda')

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
    var actionUrl = "{{ route('modifica_azienda.store', ['codiceA' => $azienda->id]) }}";
    var formId = 'modAzienda';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#modAzienda").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>
@endsection

@section('content')
    <div class="creazioneOfferta">
        {{ Form::open(array('route' => ['modifica_azienda.store', 'codiceA' => $azienda->id], 'id' => 'modAzienda', 'class' => 'productForm')) }}
        @csrf
        <h1>Modifica azienda</h1>
        <hr>

        <div class="image-mod-off">
        {{ Form::label('productImage', 'Immagine:') }}
        <img id="previewImage" class="rounded-corners" src="{{ asset('images/companies/' .$azienda->image) }}" alt="Azienda da modificare" />
        {{ Form::file('image', ['id' => 'image', 'accept' => 'image/*', 'onchange' => 'previewFile(event)', 'required']) }}
        </div>
        
        {{ Form::label('nome', 'Nome azienda:') }}
        {{ Form::text('nome', $azienda->nome, ['class' => 'input', 'id' => 'nome']) }}
        
        {{ Form::label('descAzienda', 'Descrizione Azienda:') }}
        {{ Form::text('descAzienda', $azienda->descAzienda, ['class' => 'input', 'id' => 'descAzienda']) }}

        {{ Form::label('localizzazione', 'Localizzazione:') }}
        {{ Form::text('localizzazione', $azienda->localizzazione, ['class' => 'input', 'id' => 'localizzazione']) }}

        {{ Form::label('ragSoc', 'Ragione sociale:') }}
        {{ Form::text('ragSoc', $azienda->ragSoc, ['class' => 'input', 'id' => 'ragSoc']) }}

        {{ Form::label('tipologia', 'Tipologia:') }}
        {{ Form::text('tipologia', $azienda->tipologia, ['class' => 'input', 'id' => 'tipologia']) }}
        
        {{ Form::submit('Modifica', ['class' => 'confirmationButton']) }}
        
        {{ Form::close() }}
      </form>

    </div>

@endsection