<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    protected $table = 'utenti';
    protected $primaryKey = 'username';
    public $incrementing = false;
    
    protected $guarded = ['username'];
    
    public $timestamps = false;
}
