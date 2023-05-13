<?php

namespace App\Models;

use App\Models\Resources\Azienda;
use App\Models\Resources\Offerta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo
{
    public function getAzienda(){
        return Azienda:: get();
    }
    
    public function getPromo($aziendaId) {
        return Offerta::where('azienda', $aziendaId)->get();
    }
    
    public function getPromoDetails($promoId){
        return Offerta::where('codOfferta', $promoId) -> get();
    }
    
    public function createCoupon($codCoupon, $utenteRich, $modFruiz, $descProd, $dataScad, $offPromo, $utente, $azienda) {
        Coupon::create([
            'codCoupon' => $codCoupon,
            'utenteRich' => $utenteRich,
            'modFruiz' => $modFruiz,
            'descProdOff' => $descProd,
            'dataScad' => $dataScad,
            'offPromo' => $offPromo,
            'utente' => $utente,
            'azienda' => $azienda
        ]);
    }
}
