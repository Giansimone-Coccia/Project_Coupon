@extends('layouts.public')

@section('title', 'Crea membro staff')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >


    <div class="creazioneOfferta">
      <form class="productForm" id="addStaffMember" name="addStaffMember" enctype="multipart/form-data" method="post" action="{{route('crea_membro_staff.store')}}">
        @csrf
        <h1>Aggiungi un membro dello staff</h1>
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
        <input type="text" id="telefono" name="telefono" value="{{old('telefono')}}" >
        
        @if ($errors->first('telefono'))
            <ul class="errors">
            @foreach ($errors->get('telefono') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="productName">Data di nascita:</label>
        <input type="date" id="dataNascita" name="dataNascita" value="{{old('dataNascita')}}" >
        
        @if ($errors->first('dataNascita'))
            <ul class="errors">
            @foreach ($errors->get('dataNascita') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="genere">Genere:</label>
        <select id="genere" name="genere">
            <option value="M" {{ old('genere') === 'M' ? 'selected' : '' }}>Maschio</option>
            <option value="F" {{ old('genere') === 'F' ? 'selected' : '' }}>Femmina</option>
            <option value="N" {{ old('genere') === 'N' ? 'selected' : '' }}>Non specificare</option>
        </select>
        
        @if ($errors->has('genere'))
            <ul class="errors">
            @foreach ($errors->get('genere') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <input type="submit" id="buttonOfferta" value="Aggiungi">
      </form>

    </div>

@endsection