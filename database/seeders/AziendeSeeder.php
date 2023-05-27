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
                'ragSoc' => "SRL", 'image' => 'coal.png', 'tipologia' => "alimentare", 'descAzienda' => 'COAL, acronimo di CO (commissionaria) AL (alimentaristi) è una società cooperativa attiva nella grande distribuzione organizzata (catena di supermercati) del Centro Italia fin dagli anni 60.','utente' => "7"],
            ['nome' => "Coop", 'localizzazione' => "Roma",
                'ragSoc' => "SRL", 'image' => 'Coop.png', 'tipologia' => "alimentare", 'descAzienda' => 'Coop Italia è un sistema di cooperative italiane che comprende una rete di superette, supermercati e ipermercati. Il marchio è attribuito alle cooperative di consumatori consociate a Coop Italia, a sua volta aderente alla Lega nazionale cooperative e mutue.','utente' => "11"],
            ['nome' => "Lego", 'localizzazione' => "Milano",
                'ragSoc' => "SPA", 'image' => 'lego.png', 'tipologia' => "giocattoli", 'descAzienda' => "The Lego Group (il cui marchio viene spesso reso graficamente come LEGO) è un'azienda danese produttrice di giocattoli fondata nel 1932 da Ole Kirk Christiansen;",'utente' => "10"],
            ['nome' => "Huawei", 'localizzazione' => "China",
                'ragSoc' => "SRL", 'image' => 'Huawei.png', 'tipologia' => "elettronica", 'descAzienda' => "Huawei Technologies Co. Ltd. , comunemente nota come Huawei, è una società cinese impegnata nello sviluppo, produzione e commercializzazione di prodotti, di sistemi e di soluzioni di rete e telecomunicazioni, smartphones ed elettronica di consumo generale. ",'utente' => "9"],
            ['nome' => "Samsung", 'localizzazione' => "Corea",
                'ragSoc' => "SPA", 'image' => 'samsung.png', 'tipologia' => "elettronica", 'descAzienda' => "La Samsung Electronics Co., Ltd. è una società di elettronica multinazionale sudcoreana con sede a Suwon, in Corea del Sud, tra i maggiori produttori mondiali nel settore dell'elettronica di consumo e degli elettrodomestici.",'utente' => "10"],
            ['nome' => "Vans", 'localizzazione' => "New York",
                'ragSoc' => "SPA", 'image' => 'Vans.png', 'tipologia' => "abbigliamento", 'descAzienda' => "La Van Doren Rubber Company, meglio conosciuta come Vans, è una fabbrica di scarpe da skate statunitense fondata il 16 marzo 1966 da Paul Van Doren, Gordon C. Lee, James Van Doren e Serge D'Elia.",'utente' => "7"],
            ['nome' => "Timberland", 'localizzazione' => "New York",
                'ragSoc' => "SPA", 'image' => 'Timberland.png', 'tipologia' => "abbigliamento", 'descAzienda' => "The Timberland Company è una azienda statunitense di abbigliamento prevalentemente impegnata nella produzione di calzature. Le scarpe Timberland sono famose per il loro uso nel trekking e nell'abbigliamento casual. Vengono inoltre prodotti sotto il marchio Timberland vestiti, orologi e oggetti di cuoio e di pelle",'utente' => "7"],
            ['nome' => "Hasbro", 'localizzazione' => "Rhode Island",
                'ragSoc' => "SPA", 'image' => 'hasbro.png', 'tipologia' => "giocattoli", 'descAzienda' => "Hasbro è una casa editrice statunitense di giochi e giocattoli. Terza più grande società produttrice di giocattoli al mondo, dietro solo a Mattel e al colosso LEGO, la sua produzione è quasi totalmente delocalizzata in Oriente.",'utente' => "8"],
            ['nome' => "Puma", 'localizzazione' => "Germania",
                'ragSoc' => "SPA", 'image' => 'puma.png', 'tipologia' => "abbigliamento", 'descAzienda' => "Puma è un’azienda tedesca di diritto europeo attiva nel campo dell'abbigliamento e dell'equipaggiamento sportivo. Fondata nel 1948 a Herzogenaurach, è insieme alla compatriota Adidas uno dei più noti marchi nel mondo dello sport, ed è fornitrice tecnica di numerosi consorzi di club e squadre nazionali di calcio.",'utente' => "8"]
        ]);
        
        

    }
}
