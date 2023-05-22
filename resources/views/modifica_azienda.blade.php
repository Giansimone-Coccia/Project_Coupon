@extends('layouts.public')

@section('title', 'Modifica Azienda')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >


    <div class="creazioneOfferta">
      <form class="productForm" id="addproduct" name="addproduct" enctype="multipart/form-data" method="post" action="{{route('modifica_azienda.store', [$azienda->id])}}">
        @csrf
        <h1>Modifica azienda</h1>
        <hr>

        <div class="image-mod-off">
        <label for="productImage">Immagine:</label>
        <img id="previewImage" class="rounded-corners" src="{{ asset('images/companies/' .$azienda->image) }}" alt="Azienda da modificare" />
        <input type="file" id="image" name="image" accept="image/*" onchange="previewFile(event)" required>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('js/changePreview.js') }}"></script>
        
        @if ($errors->first('image'))
            <ul class="errors">
            @foreach ($errors->get('image') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

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
        
        <label for="productMode">Localizzazione:</label>
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

        <input type="submit" id="buttonOfferta" value="Modifica Azienda">
      </form>

    </div>

@endsection