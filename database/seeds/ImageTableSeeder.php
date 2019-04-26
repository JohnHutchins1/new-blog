<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([

            [
                'path' => 'img/fuji.jpg',
                'location' => 'Fujiyoshida-shi, Japan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'path' => 'img/okinawa.jpg',
                'location' => 'Okinawa, Japan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'path' => 'img/germany1.jpg',
                'location' => 'Berlin, Germany',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'path' => 'img/germany2.jpg',
                'location' => 'Berlin, Germany',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'path' => 'img/paris.jpg',
                'location' => 'Paris, France',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'path' => 'img/utah.jpg',
                'location' => 'Oljato-Monument Valley, United States',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
    
            ]);
       
    }
}
