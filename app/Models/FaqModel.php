<?php

namespace App\Models;

use App\Models\Resources\Faq;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqModel 
{
   /*public function getFaq($paged ) { 
        return Faq::get()->paginate($paged);
    }*/
    
    public function getFaq( ) { 
        return Faq::get();
    }
}
