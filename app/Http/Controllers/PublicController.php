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

    public function getOfferteAdmin($aziendaId) {

        $azienda = $this->_catalogModel->getAziende($aziendaId)->first();
        $offerte = $this->_catalogModel->getPromo($aziendaId);

        return view('mostra_promo_da_modificare')
                        ->with('azienda', $azienda)
                        ->with('allOfferteAzienda', $offerte);
    }

    public function getPromoDetails($promoId) {
        $promoDetails = $this->_catalogModel->getPromo($promoId);
        return view('dettaglio_offerta')
                        ->with('dettaglio_offerta', $promoDetails);
    }

    public function getOffertaById($promoId) {
        $promoDetails = $this->_catalogModel->getOffertaById($promoId);
        return view('dettaglio_offerta')
                        ->with('dettaglio_offerta', $promoDetails);
    }

    public function getBuono($offertaId) {
        $offertaDetails = $this->_catalogModel->getOffertaById($offertaId);
        $codiceBuono = $this->_catalogModel->generaCodBuono();
        $dataScad = $this->_catalogModel->generaDataScadenzaBuono();
        //$buonoDetails= $this->_catalogModel->createCoupon($codiceBuono, 'UC0002', $dataScad, $offertaDetails->codOfferta);
        $buono = $this->_catalogModel->getBuono('1');
        return view('coupon')
                        ->with('buono', $buono)
                        ->with('offerta', $offertaDetails);
    }

    public function addOfferta() {

        $aziende = $this->_catalogModel->getAllAziende();

        return view('crea_offerta')
                        ->with('aziende', $aziende);
    }

    public function ricercaPromo(Request $request) {

        $descrizione = $request->input('descrizione');
        $aziendaName = $request->input('azienda');

        $aziendeId = $this->_catalogModel->getSimilarAziende($aziendaName);
        $promos = $this->_catalogModel->ricercaPromo($aziendeId, $descrizione);

        if ($promos != null) {
            return view('risultati_page')
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
        $offerta->utente = Auth::user()->id;
        $offerta->save();

        $destinationPath = public_path() . '/images/products';
        $image->move($destinationPath, $imageName);

        return redirect('/');
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
        $offerta->update($requestVal);
        $offerta->logoOff = $imageName;
        $offerta->save();

        $destinationPath = public_path() . '/images/products';
        $image->move($destinationPath, $imageName);

        return redirect('/');
        //senza la definizione di primary key non va la modifica
    }

    public function eliminaOfferta($offertaId) {
        $bundles = $this->_catalogModel->getBundleByComponentId($offertaId);

        foreach ($bundles as $bundle) {
            $bool=$this->_catalogModel->deleteBundle($bundle);
        }
        $offerta = $this->_catalogModel->getOffertaById($offertaId);
        $offerta->delete();

        return route('mostra_promo_da_modificare');
        //senza la definizione di primary key non va la modifica
    }
    
        public function eliminaAzienda($aziendaId) {
        
        $offerte = $this->_catalogModel->getPromo($aziendaId);
        
        foreach ($offerte as $offerta) {
            $this->eliminaOfferta($offerta->id);
        }
        
        $azienda = $this->_catalogModel->getAziendaById($aziendaId);

        $azienda->delete();

        return route('mostra_aziende_area_personale');
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

        $destinationPath = public_path() . '/images/companies';
        $image->move($destinationPath, $imageName);

        return redirect('/');
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

        return redirect('/');
        //senza la definizione di primary key non va la modifica
    }

}
