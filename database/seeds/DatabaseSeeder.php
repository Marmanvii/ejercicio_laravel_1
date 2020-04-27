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
        $this->call(ManagerSeeder::class);
        $this->call(ClassificationSeeder::class);
        $this->call(InfoSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(Info_TagSeeder::class);
    }
}
