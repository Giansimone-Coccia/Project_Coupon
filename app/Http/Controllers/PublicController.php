<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Support\Facades\Log;


class PublicController extends Controller
{
    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalogo;
    }
    
    public function allAziende(){
        
        $aziende = $this->_catalogModel-> getAzienda();

        return view('start')
                        ->with('allAziende', $aziende);
    }
    
    public function showInfoUtente() {
        
        //$data = "Vediamo se funziona";
        //$user = $this->_utenteModel->getInfoUtente('UC0001');
        //dd($user);

        return view('catalog')
                        ->with('topCategories', $topCats);

        return view('prova')
                    ->with('data', $data);
    }
}
