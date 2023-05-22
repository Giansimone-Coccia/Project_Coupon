<?php

namespace App\Http\Controllers;

use App\Models\UtenteModel;
use App\Models\Catalogo;
use App\Models\User;
use App\Models\Resources\Azienda;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ModificaProfiloUtenteRequest;
use App\Http\Requests\NuovoMembroStaffRequest;


class UtenteController extends Controller
{
    protected $_UtenteModel;
    protected $_Catalogo;

    public function __construct() {
        $this->_UtenteModel = new UtenteModel;
        $this->_Catalogo = new Catalogo;
    }
    
    public function getInfoUtente(){
        
        //$utenti = $this->_UtenteModel->getInfoUtente(Auth::user()->id)->first();

        return view('area_personale_utente');
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
    

    
    public function getCouponUtente(){
        
        $couponUtente = $this->_UtenteModel->getCouponUser(Auth::user()->id);
        
        foreach ($couponUtente as $coupon) {
            $couponOfferta = $this->_Catalogo->getOffertaById($coupon->offPromo);  //con questo si lega ad ogni coupon la corrispettiva offerta
        }
        
        
        return view('lista_coupon')
                ->with('couponUtente', $couponUtente)
                ->with('couponOfferta', $couponOfferta); 
        }
        
        public function viewModProfUtente() {
            
            return view('modifica_profilo_utente');
            
        }    
        
    public function modificaProfiloUtente(ModificaProfiloUtenteRequest $request) {
        // Verifica l'autenticazione o l'autorizzazione dell'utente se necessario

        $utente = Auth::user();

        $requestVal = $request->validated();
        if ($request->filled('password')) {
            $utente->password = bcrypt($request->password);
        }        
        $utente -> update($requestVal);


        return redirect('/area_personale_utente');
    }

    public function addMembroStaff(){
        
        $aziende = $this->_Catalogo-> getAllAziende();

        return view('crea_membro_staff')
                        ->with('aziende', $aziende);
    }

    public function storeMembroStaff(NuovoMembroStaffRequest $request) {
        $staff = new User;
        $staff->fill($request->validated());
        $staff->ruolo = 'staff';
        $staff->password = bcrypt($request->password);
        $staff->save();
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
                        ->with('allStaffAdmin', $staff);
    }

    public function allRegisteredUsers(){
        
        $ruser = $this->_UtenteModel->getAllUserR();

        return view('mostra_utenti_registrati')
                        ->with('allRegisteredUsers', $ruser);
    }
   
}
