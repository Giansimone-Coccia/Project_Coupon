<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Azienda extends Model
{
    protected $table = 'aziende';
    //protected $primaryKey = 'codiceA';
        
    public $timestamps = false;
    
    
    public function aziendaUtente() {
      return $this->hasOne(Utente::class, 'username', 'utente');
    }
}
