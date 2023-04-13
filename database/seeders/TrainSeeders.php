<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $company = ['trenitalia', 'Booltalia', 'Trentren', 'Booltren'];

        for ($i = 0; $i < 1000; $i++) {

            $new_train->company = $faker->randomElement($companies);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->randomNumber(6);
            $new_train->carriages_number = $faker->randomNumber(2);
            $new_train->on_time = $faker->randomElement([0, 1]);
            $new_train->cancelled = $faker->randomElement([0, 1]);

           
            $new_train->save();
        }
    }
}