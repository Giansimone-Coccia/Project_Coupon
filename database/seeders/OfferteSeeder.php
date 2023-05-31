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
            ['oggettoOff' => 'Coupon 20% usufruibile presso il banco salumi', 'modalita' => 'Online', 'tempoFruiz' => '2023-05-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '3x2', 'logoOff' => 'Conad-salumi.png', 'stato'=>'1', 'azienda' => '1', 'utente' => '1'],
            ['oggettoOff' => 'Coupon 3x2 prendi tre e paghi due', 'modalita' => 'Online', 'tempoFruiz' => '2023-09-13', 'luogoFruiz' => 'Bologna', 'nomeOff' => 'tutto 20', 'logoOff' => 'Coal-latte.png','stato'=>'1','azienda' => '5', 'utente' => '2'],
            ['oggettoOff' => 'Coupon 15% da applicare nel reparto calzature', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-11-13', 'luogoFruiz' => 'Milano', 'nomeOff' => '-30', 'logoOff' => 'Nike-calzature.png','stato'=>'1','azienda' => '2', 'utente' => '3'],
            ['oggettoOff' => 'Coupon 10% da applicare sul saldo finale abbigliamento', 'modalita' => 'Online', 'tempoFruiz' => '2023-12-25', 'luogoFruiz' => 'Roma', 'nomeOff' => '20%', 'logoOff' => 'Adidas-abbigliamento.png','stato'=>'1','azienda' => '3', 'utente' => '4'],
            ['oggettoOff' => 'Coupon 20% applicabile in cassa su prodotti del reparto casa', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-30', 'luogoFruiz' => 'Genova', 'nomeOff' => 'x4', 'logoOff' => 'SiConTe-casa.png','stato'=>'1','azienda' => '4', 'utente' => '5'],
            ['oggettoOff' => 'Coupon 10% da applicare sul saldo finale', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-10-21', 'luogoFruiz' => 'Ancona', 'nomeOff' => '10% off', 'logoOff' => 'scuola.png','stato'=>'1','azienda' => '2', 'utente' => '1'],
            ['oggettoOff' => 'Coupon 15% da applicare sul sito ufficiale Samsung.it', 'modalita' => 'Online', 'tempoFruiz' => '2023-09-11', 'luogoFruiz' => 'Ancona', 'nomeOff' => '15% Web', 'logoOff' => 'samsung offerta.png','stato'=>'1','azienda' => '9', 'utente' => '2'],
            ['oggettoOff' => 'Coupon 20% da applicare sul sito ufficiale Samsung.it', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-25', 'luogoFruiz' => 'Milano', 'nomeOff' => '20% Web', 'logoOff' => 'tablet samsung.png','stato'=>'1','azienda' => '9', 'utente' => '3'],
            ['oggettoOff' => 'Coupon 3x2 prendi tre e paghi due su tutti i prodotti Samsung', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-04-20', 'luogoFruiz' => 'Venezia', 'nomeOff' => '3x2 Samsung', 'logoOff' => 'tablet samsung.png','stato'=>'1','azienda' => '9', 'utente' => '4'],
            ['oggettoOff' => 'Coupon 3x2 prendi tre e paghi due su smartphone e tablet', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-07-17', 'luogoFruiz' => 'Bari', 'nomeOff' => '3x2 Mobile', 'logoOff' => 'samsung offerta.png','stato'=>'1','azienda' => '9', 'utente' => '5'],
            
        ]); //lego 7, huawei 8, samsung 9, vans 10, timberland 11
        
    }
}
