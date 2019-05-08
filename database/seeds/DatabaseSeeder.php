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
    	//Disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(UsersSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(StaffTypeTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        // Supposed to only apply to a single connection and reset it's self
        // but lets explicitly undo what we've done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
