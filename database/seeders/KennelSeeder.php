<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KennelSeeder extends Seeder
{
    public function run()
    {
        DB::table('kennels')->insert([
            [
                'name' => 'Happy Paws Kennel',
                'city' => 'Amsterdam',
                'address' => '123 Bark Street',
                'post_code' => '1011AB',
                'capacity' => 50,
                'open_from' => '08:00:00',
                'open_until' => '18:00:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cozy Canines',
                'city' => 'Rotterdam',
                'address' => '456 Woof Avenue',
                'post_code' => '3011CD',
                'capacity' => 30,
                'open_from' => '09:00:00',
                'open_until' => '17:00:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more kennel entries as needed
        ]);
    }
}
