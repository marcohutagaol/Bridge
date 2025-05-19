<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $universities = [
            [
                'name' => 'Universitas Indonesia',
                'degree' => 'S1',
                'ranking' => '1',
                'application_deadline' => Carbon::create(2025, 6, 30),
                'image_path' => 'images/universities/ui.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Institut Teknologi Bandung',
                'degree' => 'S1',
                'ranking' => '2',
                'application_deadline' => Carbon::create(2025, 7, 15),
                'image_path' => 'images/universities/itb.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Universitas Gadjah Mada',
                'degree' => 'S1',
                'ranking' => '3',
                'application_deadline' => Carbon::create(2025, 7, 10),
                'image_path' => 'images/universities/ugm.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Universitas Airlangga',
                'degree' => 'S2',
                'ranking' => '4',
                'application_deadline' => Carbon::create(2025, 8, 1),
                'image_path' => 'images/universities/unair.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Institut Teknologi Sepuluh Nopember',
                'degree' => 'S1',
                'ranking' => '5',
                'application_deadline' => Carbon::create(2025, 7, 20),
                'image_path' => 'images/universities/its.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('universities')->insert($universities);
    }
}