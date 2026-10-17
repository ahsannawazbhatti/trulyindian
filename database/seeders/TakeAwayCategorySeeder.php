<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TakeAwayCategorySeeder extends Seeder
{
    public static array $categoryIds = [];
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        DB::table('take_away')->delete();
        DB::table('take_away_category')->delete();

        $categories = [
            "Kycklingrätter",
            "Lammrätter",
            "Vegetariska Rätter",
            "Risrätter",
            "Skaldjursrätter",
            "Risrätter",
            "Bröd och Tillbehör",
        ];

        foreach ($categories as $name) {
            $id = DB::table('take_away_category')->insertGetId([
                'name'       => $name,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            self::$categoryIds[$name] = $id;
        }
    }
}
