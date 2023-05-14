<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Buono extends Model
{
    protected $table = 'buoni';
    //protected $primaryKey = ['offPromo','utenteRich'];
    
    public $timestamps = false;
    
    public function couponAzienda() {
        return $this->hasOne(Azienda::class, 'codiceA', 'azienda'); //Il secondo della classe corrente
    }
    
    public function couponUtente() {
        return $this->hasOne(Utente::class, 'username', 'utenteRich'); //Il secondo della classe corrente
    }
}
