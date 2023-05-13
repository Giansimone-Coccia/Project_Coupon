<?php

namespace App\Http\Controllers;

use App\Models\UtenteModel;
use Illuminate\Support\Facades\Log;


class PublicController extends Controller
{
    protected $_utenteModel;

    public function __construct() {
        $this->_utenteModel = new UtenteModel;
    }

    public function showInfoUtente() {
        
        $data = "Vediamo se funziona";
        //$user = $this->_utenteModel->getInfoUtente('UC0001');
        //dd($user);

        return view('prova')
                    ->with('data', $data);
    }
}
