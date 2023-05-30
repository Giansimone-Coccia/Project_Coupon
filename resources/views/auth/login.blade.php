@section('title', 'Login')
<!DOCTYPE html>
<html lang="it" >
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

    </head>
    <body class="bodylogin">
        <div class="login-form">

            {{ Form::open(array('route' => 'login')) }}

            <div class = "center">
                <a href="{{ route('start') }}" class="link margin-top-20">Premi qui per tornare alla home</a>
            </div>          
            <h1>Login</h1>
            <div class="content">
                <div class="input-field">
                    {{ Form::label('username', 'Nome Utente') }}
                    {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                    @if ($errors->first('username'))
                    <ul class="errors">
                        @foreach ($errors->get('username') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div  class="input-field">
                    {{ Form::label('password', 'Password') }}
                    {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                    @if ($errors->first('password'))
                    <ul class="errors">
                        @foreach ($errors->get('password') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="button">
                    {{ Form::submit('Login', ['class' => 'input']) }}
                </div>
                <a href="{{ route('register') }} " class="link">Registrati</a>

                {{ Form::close() }}
            </div>
        </div>
    </body>
</html>




