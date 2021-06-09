<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {

    DB::table('users')->insert([


      

        ['utenteId'=>11,
        'nome'=>'',
        'cognome'=>'',
        'ivaFiscale'=>'145255416',
        'email'=>'fspLimited@ciao.it',
        'username'=>'fspLimited',
        'ragioneSociale'=>'Fossil Spoons Project',
        'role'=>'admin',
        'telefono'=>'32007139',
        'cap'=>'13',
        'città'=>'Ancona',
        'via'=>'ciao',
        'password'=>Hash::make('ciao')],

        
        ['utenteId'=>12,
        'nome'=>'',
        'cognome'=>'',
        'ivaFiscale'=>'196542545',
        'email'=>'managerieLtd@ciao.it',
        'username'=>'managerieLtd',
        'ragioneSociale'=>'The Managerie Music',
        'role'=>'organizzatore',
        'telefono'=>'32007115',
        'cap'=>'14',
        'città'=>'Fermo',
        'via'=>'ciao',
        'password'=>Hash::make('ciao')],

        ['utenteId'=>13,
        'ivaFiscale'=>'196542111',
        'nome'=>'',
        'cognome'=>'',
        'email'=>'jauntAdmin@ciao.it',
        'username'=>'jauntLtd',
        'ragioneSociale'=>'The Jaunt',
        'role'=>'cliente',
        'telefono'=>'32007447',
        'cap'=>'19',
        'città'=>'Ferrara',
        'via'=>'ciao',
        'password'=>Hash::make('ciao')],



    ]);

    DB::table('eventi')->insert([

        ['eventoId'=>1,
        'utenteId'=>12,
        'titolo'=> 'Evento 01',
        'artista'=> 'Artista 01',
        'data'=> '2021-09-04 20:45:00',
        'luogo'=> 'Stadio Flaminio',
        'regione'=> 'Lazio',
        'prezzo'=> 29.95 ,
        'descrizione'=> 'Evento 01Evento 01Evento 02Evento 02Evento 02Evento 02Evento 02Evento 02Evento 02',
        'programma'=> 'Evento 01Evento 01Evento 02Evento 02Evento 02Evento 02Evento 02Evento 02Evento to 02Evento 02Evento 02Evento 02Evento 02Evento 02',
        'bigliettiTotali'=> 22000,
        'bigliettiVenduti'=> 8500,
        'sconto'=> 12,
        'dataSconto'=> '2021-08-25',
        'mapsUrl'=> '',
        
         ],

         ['eventoId'=>2,
         'utenteId'=>13,
         'titolo'=> 'Evento 02',
         'artista'=> 'Artista 02',
         'data'=> '2021-09-15 21:00:00',
         'luogo'=> 'Stadio San Nicola',
         'regione'=> 'Puglia',
         'prezzo'=> 35.00 ,
         'descrizione'=> 'Evento 02Evento 02Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Ev',
         'programma'=> 'Evento 02Evento 02Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01',
         'bigliettiTotali'=> 47500,
         'bigliettiVenduti'=> 32000,
         'sconto'=> 15,
         'dataSconto'=> '2021-09-01',
         'mapsUrl'=> '',
         
        ],

        ['eventoId'=>3,
         'utenteId'=>11,
         'titolo'=> 'Evento 03',
         'artista'=> 'Artista 03',
         'data'=> '2021-08-31 16:30:00',
         'luogo'=> 'Stadio Giuseppe Meazza',
         'regione'=> 'Lombardia',
         'prezzo'=> 32.75 ,
         'descrizione'=> 'Evento 03Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01',
         'programma'=> 'Evento 03Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01',
         'bigliettiTotali'=> 60000,
         'bigliettiVenduti'=> 31500,
         'sconto'=> 15,
         'dataSconto'=> '2021-08-24',
         'mapsUrl'=> '',
         
        ],

        ['eventoId'=>4,
         'utenteId'=>13,
         'titolo'=> 'Evento 04',
         'artista'=> 'Artista 04',
         'data'=> '2021-08-15 21:30:00',
         'luogo'=> 'Stadio Del Conero',
         'regione'=> 'Marche',
         'prezzo'=> 18.95 ,
         'descrizione'=> 'Evento 04Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01',
         'programma'=> 'Evento 05Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01',
         'bigliettiTotali'=> 18000,
         'bigliettiVenduti'=> 12520,
         'sconto'=> 20,
         'dataSconto'=> '2021-08-01',
         'mapsUrl'=> '',
         
        ],

        ['eventoId'=>5,
         'utenteId'=>12,
         'titolo'=> 'Evento 05',
         'artista'=> 'Artista 05',
         'data'=> '2021-10-18 19:00:00',
         'luogo'=> 'Stadio Flaminio',
         'regione'=> 'Lazio',
         'prezzo'=> 29.95 ,
         'descrizione'=> 'Evento 05Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01',
         'programma'=> 'Evento 05Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01',
         'bigliettiTotali'=> 20000,
         'bigliettiVenduti'=> 19250,
         'sconto'=> 10,
         'dataSconto'=> '2021-10-8',
         'mapsUrl'=> '',
         
        ],

        ['eventoId'=>6,
        'utenteId'=>13,
        'titolo'=> 'Evento 06',
        'artista'=> 'Artista 06',
        'data'=> '2021-08-31 20:48:51',
        'luogo'=> 'Stadio Del Conero',
        'regione'=> 'Marche',
        'prezzo'=> 17.50,
        'descrizione'=> 'Evento 06Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01',
        'programma'=> 'Evento 06Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01',
        'bigliettiTotali'=> 14500,
        'bigliettiVenduti'=> 7500,
        'sconto'=> 10,
        'dataSconto'=> '2021-08-15',
        'mapsUrl'=> '',
        
       ],

       ['eventoId'=>7,
       'utenteId'=>11,
       'titolo'=> 'Evento 07',
       'artista'=> 'Artista 07',
       'data'=> '2021-10-25 20:00:00',
       'luogo'=> 'Stadio Flaminio',
       'regione'=> 'Lazio',
       'prezzo'=> 23.95,
       'descrizione'=> 'Evento 07Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01',
       'programma'=> 'Evento 07Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01Evento 01',
       'bigliettiTotali'=> 21750,
       'bigliettiVenduti'=> 1800,
       'sconto'=> 5,
       'dataSconto'=> '2021-10-15',
       'mapsUrl'=> '',
       
      ],
    ]);
}
}
