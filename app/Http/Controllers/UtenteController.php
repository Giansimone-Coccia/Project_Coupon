<?php

namespace App\Http\Controllers;

use App\Models\UtenteModel;
use App\Models\Catalogo;
use App\Models\User;
use App\Models\Resources\Azienda;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ModificaProfiloUtenteRequest;
use App\Http\Requests\ModificaStaffRequest;
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
    
    public function getInfoAdmin(){
        $coupon = $this->_Catalogo->couponCount();
        
        return view('area_personale_admin')
            ->with('numCoupon', $coupon);
    }
    
    
    public function getInfoStaff($username){
        
        $staff = $this->_UtenteModel->getInfoUtente($username)->first();

        return view('area_personale_staff')
                        ->with('utenti', $staff);
    }
    

    
    public function getCouponUtente(){
        
        $couponUtente = $this->_UtenteModel->getCouponUser(Auth::user()->id);
        
        $couponOfferta = [];
        foreach ($couponUtente as $coupon) {
            $couponOfferta[] = $this->_Catalogo->getOffertaById($coupon->offPromo);  //con questo si lega ad ogni coupon la corrispettiva offerta
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
                
        $utente -> update($requestVal);
        if ($request->filled('password')) {
            $utente->password = Hash::make($request->password);
        }
        
        $utente->save();
        
        return response()->json(['redirect' => route('area_personale_utente')]);
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
        $staff->password = Hash::make($request->password);
        $staff->save();
        return response()->json(['redirect' => route('mostra_membri_staff')]);
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
        
        $ruserTot = $this->_UtenteModel->getAllUserR();
        foreach($ruserTot as $ruser){
            $numCoupon[] = $this->_Catalogo -> couponCountXUsers($ruser->id);
            
        }

        return view('mostra_utenti_registrati')
                        ->with('allRegisteredUsers', $ruserTot)
                        ->with('numCoupon', $numCoupon);
    }
    
    public function viewMembroStaff($staffId) {
        $membro = $this->_UtenteModel->getInfoUtente($staffId);
        return view('modifica_membro_staff')
                        ->with('membro', $membro);
    }
    
    public function modificaMembroStaff($staffId, ModificaStaffRequest $request) {
        $membro = $this->_UtenteModel->getInfoUtente($staffId);

        $requestVal = $request->validated();
        
        $membro ->update($requestVal);
        $membro->password = Hash::make($request->password);
        $membro->save();

        return response()->json(['redirect' => route('mostra_membri_staff')]);
    }
        
    public function eliminaStaff($staffId) {
        
        $staff = $this->_UtenteModel->getInfoUtente($staffId)->first();

        $staff->delete();

        return route('mostra_membri_staff');
    }
   
}
