<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	// protected $toTruncate = ['staff','StaffType','item','vendor','store'];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    	// Model::unguard();

    	// foreach ($this->toTruncate as $table){

    	// 	DB::table($table)->truncate();
    	// }


        $this->call(StaffTypeTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(MenuTableSeeder::class);

    }
}
