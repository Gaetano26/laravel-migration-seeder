<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = [
        [
            'company' => 'Trenitalia',
            'departure_station' => 'Roma Termini',
            'arrival_station' => 'Napoli Centrale',
            'departure_time'  => '12:00:00' ,
            'arrival_time' => '13:00:00' ,
            'train_code' => 'abcdef',
            'carriages' => 4 ,
            'in_time' => 1 ,
            'deleted' => 0,
        ],
        [
            'company' => 'Italferr',
            'departure_station' => 'Napoli Centrale',
            'arrival_station' => 'Roma Tiburtina',
            'departure_time'  => '15:20:00' ,
            'arrival_time' => '14:30:00' ,
            'train_code' => 'fedcba',
            'carriages' => 5 ,
            'in_time' => 1 ,
            'deleted' => 0,
        ],
        [
            'company' => 'Italcertifer',
            'departure_station' => 'Roma Tiburtina',
            'arrival_station' => 'Torino Porta Nuova',
            'departure_time'  => '13:40:00' ,
            'arrival_time' => '17:00:00' ,
            'train_code' => 'mlspqr',
            'carriages' => 7 ,
            'in_time' => 0 ,
            'deleted' => 1,
        ],
        [
            'company' => 'Ferservizi',
            'departure_station' => 'Napoli Afragola',
            'arrival_station' => 'Milano Cadorna',
            'departure_time'  => '16:40:00' ,
            'arrival_time' => '18:20:00' ,
            'train_code' => 'poeerttmc',
            'carriages' => 10 ,
            'in_time' => 1 ,
            'deleted' => 0,
        ],
        [
            'company' => 'Grandi Stazioni Rail',
            'departure_station' => 'Napoli Afragola',
            'arrival_station' => 'Roma Termini',
            'departure_time'  => '16:30:00' ,
            'arrival_time' => '17:20:00' ,
            'train_code' => 'peocnsmf',
            'carriages' => 8 ,
            'in_time' => 0 ,
            'deleted' => 1,
        ],
      ];
      foreach ($data as $train) {
          $newTrain = new Train();
          $newTrain->company = $train['company'];
          $newTrain->departure_station = $train['departure_station'];
          $newTrain->arrival_station = $train['arrival_station'];
          $newTrain->departure_time = $train['departure_time'];
          $newTrain->arrival_time = $train['arrival_time'];
          $newTrain->train_code = $train['train_code'];
          $newTrain->carriages = $train['carriages'];
          $newTrain->in_time = $train['in_time'];
          $newTrain->save();


      }
    }
}
