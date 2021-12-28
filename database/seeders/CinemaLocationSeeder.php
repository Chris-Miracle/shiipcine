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
            ["name" => "Banana Island"],
            ["name" => "Lekki Phase II"],
            ["name" => "Ikeja City Mall"]
        ];

        DB::table('cinema_locations')->insert($locations);
    }
}
