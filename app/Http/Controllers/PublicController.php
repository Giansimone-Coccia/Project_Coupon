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
    
    public function getPromo($aziendaId){
        
        $promos= $this->_catalogModel->getPromo($aziendaId);

        return view('offerte_azienda')
                        ->with('offerte_azienda', $promos);
    }
    
    public function getPromoDetails($promoId){
        $promoDetails= $this->_catalogModel->getPromo($promoId);
        return view('dettaglio_offerta')
                        ->with('dettaglio_offerta', $promoDetails);
    }
   
}
