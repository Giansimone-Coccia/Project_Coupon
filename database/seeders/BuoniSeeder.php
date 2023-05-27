<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buoni')->insert([
            ['codCoupon' => 'C0001', 'utenteRich' => '1', 'dataScad' => '2023-07-25 00:00', 'offPromo' => '1'],
            ['codCoupon' => 'C0002', 'utenteRich' => '3', 'dataScad' => '2023-10-20 00:00', 'offPromo' => '2'],
            ['codCoupon' => 'C0003', 'utenteRich' => '2', 'dataScad' => '2023-08-25 00:00', 'offPromo' => '3'],
            ['codCoupon' => 'C0004', 'utenteRich' => '4', 'dataScad' => '2023-11-11 00:00', 'offPromo' => '4'],
            ['codCoupon' => 'C0005', 'utenteRich' => '5', 'dataScad' => '2023-10-10 00:00', 'offPromo' => '5'],
            ['codCoupon' => 'C0006', 'utenteRich' => '1', 'dataScad' => '2023-05-25 00:00', 'offPromo' => '6'],
            ['codCoupon' => 'C0007', 'utenteRich' => '3', 'dataScad' => '2023-07-20 00:00', 'offPromo' => '7'],
            ['codCoupon' => 'C0008', 'utenteRich' => '2', 'dataScad' => '2023-02-25 00:00', 'offPromo' => '8'],
            ['codCoupon' => 'C0009', 'utenteRich' => '4', 'dataScad' => '2023-01-01 00:00', 'offPromo' => '1'],
            ['codCoupon' => 'C0010', 'utenteRich' => '5', 'dataScad' => '2023-10-10 00:00', 'offPromo' => '2'],
            ['codCoupon' => 'C0011', 'utenteRich' => '1', 'dataScad' => '2023-07-30 00:00', 'offPromo' => '3'],
            ['codCoupon' => 'C0012', 'utenteRich' => '3', 'dataScad' => '2023-04-20 00:00', 'offPromo' => '4'],
            ['codCoupon' => 'C0013', 'utenteRich' => '2', 'dataScad' => '2023-06-29 00:00', 'offPromo' => '5'],
            ['codCoupon' => 'C0014', 'utenteRich' => '4', 'dataScad' => '2023-11-13 00:00', 'offPromo' => '6'],
            ['codCoupon' => 'C0015', 'utenteRich' => '5', 'dataScad' => '2023-10-08 00:00', 'offPromo' => '7'],
            ['codCoupon' => 'C0016', 'utenteRich' => '1', 'dataScad' => '2023-07-22 00:00', 'offPromo' => '8'],
            ['codCoupon' => 'C0017', 'utenteRich' => '3', 'dataScad' => '2023-05-20 00:00', 'offPromo' => '1'],
            ['codCoupon' => 'C0018', 'utenteRich' => '2', 'dataScad' => '2023-08-15 00:00', 'offPromo' => '2'],
            ['codCoupon' => 'C0019', 'utenteRich' => '4', 'dataScad' => '2023-11-19 00:00', 'offPromo' => '3'],
            ['codCoupon' => 'C0020', 'utenteRich' => '5', 'dataScad' => '2023-03-10 00:00', 'offPromo' => '4'],
            ['codCoupon' => 'C0021', 'utenteRich' => '1', 'dataScad' => '2023-07-22 00:00', 'offPromo' => '5'],
            ['codCoupon' => 'C0022', 'utenteRich' => '3', 'dataScad' => '2023-05-27 00:00', 'offPromo' => '6'],
            ['codCoupon' => 'C0023', 'utenteRich' => '2', 'dataScad' => '2023-08-19 00:00', 'offPromo' => '7'],
            ['codCoupon' => 'C0024', 'utenteRich' => '4', 'dataScad' => '2023-11-30 00:00', 'offPromo' => '8'],
            ['codCoupon' => 'C0025', 'utenteRich' => '5', 'dataScad' => '2023-03-10 00:00', 'offPromo' => '10']
        ]);
    }
}
