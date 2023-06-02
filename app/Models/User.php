<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Resources\Buono;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'username',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function getInfoUtente($id){
        return User::find($id);
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
    
    public function hasRole($ruolo) {
        $ruolo = (array)$ruolo;
        return in_array($this->ruolo, $ruolo);
    }

}
