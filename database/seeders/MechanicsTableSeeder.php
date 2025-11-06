<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MechanicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mechanics')->insert([
        [
            'name' => 'Nanage Garage',
            'latitude' => 6.9271,
            'longitude' => 79.8612,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Speedy Repairs',
            'latitude' => 6.9285,
            'longitude' => 79.8647,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'MechPro Colombo',
            'latitude' => 6.9269,
            'longitude' => 79.8580,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
