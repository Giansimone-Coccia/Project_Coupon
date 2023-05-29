@extends('layouts.public')

@section('title', 'modifica profilo utente')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
@endsection

@section('scripts')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/functions.js') }}"></script>


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
    {{ Form::text('nome', Auth::user()->nome) }}

    {{ Form::label('cognome', 'Cognome:') }}
    {{ Form::text('cognome', Auth::user()->cognome) }}

    @can('isAdmin')
    {{ Form::label('username', 'Username:') }}
    {{ Form::text('username', Auth::user()->username) }}
    @endcan

    {{ Form::label('password', 'Password:') }}
    {{ Form::password('password', ['id' => 'password']) }}

    {{ Form::label('password_confirmation', 'Conferma Password:') }}
    {{ Form::password('password_confirmation', ['id' => 'password_confirmation']) }}

    @canany(['isUser', 'isAdmin'])
    {{ Form::label('email', 'Email:') }}
    {{ Form::text('email', Auth::user()->email) }}

    {{ Form::label('telefono', 'Numero di telefono:') }}
    {{ Form::text('telefono', Auth::user()->telefono) }}

    {{ Form::label('dataNascita', 'Data di nascita:') }}
    {{ Form::date('dataNascita', Auth::user()->dataNascita) }}

    {{ Form::label('genere', 'Genere:') }}
    {{ Form::select('genere', ['M' => 'Maschio', 'F' => 'Femmina', 'N' => 'Altro'], Auth::user()->genere) }}
    @endcanany

    {{ Form::submit('Modifica', ['class' => 'confirmationButton']) }}
    {{ Form::close() }}


</div>

@endsection
