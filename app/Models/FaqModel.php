<?php

namespace App\Models;

use App\Models\Resources\Faq;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqModel 
{
    public function getFaq($paged = 7) { 
        return Faq::get()->paginate($paged);
    }
}
