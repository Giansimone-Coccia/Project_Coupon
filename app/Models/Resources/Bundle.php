<?php

namespace App\Models\Resources;


use Illuminate\Database\Eloquent\Model;

class Bundle extends Model
{
    protected $table = 'bundles';
    protected $primaryKey = ['promoAbb','offertaPromo'];
    
    public $timestamps = false;
    
    
    public function bundlePromo() {
      return $this->hasOne(Promozione::class, 'id', 'promoAbb');
    }
    
    public function bundleOfferta() {
      return $this->hasOne(Offerta::class, 'id', 'offertaPromo');
    }
}
