<?php

namespace App\Http\Controllers;

use App\Models\UtenteModel;
use Illuminate\Support\Facades\Log;


class UtenteController extends Controller
{
    protected $_UtenteModel;

    public function __construct() {
        $this->_UtenteModel = new UtenteModel;
    }
    
    public function getInfoUtente($username){
        
        $utenti = $this->_UtenteModel->getInfoUtente($username)->first();

        return view('area_personale_utente')
                        ->with('utenti', $utenti);
    }
    
    public function getCouponUtente($usernameUtente){
        
        $couponUtente = $this->_UtenteModel->getCouponUtente($usernameUtente);

        return view('lista_Coupon')
                        ->with('couponUtente', $couponUtente);
    }
   
}
