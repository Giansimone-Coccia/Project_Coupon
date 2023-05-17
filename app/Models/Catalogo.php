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
    
    /*public function ricercaPromo($azienda = null, $descrizione = null) {

        if(!is_null($azienda) && !is_null($descrizione)) {
            return Offerta::where([['oggettoOff', 'LIKE', '%' . $descrizione . '%'],['azienda','LIKE', '%' .  $azienda . '%']])->get();
        } else if (!is_null($azienda) && is_null($descrizione)) {
            return Offerta::where('azienda','LIKE', '%' . $azienda . '%')->get();
        } else if (is_null($azienda) && !is_null($descrizione)) {
            return Offerta::where('oggettoOff', 'LIKE', '%' . $descrizione . '%')->get();
        }
        else{
            return null;
        }
    }*/
    
    public function ricercaPromo($azienda = "", $descrizione = "") {

        if ($azienda != "" && $descrizione != "") {
            Offerta::where('oggettoOff', 'LIKE', '%' . $descrizione . '%')
                    ->where('azienda', 'LIKE', '%' . $azienda . '%')
                    ->get();
        } else if ($azienda != "" && $descrizione == "") {
            return Offerta::where('azienda', 'LIKE', '%' . $azienda . '%')->get();
        } else if ($azienda == "" && $descrizione != "") {
            return Offerta::where('oggettoOff', 'LIKE', '%' . $descrizione . '%')->get();
        } else {
            return null;
        }
    }

    public function getBuono($buonoId){
        return Buono::where('codCoupon', $buonoId) -> get()->first();
    }
    
    public function createCoupon($codCoupon, $utenteRich, $dataScad, $offPromo) {
       Buono::create([
            'codCoupon' => $codCoupon,
            'utenteRich' => $utenteRich,
            'dataScad' => $dataScad,
            'offPromo' => $offPromo
        ]);
        
         return Buono::where('codCoupon', $codCoupon) -> get();
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
