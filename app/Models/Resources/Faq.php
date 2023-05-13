<?php

namespace App\Models\Resources;


use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs';
    protected $primaryKey = 'idFaq';
    public $timestamps = false;
    
    
    public function faqUtente() {
      return $this->hasOne(Utente::class, 'username', 'utente');
    }
    
}
