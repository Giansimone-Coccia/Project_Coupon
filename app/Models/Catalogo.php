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
            $aziendeId = Azienda::where('nome', 'LIKE', '%' . $aziendaName . '%')->select('id')->get();
            return $aziendeId->toArray();
        } else {
            return null;
        }
    }

    public function ricercaPromo($aziendeId = null, $descrizione = "", $paged = 8) {
        if ($aziendeId == null) {
            if ($descrizione != "") {
                $vectorPromos = Offerta::where('oggettoOff', 'LIKE', '%' . $descrizione . '%')->get();
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
                            ])->get();

                    foreach ($vectorOff as $singleAzienda) {
                        $vectorPromos->push($singleAzienda);
                    }
                }
            } else {
                foreach ($aziendeId as $aziendaId) {
                    $vectorOff = Offerta::where('azienda', $aziendaId)->get();
                    foreach ($vectorOff as $singleAzienda) {
                        $vectorPromos->push($singleAzienda);
                    }
                }
            }
        }

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = $paged;
        $offertaSlice = $vectorPromos->slice(($currentPage - 1) * $perPage, $perPage);
        $vectorPromos = new LengthAwarePaginator(
                $offertaSlice,
                $vectorPromos->count(),
                $perPage,
                $currentPage,
                ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );

        return $vectorPromos;
    }

    public function getBuono($buonoId) {
        return Buono::where('codCoupon', $buonoId)->get()->first();
    }

    public function getBuonoOfferta($offertaId) {
        return Buono::where('offPromo', $offertaId)->get()->first();
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

        //return Buono::where('codCoupon', $codCoupon)->get();
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
