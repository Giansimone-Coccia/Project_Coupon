<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Offerta extends Model
{
    protected $table = 'offerte';
    protected $primaryKey = 'id';
    //senza la definizione di primary key non va la modifica
    protected $fillable = ['oggettoOff', 'modalita', 'tempoFruiz','luogoFruiz','nomeOff','azienda', 'utente'];
    
    protected $guarded = ['id'];
    
    public $timestamps = false;
    
    public function offAzienda() {
        return $this->hasOne(Azienda::class, 'id', 'azienda'); //Il secondo della classe corrente
    }
    
    public function offUtente() {
        return $this->hasOne(User::class, 'id', 'utente'); //Il secondo della classe corrente
    }
    
}
