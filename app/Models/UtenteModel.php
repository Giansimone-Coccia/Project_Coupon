<?php

namespace App\Models;

use App\Models\Resources\Utente;
use App\Models\Resources\Buono;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtenteModel 
{
    public function getInfoUtente($username){
        return Utente::where('username', $username)->get();
    }
    
    public function setNewDatiUtente($username, $password = "", $nome = "", $cognome = "", $genere = "", $dataNascita = "1900-01-01", $email="", $telefono=""){
            
        if ($password!=""){ 
            Modello::where('username', $username)->update([
                'password' => $password
            ]);
        }
        
        if ($nome!=""){ 
            Modello::where('username', $username)->update([
                'nome' => $nome
            ]);
        }
        
        if ($cognome!=""){ 
            Modello::where('username', $username)->update([
                'cognome' => $cognome
            ]);
        }
        
        if ($genere!=""){ 
            Modello::where('username', $username)->update([
                'genere' => $genere
            ]);
        }
        
        if ($dataNascita!=""){ 
            Modello::where('username', $username)->update([
                'dataNascita' => $dataNascita
            ]);
        }
      
        if ($email!=""){ 
            Modello::where('username', $username)->update([
                'email' => $email
            ]);
        }
        
        
        if ($telefono!=""){ 
            Modello::where('username', $username)->update([
                'telefono' => $telefono
            ]);
        }
    }
    
    public function getCouponUtente($usernameUtente) {
        return Buono::where('utenteRich', $usernameUtente)->get();
    }
}
