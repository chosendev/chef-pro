<?php

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
// use App\Models\NGO\Organisation;

class UsersTableSeeder extends Seeder
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
                // 'organisation_id' => 1,
                'email' => 'pius@ensibuuko.com',
                'password' => bcrypt('secret'),
                'email_verified_at' => Carbon::now()
            ],
            [
                'name' => 'Opuda',
                // 'organisation_id' => 1,
                'email' => 'mwaka@ensibuuko.com',
                'password' => bcrypt('secret'),
                'email_verified_at' => Carbon::now()
            ],
            [
                'name' => 'Dorothy',
                //'is_super_admin' => true,
                'email' => 'ambrose@ensibuuko.com',
                'password' => bcrypt('secret'),
                'email_verified_at' => Carbon::now()
            ],
            
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        /*foreach (Organisation::all() as $org) {
            factory(App\Models\User::class, 2)->make()->each(function ($user) use ($org) {
                $user->organisation_id = $org->id;
                $user->save();
            });
        }*/
    }
}
