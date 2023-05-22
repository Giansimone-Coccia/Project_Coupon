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
      <form action="{{ route('register') }}">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome</span>
            <input type="text" id="nome" name ="nome" placeholder="Inserisci il tuo nome" required>
          </div>
            <div class="input-box">
            <span class="details">Cognome</span>
            <input type="text" id="cognome" name ="cognome" placeholder="Inserisci il tuo cognome" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id="username" name ="username" placeholder="Inserisci il tuo username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="email" name ="email" placeholder="Inserisci la tua email" required>
          </div>
          <div class="input-box">
            <span class="details">Numero di telefono</span>
            <input type="text" id="telefono" name ="telefono" placeholder="Inserisci numero" required>
          </div>
            <div class="input-box">
            <span class="details">Data di nascita</span>
            <input type="text" id="dataNascita" name ="dataNascita" placeholder="Inserisci data di nascita" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" id="password" name ="password" placeholder="Inserisci la tua password" required>
          </div>
          <div class="input-box">
            <span class="details">Conferma Password</span>
            <input type="text" id="password_confirmation" name ="password_confirmation" placeholder="Conferma password" required>
          </div>
        </div>
        <div class="gender-details">
            <input type="radio" name="genere" id="M" value="M">
            <input type="radio" name="genere" id="F" value="F">
            <input type="radio" name="genere" id="N" value="N">
            <span class="gender-title">Genere</span>
            <div class="category">
                <label for="M">
                    <span class="dot one"></span>
                    <span class="gender">Maschio</span>
                </label>
                <label for="F">
                    <span class="dot two"></span>
                    <span class="gender">Femmina</span>
                </label>
                <label for="N">
                    <span class="dot three"></span>
                    <span class="gender">Preferisco non specificare</span>
                </label>
            </div>
            <div class="button">
                <input type="submit" value="Registrati">
            </div>
      </form>
      <a href="{{ route('login') }}" class="link">Hai già un account? Effettua il login</a>
    </div>
  </div>

</body>
</html>
