<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coupons')->insert([
            ['codCoupon' => 'C0001', 'utenteRich' => 'Mario Rossi', 'modFruiz' => 'Negozio fisico', 'descProdOff' => 'Coupon 20% usufruibile presso il banco salumi', 'dataScad' => '2023-07-25 00:00', 'offPromo' => 'O0001', 'utente' => 'US001', 'azienda' => 'Conad superstore'],
            ['codCoupon' => 'C0002', 'utenteRich' => 'Luigi Verdi', 'modFruiz' => 'Negozio fisico', 'descProdOff' => 'Coupon 3x2 prendi tre e paghi due', 'dataScad' => '2023-10-20 00:00', 'offPromo' => 'O0002', 'utente' => 'US002', 'azienda' => 'Coal'],
            ['codCoupon' => 'C0003', 'utenteRich' => 'Laura Bianchi', 'modFruiz' => 'Negozio online', 'descProdOff' => 'Coupon 15% da applicare nel reparto calzature', 'dataScad' => '2023-08-25 00:00', 'offPromo' => 'O0003', 'utente' => 'US003', 'azienda' => 'Nike'],
            ['codCoupon' => 'C0004', 'utenteRich' => 'Walter White', 'modFruiz' => 'Negozio online', 'descProdOff' => 'Coupon x2 da applicare sul saldo finale', 'dataScad' => '2023-11-11 00:00', 'offPromo' => 'O0004', 'utente' => 'US004', 'azienda' => 'Adidas'],
            ['codCoupon' => 'C0005', 'utenteRich' => 'Edoardo Giusti', 'modFruiz' => 'Negozio fisico', 'descProdOff' => 'Coupon 20% applicabile in cassa su prodotti del reparto casa', 'dataScad' => '2023-10-10 00:00', 'offPromo' => 'O0005', 'utente' => 'US005', 'azienda' => 'Si con te']
        ]);
    }
}
