<?php

namespace App\Models\Resources;


use Illuminate\Database\Eloquent\Model;

class Domanda extends Model
{
    protected $table = 'domande';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = ['domanda', 'risposta', 'datPub', 'utente'];
    
    public function faqUtente() {
      return $this->hasOne(User::class, 'id', 'utente');
    }
    
}
