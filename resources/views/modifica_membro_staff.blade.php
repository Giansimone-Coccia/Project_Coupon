@extends('layouts.public')

@section('title', 'modifica membro staff')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
@endsection

@section('scripts')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/functions.js') }}"></script>


<script>
$(function () {
    var actionUrl = "{{ route('modifica_membro_staff.store', ['staffId' => $membro->id]) }}";
    var formId = 'formModificaMembro';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#formModificaMembro").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection

@section('content')

    <div class="creazioneOfferta">
        
        {{ Form::open(array('route' => ['modifica_membro_staff.store', 'staffId' => $membro->id], 'id' => 'formModificaMembro', 'class' => 'productForm')) }}
        @csrf
        <h1>Modifica membro dello staff</h1>
        <hr>
        
        {{ Form::label('nome', 'Nome:') }}
        {{ Form::text('nome', $membro->nome, ['class' => 'input', 'id' => 'nome']) }}

        {{ Form::label('cognome', 'Cognome:') }}
        {{ Form::text('cognome', $membro->cognome, ['class' => 'input', 'id' => 'cognome']) }}

        
        {{ Form::label('username', 'Username:') }}
        {{ Form::text('username', $membro->username, ['class' => 'input', 'id' => 'username']) }}


        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', ['class' => 'input', 'id' => 'password', 'value' => $membro->password]) }}


        {{ Form::label('password_confirmation', 'Conferma Password:') }}
        {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password_confirmation', 'value' => $membro->password]) }}


        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email', $membro->email, ['class' => 'input', 'id' => 'email']) }}


        {{ Form::label('telefono', 'Telefono:') }}
        {{ Form::text('telefono', $membro->telefono, ['class' => 'input', 'id' => 'telefono']) }}


        {{ Form::label('dataNascita', 'Data di nascita:') }}
        {{ Form::date('dataNascita', $membro->dataNascita, ['class' => 'input', 'id' => 'dataNascita']) }}
        

        <label for="genere">Genere:</label>
        <select id="genere" name="genere">
            <option value="M" {{ $membro->genere === 'M' ? 'selected' : '' }}>Maschio</option>
            <option value="F" {{ $membro->genere === 'F' ? 'selected' : '' }}>Femmina</option>
            <option value="N" {{ $membro->genere === 'N' ? 'selected' : '' }}>Altro</option>
        </select>

            {{ Form::submit('Modifica', ['class' => 'confirmationButton']) }}
            
            {{ Form::close() }}
      </form>

    </div>

@endsection
