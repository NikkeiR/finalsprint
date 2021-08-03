<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fl1 = new \App\Models\Flight();
        $fl1->name = "Chicago - New York";
        $fl1->save();

        $fl2 = new \App\Models\Flight();
        $fl2->name = "Miami - Seattle";
        $fl2->save();

        $fl3 = new \App\Models\Flight();
        $fl3->name = "Los Angeles - San Francisco";
        $fl3->save();

        $fl4 = new \App\Models\Flight();
        $fl4->name = "Portland - Boston";
        $fl4->save();

        $fl5 = new \App\Models\Flight();
        $fl5->name = "Los Angeles - Miami";
        $fl5->save();
    }
}
