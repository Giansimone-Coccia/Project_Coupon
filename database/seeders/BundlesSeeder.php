<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BundlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bundles')->insert([
            ['promoAbb' => 'P0001', 'offertaPromo' => 'O0001'],
            ['promoAbb' => 'P0002', 'offertaPromo' => 'O0002'],
            ['promoAbb' => 'P0003', 'offertaPromo' => 'O0003'],
            ['promoAbb' => 'P0004', 'offertaPromo' => 'O0004'],
            ['promoAbb' => 'P0005', 'offertaPromo' => 'O0005'],
            ['promoAbb' => 'P0006', 'offertaPromo' => 'O0006']
        ]);
    }
}
