<?php

use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managers')->insert([
            'name' => 'Nombre Manager 1',
            'phone' => '912345678',
        ]);

        DB::table('managers')->insert([
            'name' => 'Nombre Manager 2',
            'phone' => '987654321',
        ]);

        DB::table('managers')->insert([
            'name' => 'Nombre Manager 3',
            'phone' => '954321678',
        ]);
    }
}
