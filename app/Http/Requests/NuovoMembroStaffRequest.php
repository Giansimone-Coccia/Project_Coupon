<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;

class NuovoMembroStaffRequest extends FormRequest {

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

    /*
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'email' => ['required','max:30','regex:/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/','unique:users'],
            'genere' => 'required|in:M,F,N',
            'dataNascita' => 'required|date',
            'telefono' => ['required', 'max:15', 'regex:/\b(?:\+39)?\s?(?:(?:(?:0|\(?\d{1,4}\)?)\s?\d{2,5}[\s\.\/]?\d{3}[\s\.\/]?\d{3,4})|(?:(?:\d{3}[\s\.\/]?){3,4}\d{2,3})|(?:(?:\d{1,4}[\s-])?\d{5}))\b/', 'min:10'],
            'username' => 'required|string|max:255|unique:users,username',
            'password' => ['required','max:30','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
        ];
    }
    
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}
