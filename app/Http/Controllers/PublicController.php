<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\DomandaModel;
use App\Models\Resources\Offerta;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\NuovaOffertaRequest;


class PublicController extends Controller
{
    protected $_catalogModel;
        

    public function __construct() {
        $this->_catalogModel = new Catalogo;
    }
    
    public function index() {
        return view('area_personale_utente');
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
    
    
    public function storeOfferta(NuovaOffertaRequest $request) {
        
        $image = $request->file('logoOff');
        $imageName = $image->getClientOriginalName();

        $offerta = new Offerta;
        $offerta->fill($request->validated());
        $offerta->logoOff = $imageName;
        $offerta->codOfferta = $offerta->generaCodOfferta();
        $offerta->utente = 'US0005';
        $offerta->save();


        $destinationPath = public_path() . '/images/products';
        $image->move($destinationPath, $imageName);


        return redirect('/');
    }
    
   
}
