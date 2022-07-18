<?php

use Illuminate\Database\Seeder;

class DeskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Desk::class,495)->create();
    }
}
