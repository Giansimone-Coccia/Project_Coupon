@extends('layouts.public')

@section('title', 'modifica membro staff')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >


    <div class="creazioneOfferta">
        
        {{ Form::open(array('route' => ['modifica_membro_staff.store', 'staffId' => $membro->id], 'class' => 'productForm')) }}
        @csrf
        <h1>Modifica membro dello staff</h1>
        <hr>
        
        {{ Form::label('nome', 'Nome:') }}
        {{ Form::text('nome', $membro->nome, ['class' => 'input', 'id' => 'nome']) }}
        
        @if ($errors->first('nome'))
            <ul class="errors">
            @foreach ($errors->get('nome') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        {{ Form::label('cognome', 'Cognome:') }}
        {{ Form::text('cognome', $membro->cognome, ['class' => 'input', 'id' => 'cognome']) }}
        
        @if ($errors->first('cognome'))
            <ul class="errors">
            @foreach ($errors->get('cognome') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
        
        {{ Form::label('username', 'Username:') }}
        {{ Form::text('username', $membro->username, ['class' => 'input', 'id' => 'username']) }}
        
        @if ($errors->first('username'))
            <ul class="errors">
            @foreach ($errors->get('username') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', ['class' => 'input', 'id' => 'password', 'value' => $membro->password]) }}

        @if ($errors->first('password'))
            <ul class="errors">
            @foreach ($errors->get('password') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        {{ Form::label('password_confirmation', 'Conferma Password:') }}
        {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password', 'value' => $membro->password]) }}

        @if ($errors->first('password_confirmation'))
            <ul class="errors">
            @foreach ($errors->get('password_confirmation') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email', $membro->email, ['class' => 'input', 'id' => 'email']) }}
        
        @if ($errors->first('email'))
            <ul class="errors">
            @foreach ($errors->get('email') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        {{ Form::label('telefono', 'Telefono:') }}
        {{ Form::text('telefono', $membro->telefono, ['class' => 'input', 'id' => 'telefono']) }}
        
        @if ($errors->first('telefono'))
            <ul class="errors">
            @foreach ($errors->get('telefono') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        {{ Form::label('dataNascita', 'Data di nascita:') }}
        {{ Form::date('dataNascita', $membro->dataNascita, ['class' => 'input', 'id' => 'dataNascita']) }}
        
        @if ($errors->first('dataNascita'))
            <ul class="errors">
            @foreach ($errors->get('dataNascita') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif

        <label for="genere">Genere:</label>
        <select id="genere" name="genere">
            <option value="M" {{ $membro->genere === 'M' ? 'selected' : '' }}>Maschio</option>
            <option value="F" {{ $membro->genere === 'F' ? 'selected' : '' }}>Femmina</option>
            <option value="N" {{ $membro->genere === 'N' ? 'selected' : '' }}>Altro</option>
        </select>
        
        @if ($errors->has('genere'))
            <ul class="errors">
            @foreach ($errors->get('genere') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
            {{ Form::submit('Modifica', ['class' => 'confirmationButton']) }}
            
            {{ Form::close() }}
      </form>

    </div>

@endsection
