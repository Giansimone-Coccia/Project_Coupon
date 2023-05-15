@extends('layouts.public')

@section('title', 'modifica profilo utente')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<script src="../js/campoVuoto.js"></script>
<div class="body_modProfile">
    <div class="container-modify-profile">
        <div class="title">Modifica dati personali e password</div>
        <div class="content">
            <form action="#" id="form">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Password attuale</span>
                        <input type="text" placeholder="Inserisci la tua password">
                    </div>
                    <div class="input-box">
                        <span class="details">Nuova password</span>
                        <input type="text" placeholder="Inserisci nuova password">
                    </div>
                    <div class="input-box">
                        <span class="details">Email attuale</span>
                        <input type="text" placeholder="Inserisci la tua email">
                    </div>
                    <div class="input-box">
                        <span class="details">Nuova email</span>
                        <input type="text" placeholder="Inserisci nuova email">
                    </div>
                    <div class="input-box">
                        <span class="details">Numero di telefono</span>
                        <input type="text" placeholder="Inserisci numero">
                    </div>
                    <div class="input-box">
                        <span class="details">Nuovo numero</span>
                        <input type="text" placeholder="Inserisci nuovo numero">
                    </div>
                    <div class="input-box">
                        <span class="details">Data di nascita</span>
                        <input type="text" placeholder="Inserisci data di nascita">
                    </div>
                    <div class="input-box">
                        <span class="details">Nuova data di nascita</span>
                        <input type="text" placeholder="Inserisci nuova data">
                    </div>
                    <div class="input-box">
                        <span class="details">Password attuale</span>
                        <input type="text" placeholder="Inserisci la tua password">
                    </div>
                    <div class="input-box">
                        <span class="details">Conferma nuova password</span>
                        <input type="text" placeholder="Conferma password">
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
                    <div class="button">
                    <input type="submit" value="Modifica">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
