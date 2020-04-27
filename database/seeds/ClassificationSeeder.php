<?php

use Illuminate\Database\Seeder;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classifications')->insert([
            'name' => 'Categoria 1',
            'manager_id' => '1',
        ]);

        DB::table('classifications')->insert([
            'name' => 'Categoria 2',
            'manager_id' => '2',
        ]);
        
        DB::table('classifications')->insert([
            'name' => 'Categoria 3',
            'manager_id' => '3',
        ]);
    }
}
