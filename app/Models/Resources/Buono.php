<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Buono extends Model
{
    protected $table = 'buoni';
    protected $primaryKey = ['offPromo','utenteRich'];
    public $incrementing = false;  //serve per dire a laravel di non aspettarsi un valore interp incrementale come chiave primaria
    
    
    public $timestamps = false;
    protected $fillable = ['codCoupon','utenteRich', 'dataScad', 'offPromo'];
    
    public function couponOfferta() {
        return $this->hasOne(Offerta::class, 'codOfferta', 'offPromo'); //Il secondo della classe corrente
    }
    
    public function couponUtente() {
        return $this->hasOne(User::class, 'id', 'utenteRich'); //Il secondo della classe corrente
    }
}
