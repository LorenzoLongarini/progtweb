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
            'imgName'=>'aaaaa',
            'sottocategoria'=>'televisori'],

            [   'productsId'=>02,
            'nome' => 'telefono',
            'prezzo'=>'21.4',
            'noteTecniche'=>'bbbbbbbbb', 
            'descrizione'=>'bbbbbbbbbbb computer bbbbbbbbbbb',
            'modInstallaz'=>'bbbbbbbbbbbbb',  
            'imgName'=>'bbbbbb',
            'sottocategoria'=>''],

            [   'productsId'=>03,
            'nome' => 'lavatrice',
            'prezzo'=>'18.4',
            'noteTecniche'=>'cccccccccccccc', 
            'descrizione'=>'cccccccccccccccc computer ccccccccccccccccc',
            'modInstallaz'=>'ccccccccccccccccccccc',  
            'imgName'=>'ccccccccccc',
            'sottocategoria'=>''],

            [   'productsId'=>04,
            'nome' => 'lavastoviglie',
            'prezzo'=>'11.4',
            'noteTecniche'=>'dddddddddddddddd', 
            'descrizione'=>'dddddddddddddddddddddddddd computer dddddddddddddddd dd',
            'modInstallaz'=>'dddddddddddddddddddddd',  
            'imgName'=>'ddddddddddddddddd',
            'sottocategoria'=>''],
            
    ]);
}
}
