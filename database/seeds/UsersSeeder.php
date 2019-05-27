<?php

use Carbon\Carbon;
use App\User;
use Illuminate\Database\Seeder;
// use App\Models\NGO\Organisation;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Chosen',
                'email' => 'chosen@ensibuuko.com',
                'password' => bcrypt('secret'),
                'email_verified_at' => Carbon::now()
            ],
            [
                'name' => 'Opuda',
                'email' => 'opuda@ensibuuko.com',
                'password' => bcrypt('secret'),
                'email_verified_at' => Carbon::now()
            ],
            [
                'name' => 'Dorothy',
                'email' => 'dorothy@ensibuuko.com',
                'password' => bcrypt('secret'),
                'email_verified_at' => Carbon::now()
            ],
            
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        /*foreach (Restaurant::all() as $restaurant) {
            factory(App\Models\User::class, 2)->make()->each(function ($user) use ($org) {
                $user->organisation_id = $org->id;
                $user->save();
            });
        }*/
    }
}
