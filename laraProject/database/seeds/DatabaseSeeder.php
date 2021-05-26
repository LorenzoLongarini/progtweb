<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {

    DB::table('users')->insert([


        ['utenteId'=>8,
        'ivaFiscale'=>'112334443',
        'email'=>'mario.rossi@ciao.it',
        'username'=>'mariorossi',
        'nome'=>'mario',
        'cognome'=>'rossi',
        'role'=>'organizzatore',
        'telefono'=>'32007139',
        'cap'=>'13',
        'città'=>'ancona',
        'via'=>'ciao',
        'password'=>Hash::make('ciao')],

        ['utenteId'=>9,
        'ivaFiscale'=>'112666443',
        'email'=>'carlo.bianchi@ciao.it',
        'username'=>'carlobianchi',
        'nome'=>'carlo',
        'cognome'=>'bianchi',
        'role'=>'admin',
        'telefono'=>'32097133',
        'cap'=>'13',
        'città'=>'ancona',
        'via'=>'ciao',
        'password'=>Hash::make('ciao')],

        ['utenteId'=>10,
        'ivaFiscale'=>'1126123343',
        'email'=>'marco.verdi@ciao.it',
        'username'=>'marcoverdi',
        'nome'=>'marco',
        'cognome'=>'verdi',
        'role'=>'cliente',
        'telefono'=>'3234439',
        'cap'=>'13',
        'città'=>'ancona',
        'via'=>'ciao',
        'password'=>Hash::make('ciao')],



    ]);

}
}