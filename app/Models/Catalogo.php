<?php

namespace App\Models;

use App\Models\Resources\Azienda;
use App\Models\Resources\Offerta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo
{
    public function getAllAziende(){
        return Azienda:: get();
    }
    
    public function getAziendaById($aziendaId){
        return Azienda::where('codiceA',$aziendaId);
    }
    
    public function getPromo($aziendaId) {
        return Offerta::where('azienda', $aziendaId)->get();
    }
    
    public function getPromoDetails($promoId){
        return Offerta::where('codOfferta', $promoId) -> get();
    }
    
    public function createCoupon($codCoupon, $utenteRich, $modFruiz, $descProd, $dataScad, $offPromo, $utente, $azienda) {
        Buono::create([
            'codCoupon' => $codCoupon,
            'utenteRich' => $utenteRich,
            'dataScad' => $dataScad,
            'offPromo' => $offPromo
        ]);
    }
}
