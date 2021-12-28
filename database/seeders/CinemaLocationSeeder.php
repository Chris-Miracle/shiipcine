<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CinemaLocation;
use DB;

class CinemaLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            ["location" => "Banana Island"],
            ["location" => "Lekki Phase II"],
            ["location" => "Ikeja City Mall"]
        ];

        DB::table('cinema_locations')->insert($locations);
    }
}
