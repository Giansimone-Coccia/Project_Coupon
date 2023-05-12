<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtentiSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utenti')->insert([
            ['username' => 'UC0001', 'password' => 'twebexam', 'nome' => 'Mario', 'cognome' => 'Rossi', 'genere' =>'M' , 'dataNascita' => '2001-03-17','email' => 'mariorossi1@gmail.com', 'telefono' => '3453454567'],
            ['username' => 'UC0002', 'password' => 'twwww', 'nome' => 'Laura', 'cognome' => 'Bianchi', 'genere' => 'F' , 'dataNascita' => '2000-01-15','email' => 'laurabianchi1@gmail.com', 'telefono' => '3366454567'],
            ['username' => 'UC0003', 'password' => 'twebexam1', 'nome' => 'Luigi', 'cognome' => 'Verdi', 'genere' =>'M' , 'dataNascita' => '1997-05-20','email' => 'luigiverdi1@gmail.com', 'telefono' => '3474294523'],
            ['username' => 'UC0004', 'password' => 'twebexam3', 'nome' => 'Walter', 'cognome' => 'White', 'genere' =>'M' , 'dataNascita' => '1985-01-01','email' => 'walterw1@gmail.com', 'telefono' => '3330548364'],
            ['username' => 'UC0005', 'password' => 'twebexam4', 'nome' => 'Edoardo', 'cognome' => 'Giusti', 'genere' =>'M' , 'dataNascita' => '1999-07-03','email' => 'edoardog1@gmail.com', 'telefono' => '3001234567'],
            ['username' => 'US0001', 'password' => 'abdce', 'nome' => 'Luca', 'cognome' => 'Traini', 'genere' =>'M' , 'dataNascita' => '1996-11-11','email' => "lucatorelli@gmail.com", 'telefono' => "3333333333"],
            ['username' => 'US0002', 'password' => 'ddddd', 'nome' => 'Franca', 'cognome' => 'Marchi', 'genere' =>'F' , 'dataNascita' => '1990-02-25','email' => "francamarchi@outlook.it", 'telefono' => "3200232443"],
            ['username' => 'US0003', 'password' => 'eeeee', 'nome' => 'Alessio', 'cognome' => 'Romagnoli', 'genere' =>'M' , 'dataNascita' => '1985-12-12','email' => "alessioromagnoli@libero.it", 'telefono' => "3453245322"],
            ['username' => 'US0004', 'password' => 'fffff', 'nome' => 'Luigi', 'cognome' => 'Verdi', 'genere' =>'M' , 'dataNascita' => '1970-06-24','email' => "luigiverdi@gmail.com", 'telefono' => "3324532456"],
            ['username' => 'US0005', 'password' => 'aaaaa', 'nome' => 'Edoardo', 'cognome' => 'Giusti', 'genere' =>'M' , 'dataNascita' => '1987-04-04','email' => "edoardogiusti@libero.it", 'telefono' => "338872454"],
            ['username' => 'UA0001', 'password' => 'admin', 'nome' => 'Giansimone', 'cognome' => 'Cesari', 'genere' =>'M' , 'dataNascita' => '1985-07-02','email' => "giansimonecesari@gmail.com", 'telefono' => "334323455"]
            

        ]);
    }
}
