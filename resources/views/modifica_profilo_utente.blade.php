@extends('layouts.public')

@section('title', 'modifica profilo utente')

@section('scripts')
@parent
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
$(function () {
    var actionUrl = "{{ route('modifica_profilo_utente.store') }}";
    var formId = 'modProfUtente';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#modProfUtente").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>
@endsection

@section('content')
<div class="creazioneOfferta">

    {{ Form::open(array('route' => ['modifica_profilo_utente.store'], 'id' => 'modProfUtente', 'class' => 'productForm')) }}
    @csrf
    <h1>Modifica dati personali e password</h1>
    <hr>
    
    
    {{ Form::label('nome', 'Nome:') }}
    {{ Form::text('nome', Auth::user()->nome, ['class' => 'input', 'id' => 'nome']) }}
    
    {{ Form::label('cognome', 'Cognome:') }}
    {{ Form::text('cognome', Auth::user()->cognome, ['class' => 'input', 'id' => 'cognome']) }}

    {{ Form::label('username', 'Username:') }}
    {{ Form::text('username', Auth::user()->username, ['class' => 'input', 'id' => 'username', 'readonly']) }}

    {{ Form::label('password', 'Password:') }}
    {{ Form::password('password', ['class' => 'input', 'id' => 'password', 'value' => Auth::user()->password]) }}

    {{ Form::label('password_confirmation', 'Conferma Password:') }}
    {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password_confirmation', 'value' => Auth::user()->password]) }}

    {{ Form::label('email', 'Email:') }}
    {{ Form::text('email', Auth::user()->email, ['class' => 'input', 'id' => 'email']) }}

    {{ Form::label('telefono', 'Telefono:') }}
    {{ Form::text('telefono', Auth::user()->telefono, ['class' => 'input', 'id' => 'telefono']) }}

    {{ Form::label('dataNascita', 'Data di nascita:') }}
    {{ Form::date('dataNascita', Auth::user()->dataNascita, ['class' => 'input', 'id' => 'dataNascita']) }}

    {{ Form::label('genere', 'Genere:', ['class' => 'label-input']) }}
    {{ Form::select('genere', ['M' => 'Maschio', 'F' => 'Femmina', 'N' => 'Altro'], Auth::user()->genere, ['class' => 'input', 'id' => 'genere']) }}

    {{ Form::submit('Modifica', ['class' => 'confirmationButton']) }}
    
    {{ Form::close() }}
</div>

@endsection
