<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Azienda extends Model {

    protected $table = 'aziende';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'localizzazione', 'ragSoc', 'image', 'tipologia', 'descAzienda', 'utente'];
    protected $guarded = ['id'];
    public $timestamps = false;

    public function aziendaUtente() {
        return $this->hasOne(User::class, 'id', 'utente')->onDelete('set null');
    }

}
