<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bus;
use App\Models\Trip;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Bus::insert([[
            'plateNumber' => 'VAN1111',
            'capacity' => 10
        ],[
            'plateNumber' => 'VAN2222',
            'capacity' => 15
        ],[
            'plateNumber' => 'TAXI111',
            'capacity' => 8
        ],[
            'plateNumber' => 'TAXI222',
            'capacity' => 6
        ],[
            'plateNumber' => 'CAND123',
            'capacity' => 35
        ]]);
        
    }
}
