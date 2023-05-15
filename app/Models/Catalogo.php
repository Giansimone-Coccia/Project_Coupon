<?php

namespace App\Models;

use App\Models\Resources\Azienda;
use App\Models\Resources\Offerta;
use App\Models\Resources\Buono;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo
 {

    public function getAllAziende($paged = 8) {
        $azienda = Azienda::paginate($paged);
        return $azienda;
    }

    public function getAziendaById($aziendaId){
        return Azienda::where('codiceA',$aziendaId);
    }
    
    public function getPromo($aziendaId) {
        return Offerta::where('azienda', $aziendaId)->get();
    }
    
     public function getOffertaById($offertaId){
        return Offerta::where('codOfferta',$offertaId)->first();
    }
    
    public function getPromoDetails($promoId){
        return Offerta::where('codOfferta', $promoId) -> get();
    }
    
    public function getBuono($buonoId){
        return Buono::where('codCoupon', $buonoId) -> get();
    }
    
    public function createCoupon($codCoupon, $utenteRich, $dataScad, $offPromo) {
        Buono::create([
            'codCoupon' => $codCoupon,
            'utenteRich' => $utenteRich,
            'dataScad' => $dataScad,
            'offPromo' => $offPromo
        ]);
    }
    
    public function generaCodBuono(){
        return $id = uniqid('C');
    }
    
    public function generaDataScadenzaBuono(){
        $date = new DateTime();
        $date->modify('+1 month');
        return $date->format('Y-m-d');
    }
}
