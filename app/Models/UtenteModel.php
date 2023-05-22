<?php

namespace App\Models;

use App\Models\User;
use App\Models\Resources\Buono;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtenteModel 
{
    /*Probabilmente da eliminare*/
    public function getInfoUtente($id){
        return User::where('id', $id)->get();
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
    
    public function getCouponUser() {
        return Buono::where('userRich', Auth::user()->id)->get();
    }

    public function getAllStaff() {
        $staff = User::where('ruolo','staff')->get();
        return $staff;
    }

    public function getAllUserR() {
        $ruser = User::where('ruolo','user')->get();
        return $ruser;
    }
    
}
