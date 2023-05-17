<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Azienda extends Model
{
    protected $table = 'aziende';
    protected $primaryKey = 'codiceA';
    protected $fillable = ['codiceA','nome', 'localizzazione', 'ragSoc','image','tipologia','descAzienda', 'utente'];
        
    public $timestamps = false;
    
    
    public function aziendaUtente() {
      return $this->hasOne(Utente::class, 'username', 'utente');
    }
    
    public function generaCodAzienda(){
        return $id = uniqid('A');
    }
}
