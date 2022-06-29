<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->maker = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_date = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->railway_sys_id = rand(11111, 55555);
            $train->carriages = rand(4, 12);
            $train->on_time = rand(0, 1);
            $train->cancelled = rand(0, 1);

            $train->save();
        }
    }
}
