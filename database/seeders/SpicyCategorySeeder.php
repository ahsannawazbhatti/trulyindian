<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SpicyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('spicy_category')->truncate();
        $spicyCategory = [
            [
                'name'           => "Mild",
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now()
            ],
            [
                'name'           => "Mild Stark",
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now()
            ],
            [
                'name'           => "Stark",
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now()
            ],
            [
                'name'           => "Mycket Stark",
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now()
            ]
        ];

        DB::table('spicy_category')->insert($spicyCategory);
    }
}
