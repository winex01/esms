<?php

use Illuminate\Database\Seeder;

class DatabaseInstallSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SexesTableSeeder::class);
        $this->call(SemestersTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
    }
}
