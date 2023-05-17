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
        DB::table('offerte')->insert([
            ['oggettoOff' => 'Coupon 20% usufruibile presso il banco salumi', 'modalita' => 'Online', 'tempoFruiz' => '2023-05-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '3x2', 'logoOff' => 'Conad-salumi.png','azienda' => '1', 'utente' => 'US0001'],
            ['oggettoOff' => 'Coupon 3x2 prendi tre e paghi due', 'modalita' => 'Online', 'tempoFruiz' => '2023-09-13', 'luogoFruiz' => 'Bologna', 'nomeOff' => 'tutto 20', 'logoOff' => 'Coal-latte.png','azienda' => '5', 'utente' => 'US0002'],
            ['oggettoOff' => 'Coupon 15% da applicare nel reparto calzature', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-11-13', 'luogoFruiz' => 'Milano', 'nomeOff' => '-30', 'logoOff' => 'Nike-calzature.png','azienda' => '2', 'utente' => 'US0003'],
            ['oggettoOff' => 'Coupon 10% da applicare sul saldo finale abbigliamento', 'modalita' => 'Online', 'tempoFruiz' => '2023-12-25', 'luogoFruiz' => 'Roma', 'nomeOff' => '20%', 'logoOff' => 'Adidas-abbigliamento.png','azienda' => '3', 'utente' => 'US0004'],
            ['oggettoOff' => 'Coupon 20% applicabile in cassa su prodotti del reparto casa', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-30', 'luogoFruiz' => 'Genova', 'nomeOff' => 'x4', 'logoOff' => 'SiConTe-casa.png','azienda' => '4', 'utente' => 'US0005']
        ]);
        
    }
}
