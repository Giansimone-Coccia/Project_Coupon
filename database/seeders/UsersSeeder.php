<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            ['username' => 'useruser', 'password' => Hash::make('dJ1YEtSd'), 'nome' => 'Mario', 'cognome' => 'Rossi', 'genere' => 'M', 'dataNascita' => '2001-03-17', 'email' => 'mariorossi1@gmail.com', 'telefono' => '3453454567', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0002', 'password' => Hash::make('Laura205843'), 'nome' => 'Laura', 'cognome' => 'Bianchi', 'genere' => 'F', 'dataNascita' => '2000-01-15', 'email' => 'laurabianchi1@gmail.com', 'telefono' => '3366454567', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0003', 'password' => Hash::make('Luigi304753'), 'nome' => 'Luigi', 'cognome' => 'Verdi', 'genere' => 'M', 'dataNascita' => '1997-05-20', 'email' => 'luigiverdi1@gmail.com', 'telefono' => '3474294523', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0004', 'password' => Hash::make('Walter406534'), 'nome' => 'Walter', 'cognome' => 'White', 'genere' => 'M', 'dataNascita' => '1985-01-01', 'email' => 'walterw1@gmail.com', 'telefono' => '3330548364', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0005', 'password' => Hash::make('Edoardo509574'), 'nome' => 'Edoardo', 'cognome' => 'Giusti', 'genere' => 'M', 'dataNascita' => '1999-07-03', 'email' => 'edoardog1@gmail.com', 'telefono' => '3001234567', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0006', 'password' => Hash::make('Edoardo475574'), 'nome' => 'Marco', 'cognome' => 'Gialli', 'genere' => 'M', 'dataNascita' => '1998-12-03', 'email' => 'marco@gmail.com', 'telefono' => '3002248954', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0007', 'password' => Hash::make('Lara509574'), 'nome' => 'Lara', 'cognome' => 'Benedetti', 'genere' => 'F', 'dataNascita' => '1993-07-03', 'email' => 'lara12@gmail.com', 'telefono' => '3547896522', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0008', 'password' => Hash::make('Elisa504974'), 'nome' => 'Elisa', 'cognome' => 'Cavour', 'genere' => 'F', 'dataNascita' => '1999-08-05', 'email' => 'ely78@gmail.com', 'telefono' => '3471120369', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0009', 'password' => Hash::make('Manuel50314'), 'nome' => 'Manuel', 'cognome' => 'Meriti', 'genere' => 'M', 'dataNascita' => '1994-07-12', 'email' => 'manu89@gmail.com', 'telefono' => '3485712596', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'staffstaff', 'password' => Hash::make('dJ1YEtSd'), 'nome' => 'Luca', 'cognome' => 'Traini', 'genere' => null, 'dataNascita' => null, 'email' => null, 'telefono' => null, 'ruolo' => 'staff', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'US0002', 'password' => Hash::make('FrancaMM12'), 'nome' => 'Franca', 'cognome' => 'Marchi', 'genere' => null, 'dataNascita' => null, 'email' => null, 'telefono' => null, 'ruolo' => 'staff', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'US0003', 'password' => Hash::make('AlessioSff32'), 'nome' => 'Alessio', 'cognome' => 'Romagnoli', 'genere' => null, 'dataNascita' => null, 'email' => null, 'telefono' => null, 'ruolo' => 'staff', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'US0004', 'password' => Hash::make('LuigiVVStaff45'), 'nome' => 'Luigi', 'cognome' => 'Verdi', 'genere' => null, 'dataNascita' => null, 'email' => null, 'telefono' => null, 'ruolo' => 'staff', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'US0005', 'password' => Hash::make('EdoardoGG12'), 'nome' => 'Edoardo', 'cognome' => 'Giusti', 'genere' => null, 'dataNascita' => null, 'email' => null, 'telefono' => null, 'ruolo' => 'staff', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'adminadmin', 'password' => Hash::make('dJ1YEtSd'), 'nome' => 'Giulio', 'cognome' => 'Cesari', 'genere' => 'M', 'dataNascita' => '1985-07-02', 'email' => "giuliocesari@gmail.com", 'telefono' => "334323455", 'ruolo' => 'admin', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")]
        ]);
    }

}
