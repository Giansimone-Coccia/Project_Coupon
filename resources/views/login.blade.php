@section('title', 'Login')
<!DOCTYPE html>
<html lang="it" >
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

    </head>
    <body class="bodylogin">
        <!-- partial:index.partial.html -->
        <div class="login-form">
            <form id="login" name="login" method="post" action="{{ route('login') }}">
                <div class = "center">
                    <a href="{{ route('start') }}" class="link">Premi qui per tornare alla home</a>
                </div>
                <h1>Login</h1>
                <div class="content">
                    <div class="input-field">
                        <input type="text" id="username" name ="username" placeholder="Username" autocomplete="on" value="{{ old('username') }}">
                        @if ($errors->first('username'))
                        <ul class="errors">
                            @foreach ($errors->get('username') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div class="input-field">
                        <input type="password" id="password_input" name ="password_input" placeholder="Password" autocomplete="new-password" value="{{ old('password_input') }}">
                        @if ($errors->first('password_input'))
                        <ul class="errors">
                            @foreach ($errors->get('password_input') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
                <div class="action">
                    <button onclick="location.href = '{{ route('register') }}';"><a href="{{ route('register') }}">Registrati</a></button>
                    <input type="submit" id="login" value="Login">
                </div>
            </form>
        </div>
        <!-- partial -->
        <script  src="js/login_procedure.js"></script>

    </body>
</html>
