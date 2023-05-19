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
            'genere' => ['required', 'char'],
            'dataNascita' => ['required', 'date'],
            'telefono' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:users'],
            'username' => ['required', 'string', 'min:20', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
                    'nome' => $request->name,
                    'cognome' => $request->surname,
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