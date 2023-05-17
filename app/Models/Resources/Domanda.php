<?php

namespace App\Models\Resources;


use Illuminate\Database\Eloquent\Model;

class Domanda extends Model
{
    protected $table = 'domande';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    
    public function faqUtente() {
      return $this->hasOne(Utente::class, 'username', 'utente');
    }
    
}
