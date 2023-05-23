<?php

namespace App\Models;

use App\Models\Resources\Azienda;
use App\Models\Resources\Offerta;
use App\Models\Resources\Buono;
use App\Models\Resources\Bundle;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo {

    public function getAllAziende($paged = 8) {
        $azienda = Azienda::paginate($paged);
        return $azienda;
    }

    public function getAziendaById($aziendaId) {
        return Azienda::where('id', $aziendaId)->first();
    }

    public function getAziende($aziendaId) {
        return Azienda::where('id', $aziendaId);
    }

    public function getPromo($aziendaId) {
        return Offerta::where('azienda', $aziendaId)->get();
    }

    public function getOffertaById($offertaId) {
        return Offerta::where('id', $offertaId)->first();
    }

    public function getPromoDetails($promoId) {
        return Offerta::where('id', $promoId)->get();
    }

    public function getSimilarAziende($aziendaName) {
        if ($aziendaName != "") {
            $aziendeId = Azienda::where('nome', 'LIKE', '%' . $aziendaName . '%')->select('id')->get();
            return $aziendeId->toArray();
        } else {
            return null;
        }
    }

    public function ricercaPromo($aziendeId = null, $descrizione = "") {

        if ($aziendeId == null) {
            if ($descrizione != "") {
                return Offerta::where('oggettoOff', 'LIKE', '%' . $descrizione . '%')->get();
            } else {
                return null;
            }
        } else {
            $vectorPromos = [];
            if ($descrizione != "") {

                foreach ($aziendeId as $aziendaId) {

                    $vectorOff = Offerta::where([['oggettoOff', 'LIKE', '%' . $descrizione . '%'], ['azienda', $aziendaId]])->get();

                    foreach ($vectorOff as $singleAzienda) {
                        $vectorPromos[] = $singleAzienda;
                    }
                }
                return $vectorPromos;
            } else {
                foreach ($aziendeId as $aziendaId) {
                    $vectorOff = Offerta::where('azienda', $aziendaId)->get();
                    foreach ($vectorOff as $singleAzienda) {
                        $vectorPromos[] = $singleAzienda;
                    }
                }
                return $vectorPromos;
            }
        }
    }

    public function getBuono($buonoId) {
        return Buono::where('codCoupon', $buonoId)->get()->first();
    }

    public function createCoupon($codCoupon, $utenteRich, $dataScad, $offPromo) {
        Buono::create([
            'codCoupon' => $codCoupon,
            'utenteRich' => $utenteRich,
            'dataScad' => $dataScad,
            'offPromo' => $offPromo
        ]);

        return Buono::where('codCoupon', $codCoupon)->get();
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
