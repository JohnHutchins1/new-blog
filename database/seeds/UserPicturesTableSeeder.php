<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserPicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_pictures')->insert([

            [
                'user_id' => '1',
                'img_id' => '3',
                'added_on' => Carbon::now(),
            ],
            [
                'user_id' => '1',
                'img_id' => '5',
                'added_on' => Carbon::now(),
            ],
            [
                'user_id' => '1',
                'img_id' => '6',
                'added_on' => Carbon::now(),
            ],

        ]
        );
    }
}
