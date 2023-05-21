<?php

namespace App\Http\Controllers;

use App\Models\UtenteModel;
use App\Models\Catalogo;
use App\Models\Resources\Azienda;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\ModificaProfiloUtenteRequest;


class UtenteController extends Controller
{
    protected $_UtenteModel;
    protected $_Catalogo;

    public function __construct() {
        $this->_UtenteModel = new UtenteModel;
        $this->_Catalogo = new Catalogo;
    }
    
    public function getInfoUtente($username){
        
        $utenti = $this->_UtenteModel->getInfoUtente($username)->first();

        return view('area_personale_utente')
                        ->with('utenti', $utenti);
    }
    
    public function getInfoAdmin($username){
        
        $admin = $this->_UtenteModel->getInfoUtente($username)->first();

        return view('area_personale_admin')
                        ->with('admin', $admin);
    }
    
    public function getInfoStaff($username){
        
        $staff = $this->_UtenteModel->getInfoUtente($username)->first();

        return view('area_personale_staff')
                        ->with('utenti', $staff);
    }
    
    
    public function getCouponUtente($usernameUtente){
        
        $couponUtente = $this->_UtenteModel->getCouponUtente($usernameUtente);
        
        foreach ($couponUtente as $coupon) {
            $couponOfferta = $this->_Catalogo->getOffertaById($coupon->offPromo);  //con questo si lega ad ogni coupon la corrispettiva offerta
        }
        
        
        return view('lista_coupon')
                ->with('couponUtente', $couponUtente)
                ->with('couponOfferta', $couponOfferta); 
        }
        
    public function modificaProfiloUtente($username, ModificaProfiloUtenteRequest $request) {
        $utente = $this->_UtenteModel->getInfoUtente($username);
        $utente->fill($request->validated());
        $utente->save();

        return redirect('/');
    }

    public function addMembroStaff(){
        
        $aziende = $this->_Catalogo-> getAllAziende();

        return view('crea_membro_staff')
                        ->with('aziende', $aziende);
    }

    public function storeMembroStaff(NuovaOffertaRequest $request) {


        return redirect('/');
    }

    public function allStaffAdmin(){
        
        $staff = $this->_UtenteModel->getAllStaff();

        return view('mostra_membri_staff')
                        ->with('allStaffAdmin', $staff);
    }
    
    public function modificaProfUtente(){
        
        $utente = $this->_UtenteModel->getAllStaff;

        return view('mostra_membri_staff')
    ->with('allStaffAdmin', $staff);}

    public function allRegisteredUsers(){
        
        $ruser = $this->_UtenteModel->getAllUserR();

        return view('mostra_utenti_registrati')
                        ->with('allRegisteredUsers', $ruser);
    }
   
}
