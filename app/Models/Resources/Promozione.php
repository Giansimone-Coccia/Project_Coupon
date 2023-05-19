<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Promozione extends Model
{
    protected $table = 'promozioni';
    protected $primaryKey = 'id';
    
    protected $guarded = ['id'];
    
    public $timestamps = false;
    
    public function promoUtente() {
        return $this->hasOne(User::class, 'id', 'utente'); //Il secondo della classe corrente
    }
}
