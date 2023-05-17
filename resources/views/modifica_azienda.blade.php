@extends('layouts.public')

@section('title', 'Modifica Azienda')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >


    <div class="creazioneOfferta">
      <form class="productForm" id="addproduct" name="addproduct" enctype="multipart/form-data" method="post" action="{{route('modifica_azienda.store', ['codiceA' => $azienda->codiceA])}}">
        @csrf
        <h1>Modifica azienda</h1>
        <hr>

        <label for="productName">Nome azienda:</label>
        <input type="text" id="nome" name="nome" value="{{$azienda->nome}}" >
        
        @if ($errors->first('nome'))
            <ul class="errors">
            @foreach ($errors->get('nome') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="productDescription">Descrizione Azienda:</label>
        <input id="descAzienda" type="text" name="descAzienda" value="{{$azienda->descAzienda}}" ></input>
        
        @if ($errors->first('descAzienda'))
            <ul class="errors">
            @foreach ($errors->get('descAzienda') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
        
        <label for="productMode">localizzazione:</label>
        <input type="text" id="localizzazione" name="localizzazione" value="{{$azienda->localizzazione}}" >
        
        @if ($errors->first('localizzazione'))
            <ul class="errors">
            @foreach ($errors->get('localizzazione') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
        

        <label for="productExpiration">Ragione Sociale:</label>
        <input type="text" id="ragSoc" name="ragSoc" value="{{$azienda->ragSoc}}" >
        
        @if ($errors->first('ragSoc'))
            <ul class="errors">
            @foreach ($errors->get('ragSoc') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
        
        <label for="productName">Tipologia:</label>
        <input type="text" id="tipologia" name="tipologia" value="{{$azienda->tipologia}}" >
        
        @if ($errors->first('tipologia'))
            <ul class="errors">
            @foreach ($errors->get('tipologia') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="productImage">Immagine:</label>
        <input type="file" id="image" name="image" accept="image/*" >
        
        @if ($errors->first('image'))
            <ul class="errors">
            @foreach ($errors->get('image') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <input type="submit" id="buttonOfferta" value="Modifica Azienda">
      </form>

    </div>

@endsection