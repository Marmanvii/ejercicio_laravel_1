<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'description' => 'tag 1',
        ]);

        DB::table('tags')->insert([
            'description' => 'tag 2',
        ]);

        DB::table('tags')->insert([
            'description' => 'tag 3',
        ]);

        DB::table('tags')->insert([
            'description' => 'tag 4',
        ]);

        DB::table('tags')->insert([
            'description' => 'tag 5',
        ]);
    }
}
