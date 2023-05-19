<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AziendeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('aziende')->insert([
            ['nome' => "Conad Superstore", 'localizzazione' => " Via Michelino, 59 BOLOGNA ",
                'ragSoc' => "SPA", 'image' => 'conad.png', 'tipologia' => "multi-prodotto", 'descAzienda' => 'Conad è una società cooperativa attiva nella grande distribuzione organizzata. Con sede centrale a Bologna, è formata attualmente da 5 cooperative di dettaglianti e attraverso di esse opera in tutte le regioni italiane.','utente' => "7"],
            ['nome' => "Nike", 'localizzazione' => "Via emilia,88 ROMA",
                'ragSoc' => "SRL", 'image' => 'nike.png', 'tipologia' => "abbigliamento", 'descAzienda' => 'Nike, Inc. è una multinazionale statunitense che produce calzature, abbigliamento e accessori sportivi.','utente' => "8"],
            ['nome' => "Adidas", 'localizzazione' => "Via del commercio, 23 ROMA",
                'ragSoc' => "SPA", 'image' => 'adidas.png', 'tipologia' => "abbigliamento", 'descAzienda' => 'Adidas produce calzature, abbigliamento e altri articoli sportivi, per attività professionale, dilettantistica o per il tempo libero.','utente' => "9"], 
            ['nome' => "Si con te", 'localizzazione' => "Via bartolo, 5 ANCONA",
                'ragSoc' => "SPA", 'image' => 'Si_con_te.png', 'tipologia' => "alimentare", 'descAzienda' => 'Si con te è il tuo supermercato Ancona e provincia di fiducia, prodotti sempre freschi con un grande assortimento e offerte ogni giorno.','utente' => "10"],
            ['nome' => "Coal", 'localizzazione' => "Piazzale Loreto ANCONA",
                'ragSoc' => "SRL", 'image' => 'coal.png', 'tipologia' => "alimentare", 'descAzienda' => 'COAL, acronimo di CO (commissionaria) AL (alimentaristi) è una società cooperativa attiva nella grande distribuzione organizzata (catena di supermercati) del Centro Italia fin dagli anni 60.','utente' => "7"]
            
        ]);
        
        

    }
}
