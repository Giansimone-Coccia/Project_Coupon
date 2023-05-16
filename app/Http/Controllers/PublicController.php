<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\DomandaModel;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\NuovaOffertaRequest;


class PublicController extends Controller
{
    protected $_catalogModel;
        

    public function __construct() {
        $this->_catalogModel = new Catalogo;
    }
    
        public function HomePage() {
        return view('start');
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
        //$buonoDetails= $this->_catalogModel->createCoupon($codiceBuono, 'UC0002', $dataScad, $offertaDetails->codOfferta);
        $buono = $this->_catalogModel->getBuono('C0001');
        return view('coupon')
                        ->with('buono', $buono)
                        ->with('offerta', $offertaDetails);
    }
    
    
    public function addOfferta(){
        
        $aziende = $this->_catalogModel-> getAllAziende();

        return view('crea_offerta')
                        ->with('aziende', $aziende);
    }
    
    public function ricercaPromo($azienda = null,$parola= null) {
        
        $promos = $this->_catalogModel->ricercaPromo($azienda,$parola);
        
        if(!is_null($promos)){
            return view('risultati_page')
                        ->with('promos', $promos);
        }
    }


    public function storeOfferta(NuovaOffertaRequest $offerta) {

        $imageName = $image->getClientOriginalName();

        $offerta = new Offerta;
        $offerta->fill($request->validated());
        $offerta->image = $imageName;
        $offerta->save();

        $destinationPath = public_path() . '/images/products';
        $image->move($destinationPath, $imageName);


        return redirect()->action([PublicController::class, 'HomePage']);
    }
    
   
}
