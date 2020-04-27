<?php

use Illuminate\Database\Seeder;

class Info_TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // noticia 1 con los tags 1, 2, 3, 4, 5
        DB::table('info_tag')->insert([
            'info_id' => '1',
            'tag_id' => '1',
        ]);

        DB::table('info_tag')->insert([
            'info_id' => '1',
            'tag_id' => '2',
        ]);

        DB::table('info_tag')->insert([
            'info_id' => '1',
            'tag_id' => '3',
        ]);

        DB::table('info_tag')->insert([
            'info_id' => '1',
            'tag_id' => '4',
        ]);

        DB::table('info_tag')->insert([
            'info_id' => '1',
            'tag_id' => '5',
        ]);

        // noticia 2 con los tags 1 y 2
        DB::table('info_tag')->insert([
            'info_id' => '2',
            'tag_id' => '1',
        ]);

        DB::table('info_tag')->insert([
            'info_id' => '2',
            'tag_id' => '2',
        ]);

        // noticia 3 con el tag 1
        DB::table('info_tag')->insert([
            'info_id' => '3',
            'tag_id' => '5',
        ]);

        // noticia 4 con los tags 3 y 4
        DB::table('info_tag')->insert([
            'info_id' => '4',
            'tag_id' => '3',
        ]);

        DB::table('info_tag')->insert([
            'info_id' => '4',
            'tag_id' => '4',
        ]);

        // noticia 5 sin tags
    }
}
