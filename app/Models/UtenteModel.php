<?php

namespace App\Models;

use App\Models\User;
use App\Models\Resources\Buono;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class UtenteModel 
{
    
    protected $fillable = [
        'nome',
        'cognome',
        'genere',
        'dataNascita',
        'email',
        'telefono',
        'username',
        'password',
    ];
    
    /*Probabilmente da eliminare*/
    public function getInfoUtente($id){
        //return User::where('id', $id)->get()->first();
        return User::find($id);
    }
    
    /*Probabilmente da eliminare*/
    public function setNewDatiUser($id, $username="", $password = "", $nome = "", $cognome = "", $genere = "", $dataNascita = "1900-01-01", $email="", $telefono="", $ruolo=""){
        
        if ($username!=""){ 
            User::where('id', $id)->update([
                'username' => $username
            ]);
        }
        
        if ($password!=""){ 
            User::where('id', $id)->update([
                'password' => $password
            ]);
        }
        
        if ($nome!=""){ 
            User::where('id', $id)->update([
                'nome' => $nome
            ]);
        }
        
        if ($cognome!=""){ 
            User::where('id', $id)->update([
                'cognome' => $cognome
            ]);
        }
        
        if ($genere!=""){ 
            User::where('id', $id)->update([
                'genere' => $genere
            ]);
        }
        
        if ($dataNascita!="1900-01-01"){ 
            User::where('id', $id)->update([
                'dataNascita' => $dataNascita
            ]);
        }
        
        if ($email!=""){ 
            User::where('id', $id)->update([
                'email' => $email
            ]);
        }
        
        if ($telefono!=""){ 
            User::where('id', $id)->update([
                'telefono' => $telefono
            ]);
        }
        
        if ($ruolo!=""){ 
            User::where('id', $id)->update([
                'ruolo' => $ruolo
            ]);
        }
    }
    
    public function getCouponUser($id) {
        return Buono::where('utenteRich', $id)->get();
    }

    public function getAllStaff($paged = 8) {
        $staff = User::where('ruolo','staff');
        return $staff->paginate($paged);
    }

    public function getAllUserR($paged = 8) {
        $ruser = User::where('ruolo','user');
        return $ruser->paginate($paged);
    }
    
}
