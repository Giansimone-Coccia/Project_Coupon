<?php

namespace App\Models;

use App\Models\Resources\Faq;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqModel 
{

    public function getAllFaq(){ 
        return Faq:: get();
    }
}
