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
  <form>
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
          <input type="email" placeholder="Email" autocomplete="on">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="new-password">
      </div>
      <a href="#" class="link">Hai dimenticato la password?</a>
    </div>
    <div class="action">
      <button onclick="location.href = '{{ route('register') }}';">Registrati</button>
      <button >Accedi</button>
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="js/login_procedure.js"></script>

</body>
</html>
