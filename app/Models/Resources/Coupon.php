<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupons';
    protected $primaryKey = ['offPromo','utente'];
    
    public $timestamps = false;
    
    public function couponAzienda() {
        return $this->hasOne(Azienda::class, 'codiceA', 'azienda'); //Il secondo della classe corrente
    }
    
    public function couponUtente() {
        return $this->hasOne(Utente::class, 'username', 'utente'); //Il secondo della classe corrente
    }
}
