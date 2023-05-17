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
            ['promoAbb' => '1', 'offertaPromo' => '1'],
            ['promoAbb' => '2', 'offertaPromo' => '2'],
            ['promoAbb' => '3', 'offertaPromo' => '3'],
            ['promoAbb' => '4', 'offertaPromo' => '4'],
            ['promoAbb' => '5', 'offertaPromo' => '5']
        ]);
    }
}
