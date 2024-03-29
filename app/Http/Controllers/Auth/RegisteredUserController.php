<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller {

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request) {
        $request->validate([
            'nome' => ['required', 'string', 'max:30'],
            'cognome' => ['required', 'string', 'max:30'],
            'genere' => ['required', 'in:M,F,N'],
            'dataNascita' => ['required', 'date', 'before:today'],
            'telefono' => ['required', 'string', 'max:15','regex:/\b(?:\+39)?\s?(?:(?:(?:0|\(?\d{1,4}\)?)\s?\d{2,5}[\s\.\/]?\d{3}[\s\.\/]?\d{3,4})|(?:(?:\d{3}[\s\.\/]?){3,4}\d{2,3})|(?:(?:\d{1,4}[\s-])?\d{5}))\b/'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:users', 'regex:/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/'],
            'username' => ['required', 'string','max:20', 'unique:users'],
            'password' => ['required', 'confirmed', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',Rules\Password::defaults()],
        ]);
        $user = User::create([
                    'nome' => $request->nome,
                    'cognome' => $request->cognome,
                    'genere' => $request->genere,
                    'dataNascita' => $request->dataNascita,
                    'telefono' => $request->telefono,
                    'email' => $request->email,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }

}
