@extends('layouts.public')

@section('title', 'modifica profilo utente')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >


    <div class="creazioneOfferta">
      <form class="productForm" id="modProfUtente" name="modProfUtente" enctype="multipart/form-data" method="post" action="{{route('modifica_profilo_utente.store', ['id'=>{{Auth::user()->id}}])}}">
        @csrf
        <h1>Modifica dati personali e password</h1>
        <hr>

        <label for="productName">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{old('nome')}}" >
        
        @if ($errors->first('nome'))
            <ul class="errors">
            @foreach ($errors->get('nome') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="productName">Cognome:</label>
        <input type="text" id="cognome" name="cognome" value="{{old('cognome')}}" >
        
        @if ($errors->first('cognome'))
            <ul class="errors">
            @foreach ($errors->get('cognome') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
        
        <label for="productName">Username:</label>
        <input type="text" id="username" name="username" value="{{old('username')}}" >
        
        @if ($errors->first('username'))
            <ul class="errors">
            @foreach ($errors->get('username') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', ['id' => 'password', 'value' => old('password')]) }}

        @if ($errors->first('password'))
            <ul class="errors">
            @foreach ($errors->get('password') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        {{ Form::label('password_confirmation', 'Conferma Password:') }}
        {{ Form::password('password_confirmation', ['id' => 'password_confirmation', 'value' => old('password_confirmation')]) }}

        @if ($errors->first('password_confirmation'))
            <ul class="errors">
            @foreach ($errors->get('password_confirmation') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="productName">Email:</label>
        <input type="text" id="email" name="email" value="{{old('email')}}" >
        
        @if ($errors->first('email'))
            <ul class="errors">
            @foreach ($errors->get('email') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="productName">Numero di telefono:</label>
        <input type="text" id="nTelefono" name="nTelefono" value="{{old('nTelefono')}}" >
        
        @if ($errors->first('nTelefono'))
            <ul class="errors">
            @foreach ($errors->get('nTelefono') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="productName">Data di nascita:</label>
        <input type="date" id="dNascita" name="dNascita" value="{{old('dNascita')}}" >
        
        @if ($errors->first('dNascita'))
            <ul class="errors">
            @foreach ($errors->get('dNascita') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="genere">Genere:</label>
        <select id="genere" name="genere">
            <option value="maschio" {{ old('genere') === 'maschio' ? 'selected' : '' }}>Maschio</option>
            <option value="femmina" {{ old('genere') === 'femmina' ? 'selected' : '' }}>Femmina</option>
            <option value="altro" {{ old('genere') === 'altro' ? 'selected' : '' }}>Altro</option>
        </select>
        
        @if ($errors->has('genere'))
            <ul class="errors">
            @foreach ($errors->get('genere') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <input type="submit" id="confirmationButton" value="Modifica">
      </form>

    </div>

@endsection
