<?php

namespace App\Models;

use App\Models\Resources\Azienda;
use App\Models\Resources\Offerta;
use App\Models\Resources\Buono;
use App\Models\Resources\Bundle;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo {

    public function getAllAziende($paged = 8) {
        $azienda = Azienda::paginate($paged);
        return $azienda;
    }

    public function getAllAziendeNoPaged() {
        $azienda = Azienda::get();
        return $azienda;
    }

    public function getAllBuoni() {
        $buono = Buono::get();
        return $buono;
    }

    public function couponCount() {
        return Buono::count();
    }

    public function couponCountXUsers($userId) {
        return Buono::where('utenteRich', $userId)->count();
    }

    public function getAziendaById($aziendaId) {
        return Azienda::where('id', $aziendaId)->first();
    }

    public function getAziende($aziendaId) {
        return Azienda::where('id', $aziendaId);
    }

    public function getPromo($aziendaId, $paged = 8) {
        $offerta = Offerta::where('azienda', $aziendaId)
                ->where('stato', '1');
        return $offerta->paginate($paged);
    }

    public function getOffertaByAzienda($aziendaId) {
        $offerta = Offerta::where('azienda', $aziendaId)
                        ->where('stato', '1')->get();
        return $offerta;
    }

    public function getOffertaById($offertaId) {
        return Offerta::where('id', $offertaId)
                        ->where('stato', '1')
                        ->first();
    }

    public function getOfferteAll($offertaId) {
        return Offerta::where('id', $offertaId)->first();
    }

    public function getPromoDetails($promoId) {
        return Offerta::where('id', $promoId)->get();
    }

    public function getSimilarAziende($aziendaName) {
        if ($aziendaName != "") {
            $aziendeId = Azienda::where('nome', 'LIKE', '%' . $aziendaName . '%')->select('id')->get();//ottengo tutti gli id delle aziende che hanno un nome che contiene aziendaName
            return $aziendeId->toArray();//ritorno il tutto in formato array, prima era una collection
        } else {
            return null;
        }
    }

    public function ricercaPromo($aziendeId = null, $descrizione = "", $paged = 8) {
        if ($aziendeId == null) {
            if ($descrizione != "") {
                $vectorPromos = Offerta::where('oggettoOff', 'LIKE', '%' . $descrizione . '%')
                        ->where('stato', '1') //cerco offerte che siano attive e che abbiano all'interno di oggettoOff $descrizione
                        ->get();
            } else {
                return null;
            }
        } else {
            $vectorPromos = new Collection();

            if ($descrizione != "") {
                foreach ($aziendeId as $aziendaId) {
                    $vectorOff = Offerta::where([
                                ['oggettoOff', 'LIKE', '%' . $descrizione . '%'],
                                ['azienda', $aziendaId]
                            ])
                            ->where('stato', '1')
                            ->get();

                    foreach ($vectorOff as $singleAzienda) {
                        $vectorPromos->push($singleAzienda);//metto ogni singleAzienda in vectorPromos
                    }
                }
            } else {
                foreach ($aziendeId as $aziendaId) {
                    $vectorOff = Offerta::where('azienda', $aziendaId)
                            ->where('stato', '1')
                            ->get();
                    foreach ($vectorOff as $singleAzienda) {
                        $vectorPromos->push($singleAzienda);
                    }
                }
            }
        }

        if ($vectorPromos->isEmpty()) {
            return null;
        } else {
            $currentPage = LengthAwarePaginator::resolveCurrentPage();//prende la pagina attuale della paginazione 
            $perPage = $paged;
            $offertaSlice = $vectorPromos->slice(($currentPage - 1) * $perPage, $perPage);// serve per prendere un numero di elementi indicato dal secondo $perPage (nel nostro caso 8)a partire dall'elemento di indice ($currentPage - 1) * $perPage. Quindi cambia in base alla pagina in cui ci troviamo nella paginazione
            $vectorPromos = new LengthAwarePaginator(
                    $offertaSlice,//il sottoinsieme di elementi da visualizzare nella pagina corrente.
                    $vectorPromos->count(),//contiamo il numero totale di promozioni
                    $perPage,//il numero di elementi da visualizzare per pagina.
                    $currentPage,// la pagina corrente.
                    ['path' => LengthAwarePaginator::resolveCurrentPath()]//un array associativo che specifica il percorso da utilizzare per generare i link delle pagine.
            );
            return $vectorPromos;
        }
    }

    public function getBuono($buonoId) {
        return Buono::where('codCoupon', $buonoId)->get()->first();
    }

    public function getBuonoOfferta($offertaId) {
        return Buono::where('offPromo', $offertaId)->get();
    }

    public function getBuonoById($buonoId) {
        return Buono::where('id', $buonoId)->get()->first();
    }

    public function createCoupon($codCoupon, $dataScad, $offPromo, $utenteRich) {

        return Buono::create([
                    'codCoupon' => $codCoupon,
                    'dataScad' => $dataScad,
                    'offPromo' => $offPromo,
                    'utenteRich' => $utenteRich
        ]);
    }

    public function generaCodBuono() {
        return $id = uniqid('C');
    }

    public function getBundleByComponentId($offertaId) {
        return Bundle::where('offertaPromo', $offertaId)->get();
    }

    public function deleteBundle($bundle) {
        $promoAbb = $bundle->promoAbb;
        $offertaPromo = $bundle->offertaPromo;

        dd($$bundle);

        DB::table('bundles')
                ->where('promoAbb', $promoAbb)
                ->where('offertaPromo', $offertaPromo)
                ->delete();

        return True;
    }

    public function generaDataScadenzaBuono() {
        $date = new DateTime();
        $date->modify('+1 month');
        return $date->format('Y-m-d');
    }

}
