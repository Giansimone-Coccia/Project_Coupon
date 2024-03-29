<?php

namespace App\Http\Controllers;

use App\Models\DomandaModel;
use App\Models\Resources\Domanda;
use Illuminate\Http\Request;
use App\Http\Requests\NuovaFaqRequest;
use Illuminate\Support\Facades\Auth;


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
    
    public function addFaq(){

        return view('crea_faq');
    }
    
    public function storeFaq(NuovaFaqRequest $request) {
        
        $faq = new Domanda;
        $faq->fill($request->validated());
        $faq->dataPub = date('yy-m-d');
        $faq->utente = Auth::user()->id;
        $faq->save();
       
        return response()->json(['redirect' => route('FAQ')]);
    }
    
    public function viewFaq($id){
        $faq = $this->_FAQModel->getFaq($id);
        
        return view('modifica_faq')
                -> with('faq', $faq);
    }
    
    public function modificaFaq(NuovaFaqRequest $request, $id) {
        
        $faq = $this->_FAQModel->getFaq($id);

        $requestVal = $request->validated();
        $faq->update($requestVal);
        $faq->dataPub = date('yy-m-d');
        $faq->utente = Auth::user()->id;
        $faq->save();
     
        return response()->json(['redirect' => route('FAQ')]);
    }
    
    public function eliminaFaq($faqId) {
        
        $faq = $this->_FAQModel->getFaq($faqId);

        $faq->delete();
        return redirect('/FAQ');
    }
}
