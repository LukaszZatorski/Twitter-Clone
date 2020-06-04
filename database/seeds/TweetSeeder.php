<?php

use Illuminate\Database\Seeder;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tweet::class, 10)->create();
        factory(App\Tweet::class, 5)->create(['user_id' => 1]);
        factory(App\Tweet::class, 5)->create(['user_id' => 2]);
    }
}
