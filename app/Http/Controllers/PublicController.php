<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\DomandaModel;
use App\Models\Resources\Offerta;
use App\Models\Resources\Azienda;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\NuovaOffertaRequest;
use App\Http\Requests\ModificaOffertaRequest;
use App\Http\Requests\NuovaAziendaRequest;
use App\Http\Requests\ModificaAziendaRequest;


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
    
    public function ricercaPromo($azienda = null,$parola= null) {
        
        $promos = $this->_catalogModel->ricercaPromo($azienda,$parola);
        
        if(!is_null($promos)){
            return view('risultati_page')
                        ->with('promos', $promos);
        }
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
    
    public function viewOfferta($offertaId) {
        $offerta= $this->_catalogModel->getOffertaById($offertaId);
        return view('modifica_offerta')
                        ->with('offerta', $offerta);
    }
    
    public function modificaOfferta($offertaId, ModificaOffertaRequest $request) {
        $offerta = $this->_catalogModel->getOffertaById($offertaId);
        $requestVal = $request->validated();
        $offerta ->update($requestVal);
        $image = $request->file('logoOff');
        $imageName = $image->getClientOriginalName();
        $destinationPath = public_path() . '/images/products';
        $image->move($destinationPath, $imageName);
        
        return redirect('/');
        //senza la definizione di primary key non va la modifica
        
    }
    
    public function addAzienda(){

        return view('crea_azienda');
                        
    }
    
    public function storeAzienda(NuovaAziendaRequest $request) {
        
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();

        $azienda = new Azienda;
        $azienda->fill($request->validated());
        $azienda->image = $imageName;
        $azienda->codiceA = $azienda->generaCodAzienda();
        $azienda->utente = 'US0001';
        $azienda->save();


        $destinationPath = public_path() . '/images/products';
        $image->move($destinationPath, $imageName);

        return redirect('/');
    }
   
    
    public function viewAzienda($codiceA) {
        $azienda= $this->_catalogModel->getAziendaById($codiceA);
        return view('modifica_azienda')
                        ->with('azienda', $azienda);
    }
    
    public function modificaAzienda($codiceA, ModificaAziendaRequest $request) {
        $azienda = $this->_catalogModel->getAziendaById($codiceA);
        $requestVal = $request->validated();
        $azienda ->update($requestVal);
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $destinationPath = public_path() . '/images/products';
        $image->move($destinationPath, $imageName);
        
        return redirect('/');
        //senza la definizione di primary key non va la modifica
        
    }
}
