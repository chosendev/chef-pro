<?php

use Illuminate\Database\Seeder;

class UsedItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\UsedItem',50)->create();
    }
}
