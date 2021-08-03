<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = new \App\Models\Passenger();
        $p1->firstname = "Petriukas";
        $p1->flight_id = 1;
        $p1->save();

        $p2 = new \App\Models\Passenger();
        $p2->firstname = "Antanas";
        $p2->flight_id = 2;
        $p2->save();

        $p3 = new \App\Models\Passenger();
        $p3->firstname = "Onute";
        $p3->flight_id = 1;
        $p3->save();
    }
}
