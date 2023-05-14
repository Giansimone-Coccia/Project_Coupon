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
            ['codOfferta' => 'O0001', 'oggettoOff' => 'Coupon 20% usufruibile presso il banco salumi', 'modalita' => 'Online', 'tempoFruiz' => '2 mesi', 'luogoFruiz' => 'Ancona', 'nomeOff' => '3x2', 'logoOff' => 'Conad-salumi.png','azienda' => 'A0001', 'utente' => 'US0001'],
            ['codOfferta' => 'O0002', 'oggettoOff' => 'Coupon 3x2 prendi tre e paghi due', 'modalita' => 'Online', 'tempoFruiz' => '1 mese', 'luogoFruiz' => 'Bologna', 'nomeOff' => 'tutto 20', 'logoOff' => 'Coal-latte.png','azienda' => 'A0005', 'utente' => 'US0002'],
            ['codOfferta' => 'O0003', 'oggettoOff' => 'Coupon 15% da applicare nel reparto calzature', 'modalita' => 'In negozio', 'tempoFruiz' => '3', 'luogoFruiz' => 'Milano', 'nomeOff' => '-30', 'logoOff' => 'Nike-calzature.png','azienda' => 'A0002', 'utente' => 'US0003'],
            ['codOfferta' => 'O0004', 'oggettoOff' => 'Coupon 10% da applicare sul saldo finale abbigliamento', 'modalita' => 'Online', 'tempoFruiz' => '4', 'luogoFruiz' => 'Roma', 'nomeOff' => '20%', 'logoOff' => 'Adidas-abbiagliamento.png','azienda' => 'A0003', 'utente' => 'US0004'],
            ['codOfferta' => 'O0005', 'oggettoOff' => 'Coupon 20% applicabile in cassa su prodotti del reparto casa', 'modalita' => 'In negozio', 'tempoFruiz' => '2', 'luogoFruiz' => 'Genova', 'nomeOff' => 'x4', 'logoOff' => 'SiConTe-casa.png','azienda' => 'A0004', 'utente' => 'US0005']
        ]);
    }
}
