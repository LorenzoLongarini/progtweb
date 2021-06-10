<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {

    DB::table('users')->insert([


      

        ['utenteId'=>01,
        'nome'=>'Carlo',
        'cognome'=>'Bianchi',
        'ivaFiscale'=>'CRLBNC17PZ129I',
        'email'=>'info@carlobianchi.it',
        'username'=>'clieclie',
        'ragioneSociale'=>'',
        'role'=>'cliente',
        'telefono'=>'3200713901',
        'cap'=>'13',
        'città'=>'Ancona',
        'via'=>'Ancona',
        'password'=>Hash::make('tFKkTTCx')],

        
        ['utenteId'=>02,
        'nome'=>'Marco',
        'cognome'=>'Verdi',
        'ivaFiscale'=>'2000198343',
        'email'=>'info@marcoverdi.it',
        'username'=>'adminadmin',
        'ragioneSociale'=>'',
        'role'=>'admin',
        'telefono'=>'3200715789',
        'cap'=>'14',
        'città'=>'Fermo',
        'via'=>'Fermo',
        'password'=>Hash::make('tFKkTTCx')],

        ['utenteId'=>03,
        'ivaFiscale'=>'12344554421',
        'nome'=>'Mario',
        'cognome'=>'Rossi',
        'email'=>'info@mariorossi.it',
        'username'=>'orgaorga',
        'ragioneSociale'=>'The Jaunt',
        'role'=>'organizzatore',
        'telefono'=>'3200744712',
        'cap'=>'19',
        'città'=>'Ferrara',
        'via'=>'Ferrara',
        'password'=>Hash::make('tFKkTTCx')],

        ['utenteId'=>04,
        'ivaFiscale'=>'FRNN12IN12I12I',
        'nome'=>'Franco',
        'cognome'=>'Neri',
        'email'=>'info@franconeri.it',
        'username'=>'franconeri',
        'ragioneSociale'=>'',
        'role'=>'cliente',
        'telefono'=>'3200744456',
        'cap'=>'19',
        'città'=>'Milano',
        'via'=>'Milano',
        'password'=>Hash::make('ciao')],

        ['utenteId'=>05,
        'ivaFiscale'=>'LCACRL',
        'nome'=>'luca',
        'cognome'=>'Carletti',
        'email'=>'info@lucacarletti.it',
        'username'=>'lucacarletti',
        'ragioneSociale'=>'Carletti SPA',
        'role'=>'organizzatore',
        'telefono'=>'320741256',
        'cap'=>'19',
        'città'=>'Modena',
        'via'=>'Modena',
        'password'=>Hash::make('ciao')],

        ['utenteId'=>06,
        'ivaFiscale'=>'GVNPRV12L123U',
        'nome'=>'Giovanni',
        'cognome'=>'Prova',
        'email'=>'info@giovanniprova.it',
        'username'=>'giovanniprova',
        'ragioneSociale'=>'',
        'role'=>'admin',
        'telefono'=>'3207412123',
        'cap'=>'19',
        'città'=>'Bari',
        'via'=>'Bari',
        'password'=>Hash::make('ciao')]



    ]);

    DB::table('eventi')->insert([

        ['eventoId'=>01,
        'utenteId'=>03,
        'titolo'=> 'Tour Vasco Rossi',
        'artista'=> 'Vasco Rossi',
        'data'=> '2021-09-04 20:45:00',
        'luogo'=> 'Stadio Flaminio',
        'regione'=> 'Lazio',
        'prezzo'=> 29.95 ,
        'descrizione'=> 'descrizione del tour di vasco rossi, nel giorno sopra indicato,con artista vasco rossi',
        'programma'=> 'evento che si svolgerà allo stadio flaminio, avrà una durata di 3 ore e sarà divertente',
        'bigliettiTotali'=> 2600,
        'sconto'=> 15,
        'dataSconto'=> '2021-08-25',
        'mapsUrl'=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1484.2435250652181!2d12.469210958184677!3d41.92538449480462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f60e87b04edd9%3A0xb615d1b5c2a1a891!2sStadio%20Flaminio!5e0!3m2!1sit!2sit!4v1623324838752!5m2!1sit!2sit',
        
         ],

         ['eventoId'=>2,
         'utenteId'=>03,
         'titolo'=> 'Tour Gianni Morandi',
         'artista'=> 'Gianni Morandi',
         'data'=> '2021-09-15 21:00:00',
         'luogo'=> 'Stadio San Nicola',
         'regione'=> 'Puglia',
         'prezzo'=> 25.00 ,
         'descrizione'=> 'descrizione del tour di gianni morandi, nel giorno sopra indicato, con artista gianni morandi',
         'programma'=> 'evento che  avrà una durata di 5 ore, gianni morandi suonerà 20 brani e sarà divertente',
         'bigliettiTotali'=> 1350,
         'sconto'=> 25,
         'dataSconto'=> '2021-09-01',
         'mapsUrl'=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.27994062702!2d16.837946515266864!3d41.08472977929304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1347e941b5ef01bd%3A0x5636fa0b217fea36!2sStadio%20San%20Nicola!5e0!3m2!1sit!2sit!4v1623325251576!5m2!1sit!2sit',
         
        ],

        ['eventoId'=>3,
         'utenteId'=>05,
         'titolo'=> 'Concerto di Tizio',
         'artista'=> 'Tizio Caio',
         'data'=> '2021-08-31 16:30:00',
         'luogo'=> 'Stadio Giuseppe Meazza',
         'regione'=> 'Lombardia',
         'prezzo'=> 16.75 ,
         'descrizione'=> 'descrizione del concerto di tizio,nel giorno sopra indicato, con artista tizio caio',
         'programma'=> 'evento che si svolgerà allo stadio, durerà 4 ore, sarà divertente ed entusiasmante',
         'bigliettiTotali'=> 1235,
         'sconto'=> 45,
         'dataSconto'=> '2021-08-24',
         'mapsUrl'=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.586967472369!2d9.121773315418777!3d45.478123579101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c193fa23f19d%3A0x9c7d30c7aeff312!2sStadio%20San%20Siro!5e0!3m2!1sit!2sit!4v1623325167484!5m2!1sit!2sit',
         
        ]
    ]);
    /*
    DB::table('biglietti')->insert([
        [
            'bigliettoId'=>02,
            'utenteId'=>04,
            'eventoId'=>3,
            'prezzoAcquisto'=>25,50
            'dataAcquisto'=>1623329041
        ]
    ]);
    */
    DB::table('faqs')->insert([
        
            ['faqId'=>01,
            'domanda'=>'Dopo quanto tempo arriva il rimborso in caso di reso?',
            'risposta'=>'in caso di reso il rimborso verrà effettuato entro 3/4 giorni lavorativi',

        ],
        
        ['faqId'=>02,
            'domanda'=>'Dove posso trovare il biglietto che ho acquistato?',
            'risposta'=>' i biglietti acquistati vengono inviati tramite e-mail entro 1 giorno dalla data di acquisto',
            
        ],

            ['faqId'=>03,
            'domanda'=>'Quali sono i metodi di pagamento per acquistare un biglietto?',
            'risposta'=>'i biglietti possono essere acquistati con bonifico bancario,.....',
            
        ]


    ]);
}
}
