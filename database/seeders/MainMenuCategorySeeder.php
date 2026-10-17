<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MainMenuCategorySeeder extends Seeder
{
    public static array $categoryIds = [];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('main_menu')->delete();
        DB::table('main_menu_category')->delete();

        $categories = [
            "Förrätter",
            "Kycklingrätter",
            "Lammrätter",
            "Vegetariska Rätter",
            "Risrätter",
            "Skaldjursrätter",
            "Naan Rolls",
            "Bröd och Tillbehör",
            "Dessert",
            "Dryck",
        ];

        foreach ($categories as $name) {
            $id = DB::table('main_menu_category')->insertGetId([
                'name'       => $name,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            self::$categoryIds[$name] = $id;
        }
    }
}
