<?php

use Illuminate\Database\Seeder;

class DeskListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\DeskList::class,495)->create();
    }
}
