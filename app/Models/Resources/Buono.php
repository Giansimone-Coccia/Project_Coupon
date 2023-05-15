<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Buono extends Model
{
    protected $table = 'buoni';
    //protected $primaryKey = ['offPromo','utenteRich'];
    
    public $timestamps = false;
    protected $fillable = ['codCoupon','utenteRich', 'dataScad', 'offPromo'];
    
    public function couponOfferta() {
        return $this->hasOne(Offerta::class, 'codOfferta', 'offPromo'); //Il secondo della classe corrente
    }
    
    public function couponUtente() {
        return $this->hasOne(Utente::class, 'username', 'utenteRich'); //Il secondo della classe corrente
    }
}
