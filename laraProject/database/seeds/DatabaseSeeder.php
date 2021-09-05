<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {

    DB::table('users')->insert([

        ['usersId'=>01,
        'nome'=>'tecnico',
        'cognome'=>'tecnico',
        'ivacf'=>'CRLBNC17PZ129I',
        'email'=>'info@tecnico.it',
        'username'=>'tecnico',
        'sottocategoria'=>'',
        'role'=>'tecnico',
        'telefono'=>'3200713901',
        'cap'=>'13222',
        'città'=>'Ancona',
        'via'=>'Ancona',
        'password'=>Hash::make('tecnico')],

        
        ['usersId'=>02,
        'nome'=>'admin',
        'cognome'=>'admin',
        'ivacf'=>'2000198343',
        'email'=>'info@admin.it',
        'username'=>'admin',
        'sottocategoria'=>'',
        'role'=>'admin',
        'telefono'=>'3200715789',
        'cap'=>'14222',
        'città'=>'Fermo',
        'via'=>'Fermo',
        'password'=>Hash::make('admin')],

        ['usersId'=>03,
        'ivacf'=>'12344554421',
        'nome'=>'staff',
        'cognome'=>'staff',
        'email'=>'info@staff.it',
        'username'=>'staff',
        'sottocategoria'=>'',
        'role'=>'staff',
        'telefono'=>'3200744712',
        'cap'=>'19222',
        'città'=>'Ferrara',
        'via'=>'Ferrara',
        'password'=>Hash::make('staff')],
    ]);
    DB::table('products')->insert([

        [   'productsId'=>01,
            'nome' => 'pcccc',
            'prezzo'=>'23.4',
            'noteTecniche'=>'aaaaaaaaaa', 
            'descrizione'=>'aaaaaaaaaaaaaa computer aaaaaa',
            'modInstallaz'=>'aaaaaaaaa',  
            'imgName'=>'aaaaa'],

            [   'productsId'=>02,
            'nome' => 'telefono',
            'prezzo'=>'21.4',
            'noteTecniche'=>'bbbbbbbbb', 
            'descrizione'=>'bbbbbbbbbbb computer bbbbbbbbbbb',
            'modInstallaz'=>'bbbbbbbbbbbbb',  
            'imgName'=>'bbbbbb'],

            [   'productsId'=>03,
            'nome' => 'lavatrice',
            'prezzo'=>'18.4',
            'noteTecniche'=>'cccccccccccccc', 
            'descrizione'=>'cccccccccccccccc computer ccccccccccccccccc',
            'modInstallaz'=>'ccccccccccccccccccccc',  
            'imgName'=>'ccccccccccc'],

            [   'productsId'=>04,
            'nome' => 'lavastoviglie',
            'prezzo'=>'11.4',
            'noteTecniche'=>'dddddddddddddddd', 
            'descrizione'=>'dddddddddddddddddddddddddd computer dddddddddddddddd dd',
            'modInstallaz'=>'dddddddddddddddddddddd',  
            'imgName'=>'ddddddddddddddddd'],
    ]);
    DB::table('assistence_centers')->insert([

        [   'centersId'=>01,
            'nome' => 'Centro numero uno',
            'via' => 'Ancona 12',
            'telefono'=>'320494858',
            'email'=>'info@centrouno.it'
            
            ],

            [   'centersId'=>02,
            'nome' => 'Centro numero due',
            'via' => 'Milano 45',
            'telefono'=>'3256785800',
            'email'=>'info@centrodue.it'
        ],

            [    'centersId'=>03,
            'nome' => 'Centro numero tre',
            'via' => 'Firenze 25',
            'telefono'=>'3223485878',
            'email'=>'info@centrotre.it'],

            [  'centersId'=>04,
            'nome' => 'Centro numero quattro',
            'via' => 'Napoli 19',
            'telefono'=>'3763485878',
            'email'=>'info@centroquattro.it'],
    ]);
}
}
