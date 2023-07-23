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
        $trainList =[
            [
                'company' => 'Italo',
                'depart_station' => 'Roma',
                'depart_time' => '12:30',
                'arrive_station' => 'Napoli',
                'arrive_time' => '13:41',
                'train_code' => 'IT854',
                'q_wagons' => '8',
                'delayed' => false,
                'canceled' => false,
            ],[
                'company' => 'Trenitalia',
                'depart_station' => 'Milano',
                'depart_time' => '14:30',
                'arrive_station' => 'Modena',
                'arrive_time' => '15:21',
                'train_code' => 'FR8954',
                'q_wagons' => '8',
                'delayed' => false,
                'canceled' => false,
            ],[
                'company' => 'Trenitalia',
                'depart_station' => 'Roma',
                'depart_time' => '11:20',
                'arrive_station' => 'Firenze',
                'arrive_time' => '13:41',
                'train_code' => 'FR9894',
                'q_wagons' => '8',
                'delayed' => false,
                'canceled' => true,
            ],[
                'company' => 'Trenitalia',
                'depart_station' => 'Torino',
                'depart_time' => '12:30',
                'arrive_station' => 'Como',
                'arrive_time' => '13:41',
                'train_code' => 'TN5423',
                'q_wagons' => '8',
                'delayed' => true,
                'canceled' => false,
            ],
            ];

        foreach ($trainList as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->depart_station = $train['depart_station'];
            $newTrain->depart_time = $train['depart_time'];
            $newTrain->arrive_station = $train['arrive_station'];
            $newTrain->arrive_time = $train['arrive_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->q_wagons = $train['q_wagons'];
            $newTrain->delayed = $train['delayed'];
            $newTrain->canceled = $train['canceled'];
            $newTrain->save();
        }
    }
}