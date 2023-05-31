@section('title', 'Register')

@section('scripts')
@parent
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(function () {
    var actionUrl = "{{ route('register') }}";
    var formId = 'formRegister';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#formRegister").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>
@endsection

<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Registrazione </title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="body_register">
        <div class="container-register">
            <div class="title">Registrazione</div>
            <div class="content">

                {{ Form::open(array('route' => 'register','id' => 'formRegister')) }}
                <div class="user-details">

                    <div  class="input-box">
                        {{ Form::label('nome', 'Nome') }}
                        {{ Form::text('nome', '', ['id' => 'nome']) }}

                    </div>

                    <div  class="input-box">
                        {{ Form::label('cognome', 'Cognome') }}
                        {{ Form::text('cognome', '', ['id' => 'cognome']) }}

                    </div>

                    <div  class="input-box">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::text('email', '', ['id' => 'email']) }}

                    </div>

                    <div  class="input-box">
                        {{ Form::label('telefono', 'Telefono') }}
                        {{ Form::text('telefono', '', ['id' => 'telefono']) }}

                    </div>

                    <div  class="input-box">
                        {{ Form::label('dataNascita', 'Data di Nascita') }}
                        {{ Form::date('dataNascita', '', ['id' => 'dataNascita']) }}
                    </div>

                    <div  class="input-box">
                        {{ Form::label('username', 'Nome Utente') }}
                        {{ Form::text('username', '', ['id' => 'username']) }}
                    </div>

                    <div  class="input-box">
                        {{ Form::label('password', 'Password') }}
                        {{ Form::password('password', ['id' => 'password']) }}
                    </div>

                    <div  class="input-box">
                        {{ Form::label('password-confirm', 'Conferma password') }}
                        {{ Form::password('password_confirmation', [ 'id' => 'password-confirm']) }}
                    </div>
                </div>
                <div class="gender-details">

                    {{ Form::radio('genere', 'M', false, ['id' => 'maschio']) }}
                    {{ Form::label('maschio', 'Maschio') }}


                    {{ Form::radio('genere', 'F', false, ['id' => 'femmina']) }}
                    {{ Form::label('femmina', 'Femmina') }}


                    {{ Form::radio('genere', 'N', false, ['id' => 'neutro']) }}
                    {{ Form::label('neutro', 'Neutro') }}  


                </div>

                <div class="button">                
                    {{ Form::submit('Registra') }}
                </div>

                {{ Form::close() }} 

                <a href="{{ route('login') }}" class="link">Hai già un account? Effettua il login</a>
            </div>
        </div>
    </body>
</html>
