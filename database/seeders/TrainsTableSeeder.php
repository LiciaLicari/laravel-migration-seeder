<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(Faker $faker): void
    {
        // $trains = config('trains_data.trains');

        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->company = $faker->randomElement(['Trenitalia', 'Trenord', 'Italo']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTime('H_i');
            $train->arrival_time = $faker->dateTime('H_i');
            $train->date = $faker->date();
            $train->train_code = $faker->bothify('??-######');
            $train->train_coachload = $faker->numberBetween(3, 20);
            $train->is_delayed = $faker->boolean();
            $train->is_deleted = $faker->boolean();
            $train->save();
        };
    }
}
