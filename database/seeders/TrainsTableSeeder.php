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
            'arrival_time',
            'train_code',
            'carriages',
            'in_time',
            'deleted',





        ],
      ];
    }
}
