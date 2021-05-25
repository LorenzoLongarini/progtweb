<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utenti')->insert([
            ['utenteId'=>001,
            'ivaFiscale'=>'00202020202020202',
            'email'=>'mariorossi@ciao.it',
            'username'=>'mario.rossi',
            'password'=>'ciaociao',
            'telefono'=>'32303040',
            'via'=>'sksksksksk',
            'cap'=>'12',
            'città'=>'ancona',
            'livello'=>'cliente']



        ]);
    
    }
}
