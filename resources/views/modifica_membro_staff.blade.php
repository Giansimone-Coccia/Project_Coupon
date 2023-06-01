@extends('layouts.public')

@section('title', 'modifica membro staff')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
@endsection

@section('content')

<div class="creazioneOfferta">
    @include('helpers/buttonIndietro')

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
    {{ Form::text('username', $membro->username, ['class' => 'input', 'id' => 'username', 'readonly']) }}

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

    {{ Form::submit('Modifica', ['class' => 'confirmationButton']) }}

    {{ Form::close() }}
</form>

</div>

@endsection