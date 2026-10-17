<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LunchCategorySeeder extends Seeder
{
    public static array $categoryIds = [];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lunch')->delete();
        DB::table('lunch_category')->delete();

        $categories = [
            "Truluy Indiska Populära Rätter",
            "Nya Indiska Rätter",
            "Kycklingrätter",
            "Lammrätter",
            "Vegetariskt",           
            "Stående alternativ",
        ];

        foreach ($categories as $name) {
            $id = DB::table('lunch_category')->insertGetId([
                'name'       => $name,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            self::$categoryIds[$name] = $id;
        }
    }
}
