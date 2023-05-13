<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Promozione extends Model
{
    protected $table = 'promozioni';
    protected $primaryKey = 'idPromoAb';
    
    protected $guarded = ['idPromoAb'];
    
    public $timestamps = false;
    
    public function promoUtente() {
        return $this->hasOne(Utente::class, 'username', 'utente'); //Il secondo della classe corrente
    }
}
