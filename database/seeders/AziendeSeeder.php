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
            ['nome' => "Huawei", 'localizzazione' => "Shenzhen, Cina",
                'ragSoc' => "SPA", 'image' => 'huawei.png', 'tipologia' => "Elettronica", 'descAzienda' => 'Huawei Technologies Co. Ltd., comunemente nota come Huawei, è una società cinese impegnata nello sviluppo, produzione e commercializzazione di prodotti, di sistemi e di soluzioni di rete e telecomunicazioni, smartphones ed elettronica di consumo generale.','utente' => "7"],
            ['nome' => "Samsung", 'localizzazione' => " Suwon, in Corea del Sud",
                'ragSoc' => "SPA", 'image' => 'samsung.png', 'tipologia' => "Elettronica", 'descAzienda' => 'La Samsung Electronics Co., Ltd. è una società di elettronica multinazionale sudcoreana con sede a Suwon, in Corea del Sud, tra i maggiori produttori mondiali nel settore dell elettronica di consumo e degli elettrodomestici.','utente' => "8"],
            ['nome' => "Hp, Hewlett-Packard", 'localizzazione' => "Stati Uniti",
                'ragSoc' => "SPA", 'image' => 'hp.png', 'tipologia' => "Elettronica", 'descAzienda' => 'Hewlett-Packard (sigla HP) è stata una multinazionale statunitense dell informatica attiva sia nel mercato dell hardware (dai personal computer ai server e, nel mercato di massa, per le stampanti per le quali è uno dei maggiori produttori mondiali) che in quello del software e dei servizi collegati all informatica.','utente' => "9"], 
            ['nome' => "Asus", 'localizzazione' => " Distretto di Beitou, Taipei, Taiwan",
                'ragSoc' => "SPA", 'image' => 'asus.png', 'tipologia' => "Elettronica", 'descAzienda' => 'ASUSTeK Computer Inc. è un azienda con sede a Taipei, Taiwan che produce schede madri, schede video, lettori ottici, palmari, portatili, telefonini, smartphone, computer, accessori per il networking come modem/router e accessori per computer.','utente' => "10"],
            ['nome' => "Apple", 'localizzazione' => "Cupertino, California, Stati Uniti",
                'ragSoc' => "SPA", 'image' => 'apple.png', 'tipologia' => "Elettronica", 'descAzienda' => 'Apple Inc. è un azienda multinazionale statunitense che produce sistemi operativi, smartphone, computer e dispositivi multimediali, con sede a Cupertino, in California. È considerata una delle società tecnologiche Big Tech, assieme ad Amazon, Google e Meta. ','utente' => "7"],
            ['nome' => "Oneplus", 'localizzazione' => "Shenzhen",
                'ragSoc' => "SPA", 'image' => 'Coop.png', 'tipologia' => "Elettronica", 'descAzienda' => 'OnePlus è un azienda cinese produttrice di smartphone di proprietà di BBK Electronics. Venne fondata il 17 dicembre 2013 da Pete Lau, precedentemente vicepresidente di Oppo. La sede centrale si trova a Shenzhen.','utente' => "11"],
            ['nome' => "LG", 'localizzazione' => "Seoul, Corea del Sud",
                'ragSoc' => "SPA", 'image' => 'lg.png', 'tipologia' => "Elettronica", 'descAzienda' => "TLG Group è un'azienda multinazionale sudcoreana fondata nel 5 gennaio 1947 da Koo In-hwoi, che produce prodotti di elettronica, telefoni cellulari e prodotti petrolchimici. Affiliata alla LG Group vi è la LG Electronics.",'utente' => "10"],
            ['nome' => "Motorola", 'localizzazione' => "Chicago, Illinois, Stati Uniti",
                'ragSoc' => "SPA", 'image' => 'motorola.png', 'tipologia' => "Elettronica", 'descAzienda' => "Motorola Inc. era un'azienda statunitense attiva nel campo dell'elettronica, fondata nel 1928 con sede a Schaumburg, Illinois, un sobborgo di Chicago con il nome di Galvin Manufacturing Corporation. Successivamente divisa in Motorola Mobility e Motorola Solutions, aziende ad oggi ancora in attività.",'utente' => "9"],
            ['nome' => "Dell", 'localizzazione' => "Round Rock, Texas, Stati Uniti",
                'ragSoc' => "SPA", 'image' => 'dell.png', 'tipologia' => "Elettronica", 'descAzienda' => "La Dell Inc. è una multinazionale statunitense, tra le più importanti al mondo nella produzione di personal computer e di sistemi informatici con sede a Round Rock, nel Texas. La Dell sviluppa, vende, ripara e supporta computer e prodotti e servizi correlati.",'utente' => "10"],
            ['nome' => "Google", 'localizzazione' => "Mountain View, California, Stati Uniti",
                'ragSoc' => "SPA", 'image' => 'google.png', 'tipologia' => "Elettronica", 'descAzienda' => "Google LLC è un'azienda informatica statunitense che offre servizi online, con quartier generale a Mountain View in California, nel cosiddetto Googleplex.",'utente' => "7"],
            ['nome' => "Amazon", 'localizzazione' => "Seattle",
                'ragSoc' => "SPA", 'image' => 'amazon.png', 'tipologia' => "Elettronica", 'descAzienda' => "Amazon.com, Inc. è un'azienda di commercio elettronico statunitense, con sede a Seattle nello stato di Washington. È la più grande Internet company al mondo.",'utente' => "7"],
            ['nome' => "Nokia", 'localizzazione' => "Espoo, Finlandia",
                'ragSoc' => "SPA", 'image' => 'nokia.png', 'tipologia' => "Elettronica", 'descAzienda' => "Nokia Corporation, o Nokia Oyj, nota più semplicemente come Nokia, è una multinazionale finlandese, produttrice di apparecchiature per telecomunicazioni.",'utente' => "8"],
            ['nome' => "Oppo", 'localizzazione' => "Dongguan, Cina",
                'ragSoc' => "SPA", 'image' => 'oppo.png', 'tipologia' => "Elettronica", 'descAzienda' => "Guangdong Oppo Mobile Telecommunications Corp., Ltd, nota più semplicemente come Oppo, è un'azienda cinese di elettronica di consumo con sede a Dongguan che produce smartphone, dispositivi audio, power bank, lettori multimediali e altri prodotti elettronici. È un importante produttore di smartphone in Cina.",'utente' => "8"],
            ['nome' => "Xiaomi", 'localizzazione' => "Distretto di Haidian, Pechino, Cina",
                'ragSoc' => "SPA", 'image' => 'xiaomi.png', 'tipologia' => "Elettronica", 'descAzienda' => "La Xiaomi Corporation, formalmente registrata come Xiaomi Inc. comunemente nota come Xiaomi è un'impresa multinazionale cinese che opera nel campo dell'elettronica di consumo, fondata in Cina nel 2010 da Lei Jun e con sede a Pechino.",'utente' => "8"]
        ]);
        
        

    }
}
