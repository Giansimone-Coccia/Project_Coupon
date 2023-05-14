<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\DomandaModel;
use Illuminate\Support\Facades\Log;


class PublicController extends Controller
{
    protected $_catalogModel;
        

    public function __construct() {
        $this->_catalogModel = new Catalogo;
    }
    
   
    public function allAziende(){
        
        $aziende = $this->_catalogModel-> getAllAziende();

        return view('start')
                        ->with('allAziende', $aziende);
    }
    
    public function getAzienda($aziendaId){
        
        $azienda = $this->_catalogModel-> getAziendaById($aziendaId)->first();
        $promos= $this->_catalogModel->getPromo($aziendaId);

        return view('offerte_azienda')
                        ->with('azienda', $azienda)
                        ->with('promos', $promos);
    }
    
    
    public function getPromoDetails($promoId){
        $promoDetails= $this->_catalogModel->getPromo($promoId);
        return view('dettaglio_offerta')
                        ->with('dettaglio_offerta', $promoDetails);
    }
     
    public function getBuono($offertaId){
        $offertaDetails=$this->_catalogModel->getOffertaById($offertaId);
        $codiceBuono = $this->_catalogModel->generaCodBuono();
        $dataScad = $this->_catalogModel->generaDataScadenzaBuono();
        $buonoDetails= $this->_catalogModel->createCoupon($codiceBuono, 'UC0001', $dataScad, $offertaDetails->codOfferta);
        return view('coupon')
                        ->with('buono', $buonoDetails)
                        ->with('offerta', $offertaDetails);
    }
   
}
