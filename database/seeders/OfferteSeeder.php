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
            ['oggettoOff' => 'Coupon che garantisce il 20% di sconto sul prezzo dello schermo HUAWEI MateView GT 27 Monitor Ultra-Wide con elevata frequenza di aggiornamento.', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-05-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '20% di sconto', 'logoOff' => 'schermo3huawei.png', 'stato'=>'1', 'azienda' => '1', 'utente' => '1'],
            ['oggettoOff' => "Coupon che garantisce il 10% di sconto sul prezzo dell'orologio HUAWEI WATCH 3 PRO", 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '10% di sconto', 'logoOff' => 'orologiohuawei.png','stato'=>'1','azienda' => '1', 'utente' => '2'],
            ['oggettoOff' => 'Coupon che garantisce il 30% di sconto sul prezzo del telefono HUAWEI NOVA 3i Huawei P20 Pro', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-11-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '30% di sconto', 'logoOff' => 'telefonohuawei.png','stato'=>'1','azienda' => '1', 'utente' => '3'],
            ['oggettoOff' => 'Coupon che garantisce il 40% di sconto sul prezzo del computer HUAWEI MateBook X Pro 2021', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-25', 'luogoFruiz' => 'Ancona', 'nomeOff' => '40% di sconto', 'logoOff' => 'computerhuawei.png','stato'=>'1','azienda' => '1', 'utente' => '4'],
            ['oggettoOff' => 'Coupon che garantisce il 50% di sconto sul prezzo del telefono HUAWEI nova 2 Plus', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-30', 'luogoFruiz' => 'Ancona', 'nomeOff' => '50% di sconto', 'logoOff' => 'telefonihuawei.png','stato'=>'1','azienda' => '1', 'utente' => '5'],
            ['oggettoOff' => 'Coupon che garantisce il 20% di sconto sul prezzo dello schermo HUAWEI MateView 23', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-10-21', 'luogoFruiz' => 'Ancona', 'nomeOff' => '20% di sconto', 'logoOff' => 'mateviewschermo.png','stato'=>'1','azienda' => '1', 'utente' => '1'],
            ['oggettoOff' => 'Coupon che garantisce il 30% di sconto sul prezzo del telefono HUAWEI P60 Pro Black 12GB+512GB', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-11', 'luogoFruiz' => 'Ancona', 'nomeOff' => '30% di sconto', 'logoOff' => 'huaweitelefono4.png','stato'=>'1','azienda' => '1', 'utente' => '2'],
            ['oggettoOff' => "Coupon che garantisce il 20% di sconto sul prezzo dell'orologio HUAWEI WATCH Ultimate 48mm Voyage Blue", 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-25', 'luogoFruiz' => 'Ancona', 'nomeOff' => '20% di sconto', 'logoOff' => 'orologi3huawei.png','stato'=>'1','azienda' => '1', 'utente' => '3'],
            ['oggettoOff' => 'Coupon che garantisce il 10% di sconto sul prezzo del telefono HUAWEI P20 Lite', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-04-20', 'luogoFruiz' => 'Ancona', 'nomeOff' => '10% di sconto', 'logoOff' => 'telefono2huawei.png','stato'=>'1','azienda' => '1', 'utente' => '4'],
            ['oggettoOff' => 'Coupon che garantisce il 50% di sconto sul prezzo dello schermo HUAWEI MateView GT 34-inch', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-07-17', 'luogoFruiz' => 'Ancona', 'nomeOff' => '50% di sconto', 'logoOff' => 'schermohuawei.png','stato'=>'1','azienda' => '1', 'utente' => '5'],
            
        ]);
        
    }
}
