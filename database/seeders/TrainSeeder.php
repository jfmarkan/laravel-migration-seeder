<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $companiesList=['Trenitalia','Trenord','Italo'];
        $citiesList=['Roma','Bologna','Bari','Napoli','Milano','Firenze','Venezia'];


        for ($i = 0; $i < 50 ; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->randomElement($companiesList);
            $newTrain->depart_station = $faker->randomElement($citiesList);
            $newTrain->depart_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrive_station = $faker->randomElement($citiesList);
            $newTrain->arrive_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->train_code = $faker->randomNumber(4, true);
            $newTrain->q_wagons = $faker->randomDigitNotNull();
            $newTrain->delayed = $faker->boolean();
            $newTrain->canceled = $faker->boolean();
            $newTrain->save();
        }
    }
}