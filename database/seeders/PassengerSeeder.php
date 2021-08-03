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

        $p4 = new \App\Models\Passenger();
        $p4->firstname = "Maryte";
        $p4->flight_id = 3;
        $p4->save();

        $p5 = new \App\Models\Passenger();
        $p5->firstname = "Aloyzas";
        $p5->flight_id = 4;
        $p5->save();

        $p6 = new \App\Models\Passenger();
        $p6->firstname = "Gretute";
        $p6->flight_id = 5;
        $p6->save();

        $p7 = new \App\Models\Passenger();
        $p7->firstname = "Bronius";
        $p7->flight_id = 3;
        $p7->save();
    }
}
