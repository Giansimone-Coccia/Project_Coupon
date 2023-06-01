@extends('layouts.public')

@section('title', 'Crea membro staff')

@section('scripts')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/functions.js') }}"></script>


<script>
$(function () {
    var actionUrl = "{{ route('crea_membro_staff.store') }}";
    var formId = 'addStaffMember';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addStaffMember").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>
@endsection

@section('content')
    <div class="creazioneOfferta">
        {{ Form::open(array('route' => 'crea_membro_staff.store', 'id' => 'addStaffMember', 'class' => 'productForm')) }}
        @csrf
        <h1>Aggiungi un membro dello staff</h1>
        <hr>
        
        {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
        {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome', 'value' => old('nome')]) }}
        
        {{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
        {{ Form::text('cognome', '', ['class' => 'input', 'id' => 'cognome', 'value' => old('cognome')]) }}
        
        {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
        {{ Form::text('username', '', ['class' => 'input', 'id' => 'username', 'value' => old('username')]) }}

        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', ['id' => 'password', 'value' => old('password')]) }}

        {{ Form::label('password_confirmation', 'Conferma Password:') }}
        {{ Form::password('password_confirmation', ['id' => 'password_confirmation', 'value' => old('password_confirmation')]) }}
        
        {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
        {{ Form::text('email', '', ['class' => 'input', 'id' => 'email', 'value' => old('email')]) }}
        
        {{ Form::label('telefono', 'Telefono', ['class' => 'label-input']) }}
        {{ Form::text('telefono', '', ['class' => 'input', 'id' => 'telefono', 'value' => old('telefono')]) }}
        
        {{ Form::label('dataNascita', 'Data di nascita', ['class' => 'label-input']) }}
        {{ Form::date('dataNascita', '', ['class' => 'input', 'id' => 'dataNascita', 'value' => old('dataNascita')]) }}

        {{ Form::label('genere', 'Genere', ['class' => 'label-input']) }}
        {{ Form::select('genere', ['M' => 'Maschio', 'F' => 'Femmina', 'N' => 'Non specificare'], old('genere'), ['class' => 'input', 'id' => 'genere']) }}

        
        {{ Form::submit('Aggiungi', ['class' => "buttonOfferta"]) }}
      
        {{ Form::close() }}

    </div>

@endsection