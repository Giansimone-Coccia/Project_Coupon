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
    
    public function setNewDatiUtente($username, $password = "", $nome = "", $cognome = "", $genere = "", $dataNascita = "1900-01-01", $email="", $telefono="", $ruolo=""){
            
        if ($password!=""){ 
            Utente::where('username', $username)->update([
                'password' => $password
            ]);
        }
        
        if ($nome!=""){ 
            Utente::where('username', $username)->update([
                'nome' => $nome
            ]);
        }
        
        if ($cognome!=""){ 
            Utente::where('username', $username)->update([
                'cognome' => $cognome
            ]);
        }
        
        if ($genere!=""){ 
            Utente::where('username', $username)->update([
                'genere' => $genere
            ]);
        }
        
        if ($dataNascita!=""){ 
            Utente::where('username', $username)->update([
                'dataNascita' => $dataNascita
            ]);
        }
      
        if ($email!=""){ 
            Utente::where('username', $username)->update([
                'email' => $email
            ]);
        }
        
        
        if ($telefono!=""){ 
            Utente::where('username', $username)->update([
                'telefono' => $telefono
            ]);
        }
        
        if ($ruolo!=""){ 
            Utente::where('username', $username)->update([
                'ruolo' => $ruolo
            ]);
        }
    }
    
    public function getCouponUtente($usernameUtente) {
        return Buono::where('utenteRich', $usernameUtente)->get();
    }
    
}
