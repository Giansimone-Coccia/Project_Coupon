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
                @csrf
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Password attuale</span>
                        <input type="text" id="password" name="password" value="{{old('password')}}" placeholder="Inserisci la tua password">
                        @if ($errors->first('password'))
                            <ul class="errors">
                            @foreach ($errors->get('password') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="input-box">
                        <span class="details">Nuova password</span>
                        <input type="text" id="password" name="password" value="{{old('password')}}" placeholder="Inserisci nuova password">
                        @if ($errors->first('password'))
                            <ul class="errors">
                            @foreach ($errors->get('password') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="input-box">
                        <span class="details">Email attuale</span>
                        <input type="text" id="email" name="email" value="{{old('email')}}" placeholder="Inserisci la tua email">
                        @if ($errors->first('email'))
                            <ul class="errors">
                            @foreach ($errors->get('email') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="input-box">
                        <span class="details">Nuova email</span>
                        <input type="text" id="email" name="email" value="{{old('email')}}" placeholder="Inserisci nuova email">
                        @if ($errors->first('email'))
                            <ul class="errors">
                            @foreach ($errors->get('email') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="input-box">
                        <span class="details">Numero di telefono</span>
                        <input type="text" id="telefono" name="telefono" value="{{old('telefono')}}" placeholder="Inserisci numero">
                        @if ($errors->first('telefono'))
                            <ul class="errors">
                            @foreach ($errors->get('telefono') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="input-box">
                        <span class="details">Nuovo numero</span>
                        <input type="text" id="telefono" name="telefono" value="{{old('telefono')}}" placeholder="Inserisci nuovo numero">
                        @if ($errors->first('telefono'))
                            <ul class="errors">
                            @foreach ($errors->get('telefono') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="input-box">
                        <span class="details">Data di nascita</span>
                        <input type="text" id="dataNascita" name="dataNascita" value="{{old('dataNascita')}}" placeholder="Inserisci data di nascita">
                        @if ($errors->first('dataNascita'))
                            <ul class="errors">
                            @foreach ($errors->get('dataNascita') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="input-box">
                        <span class="details">Nuova data di nascita</span>
                        <input type="text" id="dataNascita" name="dataNascita" value="{{old('dataNascita')}}" placeholder="Inserisci nuova data">
                        @if ($errors->first('dataNascita'))
                            <ul class="errors">
                            @foreach ($errors->get('dataNascita') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="input-box">
                        <span class="details">Password attuale</span>
                        <input type="text" placeholder="Inserisci la tua password">
                        @if ($errors->first('telefono'))
                            <ul class="errors">
                            @foreach ($errors->get('telefono') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="input-box">
                        <span class="details">Conferma nuova password</span>
                        <input type="text" placeholder="Conferma password">
                        @if ($errors->first('telefono'))
                            <ul class="errors">
                            @foreach ($errors->get('telefono') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
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
