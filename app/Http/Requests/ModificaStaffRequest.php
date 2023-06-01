<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ModificaStaffRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [    
            'username' => 'required|max:20',
            'password' => ['required', 'max:30', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
            'password_confirmation' => ['required', 'max:30', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', 'same:password'],
            'nome' => 'required|max:30',
            'cognome' => 'required|max:30',
            'genere' => 'nullable',
            'dataNascita' => 'nullable',
            'email' => 'nullable',
            'telefono' => 'nullable'
            ];
    }

}

