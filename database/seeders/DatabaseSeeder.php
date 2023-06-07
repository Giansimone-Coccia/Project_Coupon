<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username' => 'useruser', 'password' => Hash::make('dJ1YEtSd'), 'nome' => 'Mario', 'cognome' => 'Rossi', 'genere' => 'M', 'dataNascita' => '2001-03-17', 'email' => 'mariorossi1@gmail.com', 'telefono' => '3453454567', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0002', 'password' => Hash::make('Laura205843'), 'nome' => 'Laura', 'cognome' => 'Bianchi', 'genere' => 'F', 'dataNascita' => '2000-01-15', 'email' => 'laurabianchi1@gmail.com', 'telefono' => '3366454567', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0003', 'password' => Hash::make('Luigi304753'), 'nome' => 'Luigi', 'cognome' => 'Verdi', 'genere' => 'M', 'dataNascita' => '1997-05-20', 'email' => 'luigiverdi1@gmail.com', 'telefono' => '3474294523', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0004', 'password' => Hash::make('Walter406534'), 'nome' => 'Walter', 'cognome' => 'White', 'genere' => 'M', 'dataNascita' => '1985-01-01', 'email' => 'walterw1@gmail.com', 'telefono' => '3330548364', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0005', 'password' => Hash::make('Edoardo509574'), 'nome' => 'Edoardo', 'cognome' => 'Giusti', 'genere' => 'M', 'dataNascita' => '1999-07-03', 'email' => 'edoardog1@gmail.com', 'telefono' => '3001234567', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0006', 'password' => Hash::make('Edoardo475574'), 'nome' => 'Marco', 'cognome' => 'Gialli', 'genere' => 'M', 'dataNascita' => '1998-12-03', 'email' => 'marco@gmail.com', 'telefono' => '3002248954', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0007', 'password' => Hash::make('Lara509574'), 'nome' => 'Lara', 'cognome' => 'Benedetti', 'genere' => 'F', 'dataNascita' => '1993-07-03', 'email' => 'lara12@gmail.com', 'telefono' => '3547896522', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0008', 'password' => Hash::make('Elisa504974'), 'nome' => 'Elisa', 'cognome' => 'Cavour', 'genere' => 'F', 'dataNascita' => '1999-08-05', 'email' => 'ely78@gmail.com', 'telefono' => '3471120369', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'UC0009', 'password' => Hash::make('Manuel50314'), 'nome' => 'Manuel', 'cognome' => 'Meriti', 'genere' => 'M', 'dataNascita' => '1994-07-12', 'email' => 'manu89@gmail.com', 'telefono' => '3485712596', 'ruolo' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'staffstaff', 'password' => Hash::make('dJ1YEtSd'), 'nome' => 'Luca', 'cognome' => 'Traini', 'genere' => null, 'dataNascita' => null, 'email' => null, 'telefono' => null, 'ruolo' => 'staff', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'US0002', 'password' => Hash::make('FrancaMM12'), 'nome' => 'Franca', 'cognome' => 'Marchi', 'genere' => null, 'dataNascita' => null, 'email' => null, 'telefono' => null, 'ruolo' => 'staff', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'US0003', 'password' => Hash::make('AlessioSff32'), 'nome' => 'Alessio', 'cognome' => 'Romagnoli', 'genere' => null, 'dataNascita' => null, 'email' => null, 'telefono' => null, 'ruolo' => 'staff', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'US0004', 'password' => Hash::make('LuigiVVStaff45'), 'nome' => 'Luigi', 'cognome' => 'Verdi', 'genere' => null, 'dataNascita' => null, 'email' => null, 'telefono' => null, 'ruolo' => 'staff', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'US0005', 'password' => Hash::make('EdoardoGG12'), 'nome' => 'Edoardo', 'cognome' => 'Giusti', 'genere' => null, 'dataNascita' => null, 'email' => null, 'telefono' => null, 'ruolo' => 'staff', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'adminadmin', 'password' => Hash::make('dJ1YEtSd'), 'nome' => 'Giulio', 'cognome' => 'Cesari', 'genere' => 'M', 'dataNascita' => '1985-07-02', 'email' => "giuliocesari@gmail.com", 'telefono' => "334323455", 'ruolo' => 'admin', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")]
        ]);
        
        DB::table('aziende')->insert([
            ['nome' => "Huawei", 'localizzazione' => "Shenzhen, Cina",
                'ragSoc' => "SPA", 'image' => 'huawei.png', 'tipologia' => "Elettronica", 'descAzienda' => 'Huawei Technologies Co. Ltd., comunemente nota come Huawei, è una società cinese impegnata nello sviluppo, produzione e commercializzazione di prodotti, di sistemi e di soluzioni di rete e telecomunicazioni, smartphones ed elettronica di consumo generale.','utente' => "7"],
            ['nome' => "Samsung", 'localizzazione' => " Suwon, in Corea del Sud",
                'ragSoc' => "SPA", 'image' => 'samsung.png', 'tipologia' => "Elettronica", 'descAzienda' => 'La Samsung Electronics Co., Ltd. è una società di elettronica multinazionale sudcoreana con sede a Suwon, in Corea del Sud, tra i maggiori produttori mondiali nel settore dell elettronica di consumo e degli elettrodomestici.','utente' => "8"],
            ['nome' => "Hp", 'localizzazione' => "Stati Uniti",
                'ragSoc' => "SPA", 'image' => 'hp.png', 'tipologia' => "Elettronica", 'descAzienda' => 'Hewlett-Packard (sigla HP) è stata una multinazionale statunitense dell informatica attiva sia nel mercato dell hardware (dai personal computer ai server e, nel mercato di massa, per le stampanti per le quali è uno dei maggiori produttori mondiali) che in quello del software e dei servizi collegati all informatica.','utente' => "9"], 
            ['nome' => "Asus", 'localizzazione' => " Distretto di Beitou, Taipei, Taiwan",
                'ragSoc' => "SPA", 'image' => 'asus.png', 'tipologia' => "Elettronica", 'descAzienda' => 'ASUSTeK Computer Inc. è un azienda con sede a Taipei, Taiwan che produce schede madri, schede video, lettori ottici, palmari, portatili, telefonini, smartphone, computer, accessori per il networking come modem/router e accessori per computer.','utente' => "10"],
            ['nome' => "Apple", 'localizzazione' => "Cupertino, California, Stati Uniti",
                'ragSoc' => "SPA", 'image' => 'apple.png', 'tipologia' => "Elettronica", 'descAzienda' => 'Apple Inc. è un azienda multinazionale statunitense che produce sistemi operativi, smartphone, computer e dispositivi multimediali, con sede a Cupertino, in California. È considerata una delle società tecnologiche Big Tech, assieme ad Amazon, Google e Meta. ','utente' => "7"],
            ['nome' => "Oneplus", 'localizzazione' => "Shenzhen",
                'ragSoc' => "SPA", 'image' => 'oneplus.png', 'tipologia' => "Elettronica", 'descAzienda' => 'OnePlus è un azienda cinese produttrice di smartphone di proprietà di BBK Electronics. Venne fondata il 17 dicembre 2013 da Pete Lau, precedentemente vicepresidente di Oppo. La sede centrale si trova a Shenzhen.','utente' => "11"],
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
        
                
         DB::table('domande')->insert([
            ['domanda' => "Come posso accedere alle offerte e ai coupon sul vostro sito web?", 'risposta' => "Per accedere alle offerte e ai coupon sul nostro sito web, è necessario registrarsi e effettuare il login. Una volta autenticati, potrai visualizzare tutte le offerte disponibili.",
                'dataPub' => "2023-04-24 17:15", 'utente' => '2'],
            ['domanda' => "È necessario registrarsi per ottenere i coupon?", 'risposta' => "Sì, è necessario registrarsi sul nostro sito web per ottenere i coupon. La registrazione è gratuita e richiede solo pochi semplici passaggi.", 
                'dataPub' => "2023-05-20 15:00", 'utente' => '1'],
            ['domanda' => "Quante aziende partecipano al vostro programma di coupon?", 'risposta' => "Il nostro sito web collabora con una vasta gamma di aziende partecipanti, offrendo coupon per una varietà di prodotti. Puoi consultare l'elenco completo delle aziende nella nostra sezione Home dedicata.",
                'dataPub' => "2023-05-15 13:15", 'utente' => '3'],
            ['domanda' => 'Posso riscattare più di un coupon per lo stesso prodotto?', 'risposta' => "No, puoi riscattare un solo coupon per ciascuna offerta. Questo aiuta a garantire che il maggior numero possibile di utenti possa beneficiare delle offerte disponibili.", 
                'dataPub' => "2023-05-10 20:10", 'utente' => '4'],
            ['domanda' => 'Come posso utilizzare i coupon ottenuti? Devo stamparli o posso usarli online?', 'risposta' => "I coupon possono essere utilizzati in due modi. Puoi stampare la pagina generata dopo aver premuto il pulsante 'riscatta' e presentarla direttamente in negozio. In alternativa, alcune offerte potrebbero fornire istruzioni per riscattare il coupon online, inserendo un codice specifico durante il processo di acquisto.", 
                'dataPub' => "2023-05-04 08:30", 'utente' => '1'],
            ['domanda' => 'Dove posso trovare le istruzioni specifiche per riscattare i coupon?', 'risposta' => "Le istruzioni specifiche per riscattare i coupon sono disponibili nella pagina dei dettagli dell'offerta. Assicurati di leggere attentamente le istruzioni fornite per ogni coupon.", 
                'dataPub' => "2023-05-12 10:30", 'utente' => '5'],
            ['domanda' => 'Come faccio a modificare le mie informazioni personali sul vostro sito?', 'risposta' => "Per modificare le tue informazioni personali, accedi alla tua area personale sul nostro sito. Lì troverai un'opzione per aggiornare i tuoi dati.", 
                'dataPub' => "2023-05-27 10:30", 'utente' => '1'],
            ['domanda' => 'Posso visualizzare un elenco dei coupon che ho precedentemente riscattato?', 'risposta' => "All'interno dell'area personale, avrai accesso a un elenco completo dei coupon precedentemente riscattati. Puoi visualizzare e gestire i tuoi coupon in questa sezione.", 
                'dataPub' => "2023-03-17 11:30", 'utente' => '2'],
            ['domanda' => 'Cosa succede se un coupon non funziona?', 'risposta' => "Se un coupon non funziona, ti consigliamo di contattarci direttamente. Faremo del nostro meglio per risolvere il problema e assisterti nell'utilizzo dei coupon. ", 
                'dataPub' => "2023-08-12 12:30", 'utente' => '3'],
            ['domanda' => 'Come posso contattarvi se ho domande o problemi con i coupon?', 'risposta' => "Se hai domande o incontri problemi con i coupon, ti invitiamo a contattarci tramite la sezione contattaci che puoi trovare nel footer del sito. Il nostro team sarà lieto di aiutarti e fornirti ulteriori informazioni.", 
                'dataPub' => "2023-09-27 09:30", 'utente' => '4'],
            ['domanda' => 'Qual è la durata di validità dei coupon ottenuti sul vostro sito?', 'risposta' => "La durata di validità dei coupon può variare a seconda delle offerte e delle aziende partecipanti. Ti consigliamo di controllare la data di scadenza riportata nella pagina dei dettagli dell'offerta per assicurarti di utilizzare il coupon prima che scada.", 
                'dataPub' => "2023-11-11 11:30", 'utente' => '2'],
            ['domanda' => 'Posso condividere i coupon ottenuti con altre persone?', 'risposta' => "I coupon ottenuti sul nostro sito sono destinati all'uso personale e non possono essere condivisi con altre persone, a meno che non sia specificamente indicato nelle istruzioni dell'offerta. Ogni utente registrato può riscattare un solo coupon per ciascuna offerta. ", 
                'dataPub' => "2023-07-07 12:30", 'utente' => '5'],
            
        ]);
        
        
        DB::table('offerte')->insert([
            ['oggettoOff' => 'Coupon che garantisce il 20% di sconto sullo schermo HUAWEI MateView GT 27 Monitor Ultra-Wide con elevata frequenza di aggiornamento.', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-05-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '20% di sconto', 'logoOff' => 'schermo3huawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => "Coupon che garantisce il 10% di sconto sull'orologio HUAWEI WATCH 3 PRO", 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '10% di sconto', 'logoOff' => 'orologiohuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 30% di sconto sul telefono HUAWEI NOVA 3i Huawei P20 Pro', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-11-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '30% di sconto', 'logoOff' => 'telefonohuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 40% di sconto sul computer HUAWEI MateBook X Pro 2021', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-25', 'luogoFruiz' => 'Ancona', 'nomeOff' => '40% di sconto', 'logoOff' => 'computerhuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 50% di sconto sul telefono HUAWEI nova 2 Plus', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-30', 'luogoFruiz' => 'Ancona', 'nomeOff' => '50% di sconto', 'logoOff' => 'telefonihuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 20% di sconto sullo schermo HUAWEI MateView 23', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-10-21', 'luogoFruiz' => 'Ancona', 'nomeOff' => '20% di sconto', 'logoOff' => 'mateviewschermohuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 30% di sconto sul telefono HUAWEI P60 Pro Black 12GB+512GB', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-11', 'luogoFruiz' => 'Ancona', 'nomeOff' => '30% di sconto', 'logoOff' => 'huaweitelefono4.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => "Coupon che garantisce il 20% di sconto sull'orologio HUAWEI WATCH Ultimate 48mm Voyage Blue", 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-25', 'luogoFruiz' => 'Ancona', 'nomeOff' => '20% di sconto', 'logoOff' => 'orologi3huawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 10% di sconto sul telefono HUAWEI P20 Lite', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-04-20', 'luogoFruiz' => 'Ancona', 'nomeOff' => '10% di sconto', 'logoOff' => 'telefono2huawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 50% di sconto sullo schermo HUAWEI MateView GT 34-inch', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-07-17', 'luogoFruiz' => 'Ancona', 'nomeOff' => '50% di sconto', 'logoOff' => 'schermohuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 10% di sconto su tutti gli iPhone', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-05-20', 'luogoFruiz' => 'Ancona', 'nomeOff' => '10% di sconto', 'logoOff' => 'appleiphone14.png', 'stato' => '1', 'azienda' => '5', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 15% di sconto su tutti i Macbook', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-07-21', 'luogoFruiz' => 'Ancona', 'nomeOff' => '15% di sconto', 'logoOff' => 'applemacbookpro.png', 'stato' => '1', 'azienda' => '5', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 25% di sconto su tutti i laptop Dell', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-25', 'luogoFruiz' => 'Roma', 'nomeOff' => '25% di sconto', 'logoOff' => 'delllaptop.png', 'stato' => '1', 'azienda' => '9', 'utente' => '10'],
            ['oggettoOff' => 'Coupon che garantisce il 5% di sconto su tutte le lavatrici lg', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-07-21', 'luogoFruiz' => 'Ancona', 'nomeOff' => '5% di sconto', 'logoOff' => 'lglavatrice.png', 'stato' => '1', 'azienda' => '7', 'utente' => '10'],
            ['oggettoOff' => 'Coupon che garantisce il 17% di sconto su tutti i monitor ultragear di LG', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-10-05', 'luogoFruiz' => 'Milano', 'nomeOff' => '17% di sconto', 'logoOff' => 'lgultragearoled.png', 'stato' => '1', 'azienda' => '7', 'utente' => '10'],
            ['oggettoOff' => 'Coupon che garantisce il 3x2 su tutti i telefoni Nokia 4310', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-05', 'luogoFruiz' => 'Torino', 'nomeOff' => 'offerta 3x2', 'logoOff' => 'nokia4310.png', 'stato' => '1', 'azienda' => '12', 'utente' => '8'],
            ['oggettoOff' => 'Coupon che garantisce il 7% di sconto sul cellulare Oppo find x 3 pro', 'modalita' => 'In negozio', 'tempoFruiz' => '2024-12-05', 'luogoFruiz' => 'Macerata', 'nomeOff' => '7% di sconto', 'logoOff' => 'oppofindx3pro.png', 'stato' => '1', 'azienda' => '13', 'utente' => '8'],
            ['oggettoOff' => 'Coupon che garantisce il 12% di sconto su tutta la gamma xiaomi 13', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-07', 'luogoFruiz' => 'Torino', 'nomeOff' => '12% di sconto', 'logoOff' => 'xiaomi13.png', 'stato' => '1', 'azienda' => '14', 'utente' => '8'],
            ['oggettoOff' => 'Coupon che garantisce il 21% di sconto su tutta la gamma xiaomi 12', 'modalita' => 'In negozio', 'tempoFruiz' => '2024-01-05', 'luogoFruiz' => 'Bologna', 'nomeOff' => '21% di sconto', 'logoOff' => 'xiaomi12pro.png', 'stato' => '1', 'azienda' => '14', 'utente' => '8'],  
            ['oggettoOff' => 'Coupon che garantisce il 35% di sconto sul kindle Amazon', 'modalita' => 'Online', 'tempoFruiz' => '2023-09-17', 'luogoFruiz' => 'Store online', 'nomeOff' => '35% di sconto', 'logoOff' => 'amazonkindle.png','stato'=>'1','azienda' => '11', 'utente' => '6'],
            ['oggettoOff' => 'Coupon che garantisce il 15% di sconto sul prodotto fireTV di Amazon', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-03-17', 'luogoFruiz' => 'Store online', 'nomeOff' => '15% di sconto', 'logoOff' => 'amazonfiretv.png','stato'=>'1','azienda' => '11', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 50% di sconto su tutti i laptop Asus', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-10-22', 'luogoFruiz' => 'In tutti i negozi di Ancona', 'nomeOff' => '50% di sconto', 'logoOff' => 'asuslaptop.png','stato'=>'1','azienda' => '4', 'utente' => '8'],
            ['oggettoOff' => 'Coupon che garantisce il 20% di sconto su tutti i laptop Asus ROG', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-02', 'luogoFruiz' => 'In tutti gli store Asus nazionali', 'nomeOff' => '20% di sconto', 'logoOff' => 'asusroglaptop.png','stato'=>'1','azienda' => '4', 'utente' => '9'],
            ['oggettoOff' => 'Coupon che garantisce il 20% di sconto su tutta la gamma Pixel7 di Google', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-03', 'luogoFruiz' => 'In tutti gli store Google nazionali', 'nomeOff' => '20% di sconto', 'logoOff' => 'googlepixel7.png','stato'=>'1','azienda' => '10', 'utente' => '9'],
            ['oggettoOff' => 'Coupon che garantisce il 10% di sconto sulla gamma Pixel7 Pro di Google', 'modalita' => 'Online', 'tempoFruiz' => '2023-08-02', 'luogoFruiz' => 'Store online ufficiale Google', 'nomeOff' => '10% di sconto', 'logoOff' => 'googlepixel7pro.png','stato'=>'1','azienda' => '10', 'utente' => '10'],
            ['oggettoOff' => 'Coupon che garantisce il 10% di sconto su tutti i monitor HP', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-12', 'luogoFruiz' => 'In tutti i negozi riconosciuti Hp', 'nomeOff' => '10% di sconto', 'logoOff' => 'hpmonitor.png','stato'=>'1','azienda' => '3', 'utente' => '6'],
            ['oggettoOff' => 'Coupon che garantisce il 23% di sconto su tutti i laptop Hp Pavilion', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-02-22', 'luogoFruiz' => 'In tutti i negozi riconosciuti Hp', 'nomeOff' => '23% di sconto', 'logoOff' => 'hppavilion15.png','stato'=>'1','azienda' => '3', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 18% di sconto su tutti gli smartphone Motorola', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-18', 'luogoFruiz' => 'In tutti i negozi riconosciuti Motorola', 'nomeOff' => '18% di sconto', 'logoOff' => 'motorolarazr.png','stato'=>'1','azienda' => '8', 'utente' => '8'],
            ['oggettoOff' => 'Coupon che garantisce il 13% di sconto su tutti gli smartphone Oneplus', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-18', 'luogoFruiz' => 'In tutti i negozi della regione Marche', 'nomeOff' => '13% di sconto', 'logoOff' => 'oneplus11.png','stato'=>'1','azienda' => '6', 'utente' => '9'],
            ['oggettoOff' => 'Coupon che garantisce il 19% di sconto su tutta la gamma Oneplus Nord', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-18', 'luogoFruiz' => 'In tutti i negozi della provincia di Milano', 'nomeOff' => '19% di sconto', 'logoOff' => 'oneplusnord2.png','stato'=>'1','azienda' => '6', 'utente' => '10'],
            ['oggettoOff' => 'Coupon che garantisce il 24% di sconto su tutti gli smartphone Samsung', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-10-18', 'luogoFruiz' => 'In tutti i negozi di elettronica', 'nomeOff' => '24% di sconto', 'logoOff' => 'samsungs23ultra.png','stato'=>'1','azienda' => '2', 'utente' => '6'],
            ['oggettoOff' => 'Coupon che garantisce il 30% di sconto su tutti gli smartwatch Samsung', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-07-28', 'luogoFruiz' => 'In tutti i negozi di elettronica', 'nomeOff' => '30% di sconto', 'logoOff' => 'samsungwatch4.png','stato'=>'1','azienda' => '2', 'utente' => '7'],
        ]);
        
        DB::table('buoni')->insert([
            ['codCoupon' => 'C0001', 'utenteRich' => '1', 'dataScad' => '2023-07-25 00:00', 'offPromo' => '1'],
            ['codCoupon' => 'C0002', 'utenteRich' => '3', 'dataScad' => '2023-10-20 00:00', 'offPromo' => '2'],
            ['codCoupon' => 'C0003', 'utenteRich' => '2', 'dataScad' => '2023-08-25 00:00', 'offPromo' => '3'],
            ['codCoupon' => 'C0004', 'utenteRich' => '4', 'dataScad' => '2023-11-11 00:00', 'offPromo' => '4'],
            ['codCoupon' => 'C0005', 'utenteRich' => '5', 'dataScad' => '2023-10-10 00:00', 'offPromo' => '5'],
            ['codCoupon' => 'C0006', 'utenteRich' => '1', 'dataScad' => '2023-05-25 00:00', 'offPromo' => '6'],
            ['codCoupon' => 'C0007', 'utenteRich' => '3', 'dataScad' => '2023-07-20 00:00', 'offPromo' => '7'],
            ['codCoupon' => 'C0008', 'utenteRich' => '2', 'dataScad' => '2023-02-25 00:00', 'offPromo' => '8'],
            ['codCoupon' => 'C0009', 'utenteRich' => '4', 'dataScad' => '2023-01-01 00:00', 'offPromo' => '1'],
            ['codCoupon' => 'C0010', 'utenteRich' => '5', 'dataScad' => '2023-10-10 00:00', 'offPromo' => '2'],
            ['codCoupon' => 'C0011', 'utenteRich' => '1', 'dataScad' => '2023-07-30 00:00', 'offPromo' => '3'],
            ['codCoupon' => 'C0012', 'utenteRich' => '3', 'dataScad' => '2023-04-20 00:00', 'offPromo' => '4'],
            ['codCoupon' => 'C0013', 'utenteRich' => '2', 'dataScad' => '2023-06-29 00:00', 'offPromo' => '5'],
            ['codCoupon' => 'C0014', 'utenteRich' => '4', 'dataScad' => '2023-11-13 00:00', 'offPromo' => '6'],
            ['codCoupon' => 'C0015', 'utenteRich' => '5', 'dataScad' => '2023-10-08 00:00', 'offPromo' => '7'],
            ['codCoupon' => 'C0016', 'utenteRich' => '1', 'dataScad' => '2023-07-22 00:00', 'offPromo' => '8'],
            ['codCoupon' => 'C0017', 'utenteRich' => '3', 'dataScad' => '2023-05-20 00:00', 'offPromo' => '1'],
            ['codCoupon' => 'C0018', 'utenteRich' => '2', 'dataScad' => '2023-08-15 00:00', 'offPromo' => '2'],
            ['codCoupon' => 'C0019', 'utenteRich' => '4', 'dataScad' => '2023-11-19 00:00', 'offPromo' => '3'],
            ['codCoupon' => 'C0020', 'utenteRich' => '5', 'dataScad' => '2023-03-10 00:00', 'offPromo' => '4'],
            ['codCoupon' => 'C0021', 'utenteRich' => '1', 'dataScad' => '2023-07-22 00:00', 'offPromo' => '5'],
            ['codCoupon' => 'C0022', 'utenteRich' => '3', 'dataScad' => '2023-05-27 00:00', 'offPromo' => '6'],
            ['codCoupon' => 'C0023', 'utenteRich' => '2', 'dataScad' => '2023-08-19 00:00', 'offPromo' => '7'],
            ['codCoupon' => 'C0024', 'utenteRich' => '4', 'dataScad' => '2023-11-30 00:00', 'offPromo' => '8'],
            ['codCoupon' => 'C0025', 'utenteRich' => '5', 'dataScad' => '2023-03-10 00:00', 'offPromo' => '10']
        ]);
        

        
        
    }
}
