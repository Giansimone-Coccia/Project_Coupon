<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromozioniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promozioni')->insert([
            ['id' => '1', 'codOff' => '1', 'dataScad' => '2023-07-25 00:00', 'percSconto' => 10, 'utente' => 'US0001'],
            ['id' => '2', 'codOff' => '2', 'dataScad' => '2023-09-14 00:00', 'percSconto' => 10, 'utente' => 'US0003'],
            ['id' => '3', 'codOff' => '3', 'dataScad' => '2023-10-19 00:00', 'percSconto' => 17, 'utente' => 'US0002'],
            ['id' => '4', 'codOff' => '4', 'dataScad' => '2023-12-22 00:00', 'percSconto' => 20, 'utente' => 'US0004'],
            ['id' => '5', 'codOff' => '5', 'dataScad' => '2023-02-06 00:00', 'percSconto' => 15, 'utente' => 'US0005']
        ]);
    }
}
