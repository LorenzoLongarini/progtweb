<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {

    DB::table('users')->insert([

        ['usersId'=>01,
        'nome'=>'tecnico',
        'cognome'=>'tecnico',
        'iva/cf'=>'CRLBNC17PZ129I',
        'email'=>'info@tecnico.it',
        'username'=>'tecnico',
        'ragioneSociale'=>'',
        'role'=>'tecnico',
        'telefono'=>'3200713901',
        'cap'=>'13',
        'città'=>'Ancona',
        'via'=>'Ancona',
        'password'=>Hash::make('tecnico')],

        
        ['usersId'=>02,
        'nome'=>'admin',
        'cognome'=>'admin',
        'ivaFiscale'=>'2000198343',
        'email'=>'info@admin.it',
        'username'=>'admin',
        'ragioneSociale'=>'',
        'role'=>'admin',
        'telefono'=>'3200715789',
        'cap'=>'14',
        'città'=>'Fermo',
        'via'=>'Fermo',
        'password'=>Hash::make('admin')],

        ['usersId'=>03,
        'iva/cf'=>'12344554421',
        'nome'=>'staff',
        'cognome'=>'staff',
        'email'=>'info@staff.it',
        'username'=>'staff',
        'ragioneSociale'=>'',
        'role'=>'staff',
        'telefono'=>'3200744712',
        'cap'=>'19',
        'città'=>'Ferrara',
        'via'=>'Ferrara',
        'password'=>Hash::make('tecnico')],
    ]);
}
}
