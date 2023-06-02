@section('title', 'Register')

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
                        @if ($errors->first('nome'))
                        <ul class="errors">
                            @foreach ($errors->get('nome') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <div  class="input-box">
                        {{ Form::label('cognome', 'Cognome') }}
                        {{ Form::text('cognome', '', ['id' => 'cognome']) }}
                        @if ($errors->first('cognome'))
                        <ul class="errors">
                            @foreach ($errors->get('cognome') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <div  class="input-box">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::text('email', '', ['id' => 'email']) }}
                        @if ($errors->first('email'))
                        <ul class="errors">
                            @foreach ($errors->get('email') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <div  class="input-box">
                        {{ Form::label('telefono', 'Telefono') }}
                        {{ Form::text('telefono', '', ['id' => 'telefono']) }}
                        @if ($errors->first('telefono'))
                        <ul class="errors">
                            @foreach ($errors->get('telefono') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <div  class="input-box">
                        {{ Form::label('dataNascita', 'Data di Nascita') }}
                        {{ Form::date('dataNascita', '', ['id' => 'dataNascita']) }}
                        @if ($errors->first('dataNascita'))
                        <ul class="errors">
                            @foreach ($errors->get('dataNascita') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <div  class="input-box">
                        {{ Form::label('username', 'Nome Utente') }}
                        {{ Form::text('username', '', ['id' => 'username']) }}
                        @if ($errors->first('username'))
                        <ul class="errors">
                            @foreach ($errors->get('username') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <div  class="input-box">
                        {{ Form::label('password', 'Password') }}
                        {{ Form::password('password', ['id' => 'password']) }}
                        @if ($errors->first('password'))
                        <ul class="errors">
                            @foreach ($errors->get('password') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <div  class="input-box">
                        {{ Form::label('password-confirm', 'Conferma password') }}
                        {{ Form::password('password_confirmation', [ 'id' => 'password-confirm']) }}
                        @if ($errors->first('password-confirm'))
                        <ul class="errors">
                            @foreach ($errors->get('password-confirm') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
                <div class="gender-details">

                    {{ Form::radio('genere', 'M', false, ['id' => 'maschio']) }}
                    {{ Form::label('maschio', 'Maschio') }}


                    {{ Form::radio('genere', 'F', false, ['id' => 'femmina']) }}
                    {{ Form::label('femmina', 'Femmina') }}


                    {{ Form::radio('genere', 'N', false, ['id' => 'neutro']) }}
                    {{ Form::label('neutro', 'Neutro') }}  

                    @if ($errors->first('genere'))
                    <ul class="errors">
                        @foreach ($errors->get('genere') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
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
