<?php

namespace App\Http\Controllers;

use App\Models\DomandaModel;
use Illuminate\Http\Request;

class DomandeController extends Controller
{
    protected $_FAQModel;

    public function __construct() {
        $this->_FAQModel = new DomandaModel;
    }
    
    public function allFAQ(){
        
        $FAQs = $this->_FAQModel->getAllFaq();

        return view('FAQ')
                ->with('FAQs', $FAQs);
    }
}
