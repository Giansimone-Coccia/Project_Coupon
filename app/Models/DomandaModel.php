<?php

namespace App\Models;

use App\Models\Resources\Domanda;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomandaModel 
{

    public function getAllFaq(){ 
        return Domanda:: get();
    }
    
    public function getFaq($faqId){
        return Domanda::where('id',$faqId)->first();
    }
    
}
