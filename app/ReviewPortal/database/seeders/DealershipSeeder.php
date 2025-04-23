<?php

namespace Database\Seeders;

use App\Models\Dealership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DealershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dealerships = [
            ['name' => 'AutoMax', 'city' => 'Dallas', 'address' => '100 Elm St', 'zip_code' => '75201', 'state' => 'TX'],
            ['name' => 'CarHub', 'city' => 'Austin', 'address' => '200 Oak Ave', 'zip_code' => '73301', 'state' => 'TX'],
            ['name' => 'DriveNow', 'city' => 'Phoenix', 'address' => '300 Maple Rd', 'zip_code' => '85001', 'state' => 'AZ'],
            ['name' => 'WheelDeal', 'city' => 'Miami', 'address' => '400 Pine St', 'zip_code' => '33101', 'state' => 'FL'],
            ['name' => 'MotorWorld', 'city' => 'Atlanta', 'address' => '500 Birch Blvd', 'zip_code' => '30301', 'state' => 'GA'],
            ['name' => 'CityCars', 'city' => 'Seattle', 'address' => '600 Cedar Ln', 'zip_code' => '98101', 'state' => 'WA'],
            ['name' => 'RideAway', 'city' => 'Denver', 'address' => '700 Aspen Way', 'zip_code' => '80201', 'state' => 'CO'],
            ['name' => 'CarNation', 'city' => 'Chicago', 'address' => '800 Spruce Dr', 'zip_code' => '60601', 'state' => 'IL'],
            ['name' => 'ZoomAuto', 'city' => 'Boston', 'address' => '900 Willow Pl', 'zip_code' => '02108', 'state' => 'MA'],
            ['name' => 'Highway Motors', 'city' => 'Las Vegas', 'address' => '1000 Desert St', 'zip_code' => '89101', 'state' => 'NV'],
        ];

        foreach ($dealerships as $dealership) {
            Dealership::create($dealership);
        }
    }
}
