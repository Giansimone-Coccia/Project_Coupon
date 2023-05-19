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
            ['codCoupon' => 'C0005', 'utenteRich' => '5', 'dataScad' => '2023-10-10 00:00', 'offPromo' => '5']
        ]);
    }
}
