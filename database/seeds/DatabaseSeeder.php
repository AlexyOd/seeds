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
        // $this->call(UserSeeder::class);
        // $this->call(DeskSeeder::class);
        // $this->call(DeskListSeeder::class);
        // $this->call(CardSeeder::class);
        $this->call(TaskSeeder::class);
    }
}
