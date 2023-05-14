<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buoni')->insert([
            ['codCoupon' => 'C0001', 'utenteRich' => 'UC0001', 'dataScad' => '2023-07-25 00:00', 'offPromo' => 'O0001'],
            ['codCoupon' => 'C0002', 'utenteRich' => 'UC0003', 'dataScad' => '2023-10-20 00:00', 'offPromo' => 'O0002'],
            ['codCoupon' => 'C0003', 'utenteRich' => 'UC0002', 'dataScad' => '2023-08-25 00:00', 'offPromo' => 'O0003'],
            ['codCoupon' => 'C0004', 'utenteRich' => 'UC0004', 'dataScad' => '2023-11-11 00:00', 'offPromo' => 'O0004'],
            ['codCoupon' => 'C0005', 'utenteRich' => 'UC0005', 'dataScad' => '2023-10-10 00:00', 'offPromo' => 'O0005']
        ]);
    }
}
