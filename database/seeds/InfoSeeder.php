<?php

use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            'author' => 'Nombre autor 1',
            'title' => 'Titulo 1',
            'body' => 'Ejemplo de body 1',
            'date' => $date= now(),
        ]);

        DB::table('infos')->insert([
            'author' => 'Nombre autor 2',
            'title' => 'Titulo 2',
            'body' => 'Ejemplo de body 2',
            'date' => $date= now(),
        ]);

    }
}
