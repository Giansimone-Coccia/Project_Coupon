<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;
use App\Models\DomandaModel;
use App\Models\Resources\Offerta;
use App\Models\Resources\Azienda;
use App\Models\Resources\Bundle;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\NuovaOffertaRequest;
use App\Http\Requests\ModificaOffertaRequest;
use App\Http\Requests\NuovaAziendaRequest;
use App\Http\Requests\ModificaAziendaRequest;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller {

    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalogo;
    }

    public function start() {
        return view('start');
    }

    public function index() {
        return view('area_personale_utente');
    }

    public function allAziende() {

        $aziende = $this->_catalogModel->getAllAziende();

        return view('start')
                        ->with('allAziende', $aziende);
    }

    public function allAziendeAdmin() {

        $aziende = $this->_catalogModel->getAllAziende();

        return view('mostra_aziende_area_personale')
                        ->with('allAziendeAdmin', $aziende);
    }

    public function getAzienda($aziendaId) {

        $azienda = $this->_catalogModel->getAziende($aziendaId)->first();
        $promos = $this->_catalogModel->getPromo($aziendaId);

        return view('offerte_azienda')
                        ->with('azienda', $azienda)
                        ->with('promos', $promos);
    }
    
    public function getAllPromoAzienda($aziendaId) {

        $azienda = $this->_catalogModel->getAziende($aziendaId)->first();
        $promos = $this->_catalogModel->getPromo($aziendaId);

        return view('offerte_azienda')
                        ->with('azienda', $azienda)
                        ->with('promos', $promos);
    }

    public function getOfferteAdmin($aziendaId) {

        $azienda = $this->_catalogModel->getAziende($aziendaId)->first();
        $offerte = $this->_catalogModel->getPromo($aziendaId);

        return view('mostra_promo_da_modificare')
                        ->with('azienda', $azienda)
                        ->with('allOfferteAzienda', $offerte);
    }

    public function getBuono($offertaId){
        $offertaDetails=$this->_catalogModel->getOffertaById($offertaId);
        $codiceBuono = $this->_catalogModel->generaCodBuono();
        $dataScad = $this->_catalogModel->generaDataScadenzaBuono();
        $utente = Auth::user();
        $buono = $this->_catalogModel->createCoupon($codiceBuono, $dataScad, $offertaDetails->id, $utente->id);
        //$buono = $this->_catalogModel->getBuonoOfferta($offertaId);
        return view('coupon')
                        ->with('buono', $buono)
                        ->with('offerta', $offertaDetails)
                        ->with('utente', $utente);
    }
    
    public function getBuonoRiscattato($buonoId){
        $buono = $this->_catalogModel->getBuonoById($buonoId);
        $offertaDetails=$this->_catalogModel->getOfferteAll($buono->offPromo);
        $utente = Auth::user();
        return view('coupon')
                        ->with('buono', $buono)
                        ->with('offerta', $offertaDetails)
                        ->with('utente', $utente);
    }
    public function getPromoDetails($promoId){
        $promoDetails= $this->_catalogModel->getPromoDetails($promoId)->first();
        $buoni=$this->_catalogModel->getBuonoOfferta($promoId);
        return view('dettaglio_offerta')
                        ->with('offerta', $promoDetails)
                        ->with('buoni', $buoni);
    }

    public function getOffertaById($promoId) {
        $promoDetails = $this->_catalogModel->getOffertaById($promoId);
        return view('dettaglio_offerta')
                        ->with('dettaglio_offerta', $promoDetails);
    }

    
    public function addOfferta(){
        
        $aziende = $this->_catalogModel->getAllAziendeNoPaged();
        return view('crea_offerta')
                        ->with('aziende', $aziende);
    }

    public function ricercaPromo(Request $request) {

        $descrizione = $request->input('descrizione');
        $aziendaName = $request->input('azienda');

        $aziendeId = $this->_catalogModel->getSimilarAziende($aziendaName);
        $promos = $this->_catalogModel->ricercaPromo($aziendeId, $descrizione);
        

        if ($promos != null) {
            return view('risultati_page' )
                            ->with('promos', $promos)
                            ->with('aziendaSearch', 'Risultati con Azienda: "' . $aziendaName . '"')
                            ->with('descSearch', 'Risultati con Descrizione: "' . $descrizione . '"');
        } else {
            return view('risultati_page')
                            ->with('message', 'Nessuna promozione trovata.');
        }
    }

    public function storeOfferta(NuovaOffertaRequest $request) {

        $image = $request->file('logoOff');
        $imageName = $image->getClientOriginalName();

        $offerta = new Offerta;
        $offerta->fill($request->validated());
        $offerta->logoOff = $imageName;
        $offerta->stato = '1';
        $offerta->utente = Auth::user()->id;
        $offerta->save();

        $destinationPath = public_path() . '/images/products';
        $image->move($destinationPath, $imageName);

        return response()->json(['redirect' => route('mostra_aziende_area_personale')]);
    }

    public function viewOfferta($offertaId) {
        $offerta = $this->_catalogModel->getOffertaById($offertaId);
        return view('modifica_offerta')
                        ->with('offerta', $offerta);
    }

    public function modificaOfferta($offertaId, ModificaOffertaRequest $request) {
        $offerta = $this->_catalogModel->getOffertaById($offertaId);
        
        $image = $request->file('logoOff');
        $imageName = $image->getClientOriginalName();
        
        $requestVal = $request->validated();
        $offerta->logoOff = $imageName;
        $offerta->stato = '1';
        $offerta->update($requestVal);

        $offerta->save();

        $destinationPath = public_path() . '/images/products';
        $image->move($destinationPath, $imageName);

        return response()->json(['redirect' => route('mostra_aziende_area_personale')]);
    }

    public function eliminaOfferta($offertaId) {
        $offerta = $this->_catalogModel->getOffertaById($offertaId);

        $offerta->stato = '0';
        $offerta->save();
        
        return redirect('/mostra_aziende_area_personale');
        //senza la definizione di primary key non va la modifica
    }
    
        public function eliminaAzienda($aziendaId) {
        
        $azienda = $this->_catalogModel->getAziendaById($aziendaId);

        $offerteAzienda = $this->_catalogModel->getOffertaByAzienda($aziendaId);
        foreach ($offerteAzienda as $offerta) {
            $offerta->stato = '0';
            $offerta->save();

        }
        $azienda->delete();
        return redirect('/mostra_aziende_area_personale');
        //senza la definizione di primary key non va la modifica
    }

    public function addAzienda() {

        return view('crea_azienda');
    }

    public function storeAzienda(NuovaAziendaRequest $request) {

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();

        $azienda = new Azienda;
        $azienda->fill($request->validated());
        $azienda->image = $imageName;
        $azienda->utente = Auth::user()->id;
        $azienda->save();

        //$destinationPath = public_path() . '/images/companies';
        $destinationPath = '/home/grp_07/www/laraProject/public/images/companies';
        $image->move($destinationPath, $imageName);

        return response()->json(['redirect' => route('mostra_aziende_area_personale')]);
    }

    public function viewAzienda($codiceA) {
        $azienda = $this->_catalogModel->getAziendaById($codiceA);
        return view('modifica_azienda')
                        ->with('azienda', $azienda);
    }

    public function modificaAzienda($codiceA, ModificaAziendaRequest $request) {
        $azienda = $this->_catalogModel->getAziendaById($codiceA);
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();

        $requestVal = $request->validated();
        $azienda->update($requestVal);
        $azienda->image = $imageName;
        $azienda->save();

        $destinationPath = public_path() . '/images/companies';
        $image->move($destinationPath, $imageName);

        return response()->json(['redirect' => route('mostra_aziende_area_personale')]);
    }

}
