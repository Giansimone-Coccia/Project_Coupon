<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;

class ModificaAziendaRequest extends FormRequest {

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
            'nome' => 'required|string|max:20',
            'descAzienda' => 'required|max:1024',
            'localizzazione' => 'required',
            'ragSoc' => 'required',
            'tipologia' => 'required',
            'image' => 'required|file|mimes:jpeg,png|max:1024',
        ];
    }
    //failed validation serve a tornare l'errore 422 nel caso in cui non vada a buon fine la validazione dei dati, la visualizzazione dei messagi viene gestita nel file js
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }

}
