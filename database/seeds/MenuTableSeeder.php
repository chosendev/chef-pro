<?php
use App\menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        menu::create([
            'food_combination' =>'Rice & meat',
            'price'=> '12000',
            'status' =>'Available',
            'date' =>\Carbon\Carbon::createFromDate(2019,5,23)->toDateTimeString(),
            'image'=>'329729503.easy-korean-beef-rice-bowls-fbig2-500x375.jpg'
        ]);

        menu::create([
            'food_combination' =>'Rice & meat',
            'price'=> '10000',
            'status' =>'Available',
            'date' =>\Carbon\Carbon::createFromDate(2019,5,20)->toDateTimeString(),
            'image'=>'1558526800.exps183075_SD153320C12_09_2b.jpg'
        ]);
        menu::create([
            'food_combination' =>'Rice & meat',
            'price'=> '14000',
            'status' =>'Available',
            'date' =>\Carbon\Carbon::createFromDate(2019,5,19)->toDateTimeString(),
            'image'=>'1558527066.Beef-Tips_28a_serve-and-enjoy.jpg'
        ]);
        menu::create([
            'food_combination' =>'Rice & meat',
            'price'=> '10000',
            'status' =>'Available',
            'date' =>\Carbon\Carbon::createFromDate(2019,5,22)->toDateTimeString(),
            'image'=>'1558527100.fragrant-beef-curry-with-rice.jpg'
        ]);
        menu::create([
            'food_combination' =>'Rice & meat',
            'price'=> '15000',
            'status' =>'Available',
            'date' =>\Carbon\Carbon::createFromDate(2019,5,18)->toDateTimeString(),
            'image'=>'1558527137.slow-cooker-asian-beef2.jpg'
        ]);
        menu::create([
            'food_combination' =>'Rice & meat',
            'price'=> '10000',
            'status' =>'Available',
            'date' =>\Carbon\Carbon::createFromDate(2019,5,20)->toDateTimeString(),
            'image'=>public_path('1558527732.meat-rice-bowl-header-copy.jpg')
        ]);


    }
}
