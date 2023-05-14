<?php

namespace App\Http\Controllers;

use App\Models\FaqModel;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    protected $_FAQModel;

    public function __construct() {
        $this->_FAQModel = new FaqModel;
    }
    
    public function allFAQ(){
        
        $FAQs = $this->_FAQModel->getAllFaq();

        return view('FAQ')
                ->with('TutteFAQ', $FAQs);
    }
}
