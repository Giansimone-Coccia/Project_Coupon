<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Offerta extends Model
{
    protected $table = 'offerte';
    //protected $primaryKey = 'codOfferta';
    
    protected $guarded = ['codOfferta'];
    
    public $timestamps = false;
    
    public function offAzienda() {
        return $this->hasOne(Azienda::class, 'codiceA', 'azienda'); //Il secondo della classe corrente
    }
    
    public function offUtente() {
        return $this->hasOne(Utente::class, 'username', 'utente'); //Il secondo della classe corrente
    }
}
