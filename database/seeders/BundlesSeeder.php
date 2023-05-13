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
            ['promoAbb' => 'AB001', 'offertaPromo' => 'O0001'],
            ['promoAbb' => 'AB002', 'offertaPromo' => 'O0002'],
            ['promoAbb' => 'AB003', 'offertaPromo' => 'O0003'],
            ['promoAbb' => 'AB004', 'offertaPromo' => 'O0004'],
            ['promoAbb' => 'AB005', 'offertaPromo' => 'O0005']
        ]);
    }
}
