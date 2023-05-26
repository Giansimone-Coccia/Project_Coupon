@extends('layouts.public')

@section('title', 'Crea azienda')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >


    <div class="creazioneOfferta">
      <form class="productForm" id="addproduct" name="addproduct" enctype="multipart/form-data" method="post" action="{{route('crea_azienda.store')}}">
        @csrf
        <h1>Aggiungi la tua azienda</h1>
        <hr>

        <label for="productName">Nome azienda:</label>
        <input type="text" id="nome" name="nome" value="{{old('nome')}}" >
        
        @if ($errors->first('nome'))
            <ul class="errors">
            @foreach ($errors->get('nome') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="productDescription">Descrizione Azienda:</label>
        <input id="descAzienda" type="text" name="descAzienda" value="{{old('descAzienda')}}" ></input>
        
        @if ($errors->first('descAzienda'))
            <ul class="errors">
            @foreach ($errors->get('descAzienda') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
        
        <label for="productMode">localizzazione:</label>
        <input type="text" id="localizzazione" name="localizzazione" value="{{old('localizzazione')}}" >
        
        @if ($errors->first('localizzazione'))
            <ul class="errors">
            @foreach ($errors->get('localizzazione') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
        

        <label for="productExpiration">Ragione Sociale:</label>
        <input type="text" id="ragSoc" name="ragSoc" value="{{old('ragSoc')}}" >
        
        @if ($errors->first('ragSoc'))
            <ul class="errors">
            @foreach ($errors->get('ragSoc') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
        
        <label for="productName">Tipologia:</label>
        <input type="text" id="tipologia" name="tipologia" value="{{old('tipologia')}}" >
        
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
        
        <input type="submit" id="buttonOfferta" value="Crea azienda">
      </form>

    </div>

@endsection