<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offerte')->insert([ //tempoFruizione espresso in num di settimane
            ['codOfferta' => 'O0001', 'oggettoOff' => 'Conad 3x2', 'modalita' => 'Online', 'tempoFruiz' => '2', 'luogoFruiz' => 'Ancona', 'nomeOff' => '3x2', 'logoOff' => 'Conad.png','azienda' => 'Conad', 'utente' => 'US001'],
            ['codOfferta' => 'O0002', 'oggettoOff' => 'Coal tutto 20', 'modalita' => 'Online', 'tempoFruiz' => '1', 'luogoFruiz' => 'Bologna', 'nomeOff' => 'tutto 20', 'logoOff' => 'Coal.png','azienda' => 'Coal', 'utente' => 'US002'],
            ['codOfferta' => 'O0003', 'oggettoOff' => 'Nike -30', 'modalita' => 'In negozio', 'tempoFruiz' => '3', 'luogoFruiz' => 'Milano', 'nomeOff' => '-30', 'logoOff' => 'Nike.png','azienda' => 'Nike', 'utente' => 'US003'],
            ['codOfferta' => 'O0004', 'oggettoOff' => 'Adidas 20%', 'modalita' => 'Online', 'tempoFruiz' => '4', 'luogoFruiz' => 'Roma', 'nomeOff' => '20%', 'logoOff' => 'Adidas.png','azienda' => 'Adidas', 'utente' => 'US004'],
            ['codOfferta' => 'O0005', 'oggettoOff' => 'Si con te x4', 'modalita' => 'In negozio', 'tempoFruiz' => '2', 'luogoFruiz' => 'Genova', 'nomeOff' => 'x4', 'logoOff' => 'SiConTe.png','azienda' => 'Si con te', 'utente' => 'US005']
        ]);
    }
}
