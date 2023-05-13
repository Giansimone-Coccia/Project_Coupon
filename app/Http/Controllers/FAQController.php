<?php

namespace App\Http\Controllers;

use App\Models\FaqModel;
use Illuminate\Support\Facades\Log;


class FAQController extends Controller
{
    protected $_FAQModel;

    public function __construct() {
        $this->_FAQModel = new FaqModel;
    }
    
    public function allFAQ(){
        
        $FAQs = $this->_FAQModel->getFAQ();

        return view('FAQ')
                        ->with('allFAQ', $FAQs);
    }
   
}
