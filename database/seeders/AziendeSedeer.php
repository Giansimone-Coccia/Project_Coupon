<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AziendeSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('faqs')->insert([
            ['codiceA' => "A0001", 'nome' => "Conad Superstore", 'localizzazione' => " Via Michelino, 59 BOLOGNA ",
                'ragSoc' => "SPA", 'image' => 'conad.png', 'tipologia' => "multi-prodotto", 'descAzienda' => 'Conad è una società cooperativa attiva nella grande distribuzione organizzata. Con sede centrale a Bologna, è formata attualmente da 5 cooperative di dettaglianti e attraverso di esse opera in tutte le regioni italiane.','utente' => "US0002"],
            ['codiceA' => "A0002", 'nome' => "Nike", 'localizzazione' => "Via emilia,88 ROMA",
                'ragSoc' => "Public Company", 'image' => 'nike.png', 'tipologia' => "abbigliamento", 'descAzienda' => 'Nike, Inc. è una multinazionale statunitense che produce calzature, abbigliamento e accessori sportivi.','utente' => "US0005"],
            ['codiceA' => "A0003", 'nome' => "Adidas", 'localizzazione' => "Via del commercio, 23 ROMA",
                'ragSoc' => "SPA", 'image' => 'adidas.png', 'tipologia' => "abbigliamento", 'descAzienda' => 'Adidas produce calzature, abbigliamento e altri articoli sportivi, per attività professionale, dilettantistica o per il tempo libero.','utente' => "US0003"], 
            ['codiceA' => "A0004", 'nome' => "Si con te", 'localizzazione' => "Via bartolo, 5 ANCONA",
                'ragSoc' => "2023-04-24 17:15", 'image' => 'Si_con_te.png', 'tipologia' => "2023-04-24 17:15", 'descAzienda' => 'Si con te è il tuo supermercato Ancona e provincia di fiducia, prodotti sempre freschi con un grande assortimento e offerte ogni giorno.','utente' => "US0002"],
            ['codiceA' => "A0005", 'nome' => "Coal", 'localizzazione' => "Piazzale Loreto ANCONA",
                'ragSoc' => "SRL", 'image' => 'coal.png', 'tipologia' => "alimentare", 'descAzienda' => 'COAL, acronimo di CO (commissionaria) AL (alimentaristi) è una società cooperativa attiva nella grande distribuzione organizzata (catena di supermercati) del Centro Italia fin dagli anni 60.','utente' => "US0001"]
            
        ]);
        
        

    }
}
