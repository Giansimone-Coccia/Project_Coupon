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
      <form class="productForm" id="addAzienda" name="addAzienda" enctype="multipart/form-data" method="post" action="{{route('crea_azienda.store')}}">
        @csrf
        <h1>Aggiungi la tua azienda</h1>
        <hr>

        <label for="productName">Nome azienda:</label>
        <input type="text" id="nome" name="nome" value="{{old('nome')}}" >

        <label for="productDescription">Descrizione Azienda:</label>
        <input id="descAzienda" type="text" name="descAzienda" value="{{old('descAzienda')}}" ></input>

        
        <label for="productMode">localizzazione:</label>
        <input type="text" id="localizzazione" name="localizzazione" value="{{old('localizzazione')}}" >
        

        <label for="productExpiration">Ragione Sociale:</label>
        <input type="text" id="ragSoc" name="ragSoc" value="{{old('ragSoc')}}" >

        
        <label for="productName">Tipologia:</label>
        <input type="text" id="tipologia" name="tipologia" value="{{old('tipologia')}}" >


        <label for="productImage">Immagine:</label>
        <input type="file" id="image" name="image" accept="image/*" >

        
        <input type="submit" id="buttonOfferta" value="Crea azienda">
      </form>

    </div>

@endsection