<?php

use Illuminate\Database\Seeder;

class StaffTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\StaffType',50)->create();
    }
}
