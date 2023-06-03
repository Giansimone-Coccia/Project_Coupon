<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferteSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('offerte')->insert([
            ['oggettoOff' => 'Coupon che garantisce il 20% di sconto sullo schermo HUAWEI MateView GT 27 Monitor Ultra-Wide con elevata frequenza di aggiornamento.', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-05-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '20% di sconto', 'logoOff' => 'schermo3huawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => "Coupon che garantisce il 10% di sconto sull'orologio HUAWEI WATCH 3 PRO", 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '10% di sconto', 'logoOff' => 'orologiohuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 30% di sconto sul telefono HUAWEI NOVA 3i Huawei P20 Pro', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-11-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '30% di sconto', 'logoOff' => 'telefonohuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 40% di sconto sul computer HUAWEI MateBook X Pro 2021', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-25', 'luogoFruiz' => 'Ancona', 'nomeOff' => '40% di sconto', 'logoOff' => 'computerhuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 50% di sconto sul telefono HUAWEI nova 2 Plus', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-30', 'luogoFruiz' => 'Ancona', 'nomeOff' => '50% di sconto', 'logoOff' => 'telefonihuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 20% di sconto sullo schermo HUAWEI MateView 23', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-10-21', 'luogoFruiz' => 'Ancona', 'nomeOff' => '20% di sconto', 'logoOff' => 'mateviewschermohuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 30% di sconto sul telefono HUAWEI P60 Pro Black 12GB+512GB', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-11', 'luogoFruiz' => 'Ancona', 'nomeOff' => '30% di sconto', 'logoOff' => 'huaweitelefono4.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => "Coupon che garantisce il 20% di sconto sull'orologio HUAWEI WATCH Ultimate 48mm Voyage Blue", 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-25', 'luogoFruiz' => 'Ancona', 'nomeOff' => '20% di sconto', 'logoOff' => 'orologi3huawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 10% di sconto sul telefono HUAWEI P20 Lite', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-04-20', 'luogoFruiz' => 'Ancona', 'nomeOff' => '10% di sconto', 'logoOff' => 'telefono2huawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 50% di sconto sullo schermo HUAWEI MateView GT 34-inch', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-07-17', 'luogoFruiz' => 'Ancona', 'nomeOff' => '50% di sconto', 'logoOff' => 'schermohuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 10% di sconto su tutti gli iPhone', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-05-20', 'luogoFruiz' => 'Ancona', 'nomeOff' => '10% di sconto', 'logoOff' => 'appleiphone14.png', 'stato' => '1', 'azienda' => '5', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 15% di sconto su tutti i Macbook', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-07-21', 'luogoFruiz' => 'Ancona', 'nomeOff' => '15% di sconto', 'logoOff' => 'applemacbookpro.png', 'stato' => '1', 'azienda' => '5', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 25% di sconto su tutti i laptop Dell', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-25', 'luogoFruiz' => 'Roma', 'nomeOff' => '25% di sconto', 'logoOff' => 'delllaptop.png', 'stato' => '1', 'azienda' => '9', 'utente' => '10'],
            ['oggettoOff' => 'Coupon che garantisce il 5% di sconto su tutte le lavatrici lg', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-07-21', 'luogoFruiz' => 'Ancona', 'nomeOff' => '5% di sconto', 'logoOff' => 'lglavatrice.png', 'stato' => '1', 'azienda' => '7', 'utente' => '10'],
            ['oggettoOff' => 'Coupon che garantisce il 17% di sconto su tutti i monitor ultragear di LG', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-10-05', 'luogoFruiz' => 'Milano', 'nomeOff' => '17% di sconto', 'logoOff' => 'lgultragearoled.png', 'stato' => '1', 'azienda' => '7', 'utente' => '10'],
            ['oggettoOff' => 'Coupon che garantisce il 3x2 su tutti i telefoni Nokia 4310', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-05', 'luogoFruiz' => 'Torino', 'nomeOff' => 'offerta 3x2', 'logoOff' => 'nokia4310.png', 'stato' => '1', 'azienda' => '12', 'utente' => '8'],
            ['oggettoOff' => 'Coupon che garantisce il 7% di sconto sul cellulare Oppo find x 3 pro', 'modalita' => 'In negozio', 'tempoFruiz' => '2024-12-05', 'luogoFruiz' => 'Macerata', 'nomeOff' => '7% di sconto', 'logoOff' => 'oppofindx3pro.png', 'stato' => '1', 'azienda' => '13', 'utente' => '8'],
            ['oggettoOff' => 'Coupon che garantisce il 12% di sconto su tutta la gamma xiaomi 13', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-07', 'luogoFruiz' => 'Torino', 'nomeOff' => '12% di sconto', 'logoOff' => 'xiaomi13.png', 'stato' => '1', 'azienda' => '14', 'utente' => '8'],
            ['oggettoOff' => 'Coupon che garantisce il 21% di sconto su tutta la gamma xiaomi 12', 'modalita' => 'In negozio', 'tempoFruiz' => '2024-01-05', 'luogoFruiz' => 'Bologna', 'nomeOff' => '21% di sconto', 'logoOff' => 'xiaomi12pro.png', 'stato' => '1', 'azienda' => '14', 'utente' => '8'],
        ]);
    }

}
