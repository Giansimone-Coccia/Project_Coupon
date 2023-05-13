@extends('layouts.public')

@section('title', 'modifica profilo utente')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class="body_modProfile">
    <div class="container-modify-profile">
        <div class="title">Modifica dati personali e password</div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Password attuale</span>
                        <input type="text" placeholder="Inserisci la tua password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Nuova password</span>
                        <input type="text" placeholder="Inserisci nuova password" required>
                    </div>
                    <div class="button">
                        <input type="submit" value="Modifica">
                    </div>
                    <div class="input-box">
                        <span class="details">Email attuale</span>
                        <input type="text" placeholder="Inserisci la tua email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Nuova email</span>
                        <input type="text" placeholder="Inserisci nuova email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Numero di telefono</span>
                        <input type="text" placeholder="Inserisci numero" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Data di nascita</span>
                        <input type="text" placeholder="Inserisci data di nascita" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" placeholder="Inserisci la tua password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Conferma Password</span>
                        <input type="text" placeholder="Conferma password" required>
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1">
                    <input type="radio" name="gender" id="dot-2">
                    <input type="radio" name="gender" id="dot-3">
                    <span class="gender-title">Genere</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Maschio</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Femmina</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Preferisco non specificare</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Registrati">
                </div>
            </form>
            <a href="login_page.html" class="link">Hai già un account? Effettua il login</a>
        </div>
    </div>
</div>
@endsection
