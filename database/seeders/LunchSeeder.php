<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class LunchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
     {
        // Use IDs from category seeder
        $ids = LunchCategorySeeder::$categoryIds;

         $mainMenu = [
            //Lammrätter
            [   
                'lunch_category_id'          => $ids['Lammrätter'],
                'serial_no'                  => "1",
                'name'                       => "Lamm Korma",
                'price'                      => 139,
                'ingredient'                 => "Lammfile i kryddig Sydindisk Curry.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Lammrätter'],
                'serial_no'                  => "2",
                'name'                       => "Palak Gosht",
                'price'                      => 139,
                'ingredient'                 => "Lammfile tillagad i kryddig spenatsås.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Lammrätter'],
                'serial_no'                  => "3",
                'name'                       => "Kadai Gosht",
                'price'                      => 139,
                'ingredient'                 => "Lammfile tillagad i massalasås, Paprika, röd chilli och hel koriander.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
             //Kycklingätter
            [   
                'lunch_category_id'          => $ids['Kycklingrätter'],
                'serial_no'                  => "1",
                'name'                       => "Chicken Kali Mirch",
                'price'                      => 119,
                'ingredient'                 => "Kycklingfile i sås baserad på cashewnötter toppad med svartpeppar.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Kycklingrätter'],
                'serial_no'                  => "2",
                'name'                       => "Chicken Lababdar",
                'price'                      => 119,
                'ingredient'                 => "Kycklingfile, specialite från östra indien Syrlig,krämig och kryddig (Innehåller spår av nötter).",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Kycklingrätter'],
                'serial_no'                  => "3",
                'name'                       => "Truly Indian Chef's Chicken Curry",
                'price'                      => 119,
                'ingredient'                 => "Kycklingfile i chef's curry.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Kycklingrätter'],
                'serial_no'                  => "4",
                'name'                       => "Chicken Saag",
                'price'                      => 119,
                'ingredient'                 => "Tandoorigrillad kycklingfile i kryddig spenatsås.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            // Vegetariskt
            [   
                'lunch_category_id'          => $ids['Vegetariskt'],
                'serial_no'                  => "1",
                'name'                       => "Kadai Paneer",
                'price'                      => 119,
                'ingredient'                 => "Hemlagad ost i masalasås, paprika, röd chilli och hel koriander.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Vegetariskt'],
                'serial_no'                  => "2",
                'name'                       => "Veg Kofta",
                'price'                      => 119,
                'ingredient'                 => "Friterade kryddiga och vegetariska knyten tillagade i kryddig gräddsas.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Vegetariskt'],
                'serial_no'                  => "3",
                'name'                       => "Channa Masala",
                'price'                      => 119,
                'ingredient'                 => "En indisk favorit med kikärtor special säs(gluten och laktosfri).",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Vegetariskt'],
                'serial_no'                  => "4",
                'name'                       => "Dal Tadka",
                'price'                      => 119,
                'ingredient'                 => "Gula linser med svarta senaps frön och röd chilli(gluten och laktosfri).",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Vegetariskt'],
                'serial_no'                  => "5",
                'name'                       => "Alloo Gobi",
                'price'                      => 119,
                'ingredient'                 => "Kryddig rätt med blomkål och potatis(gluten och laktosfri).",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            //Nya Indiska Rätter
            [   
                'lunch_category_id'          => $ids['Nya Indiska Rätter'],
                'serial_no'                  => "1",
                'name'                       => "Chicken Do Piaza",
                'price'                      => 119,
                'ingredient'                 => "Kycklingfilé tillagad med färsk ingefära, lök, vitlök, tomat och en kryddblandning.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Nya Indiska Rätter'],
                'serial_no'                  => "2",
                'name'                       => "Chicken Jalfrezi",
                'price'                      => 119,
                'ingredient'                 => " Kycklingfilé tillagad med färsk Grönsaker en kryddblandning.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Nya Indiska Rätter'],
                'serial_no'                  => "3",
                'name'                       => "Chicken Madras",
                'price'                      => 119,
                'ingredient'                 => "Kycklingfilé med doft av färsk koriander i tamarin kryddade curryblad och kokossås.",
                'spicy_category_id'          => 3,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'lunch_category_id'          => $ids['Nya Indiska Rätter'],
                'serial_no'                  => "4",
                'name'                       => "Räkor Masala",
                'price'                      => 149,
                'ingredient'                 => "Räkor tillagad med färska tomater, rödlök, och masalasäs.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Nya Indiska Rätter'],
                'serial_no'                  => "5",
                'name'                       => "Chicken Mynt Masala",
                'price'                      => 119,
                'ingredient'                 => "Kycklingfilé tillagad i masala, mynt, kokosmjölk.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            // [
            //     'lunch_category_id'          => $ids['Nya Indiska Rätter'],
            //     'serial_no'                  => "5",
            //     'name'                       => "BAINGAN BURTHA. (vegetal)",
            //     'price'                      => 109,
            //     'ingredient'                 => "Auberginegryta med lök och tomat.",
            //     'spicy_category_id'          => 1,
            //     'created_at'                 => Carbon::now(),
            //     'updated_at'                 => Carbon::now()
            // ],

            //Truluy Indiska Populära Rätter
             [   
                'lunch_category_id'          => $ids['Truluy Indiska Populära Rätter'],
                'serial_no'                  => "1",
                'name'                       => "Butter Chicken",
                'price'                      => 119,
                'ingredient'                 => "Kycklingfilé tillagad i smör och gräddsås.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Truluy Indiska Populära Rätter'],
                'serial_no'                  => "2",
                'name'                       => "Chichen Tikka Masala",
                'price'                      => 119,
                'ingredient'                 => "Kycklingfilé tillagad i en kryddig sås toppad med ingefära, grön chili och koriander.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'lunch_category_id'          => $ids['Truluy Indiska Populära Rätter'],
                'serial_no'                  => "3",
                'name'                       => "Kadai Chicken",
                'price'                      => 119,
                'ingredient'                 => "Kycklingfilé med lök, paprika, ingefära, koriander och en blandning av kryddor.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'lunch_category_id'          => $ids['Truluy Indiska Populära Rätter'],
                'serial_no'                  => "4",
                'name'                       => "Truly Indian Chef's Lamm Curry",
                'price'                      => 139,
                'ingredient'                 => "Lammfile i Chef s Curry.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
             [
                'lunch_category_id'          => $ids['Truluy Indiska Populära Rätter'],
                'serial_no'                  => "5",
                'name'                       => "Shahi Paneer",
                'price'                      => 119,
                'ingredient'                 => "Hemlagad ost kryddig gräddesås.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'lunch_category_id'          => $ids['Truluy Indiska Populära Rätter'],
                'serial_no'                  => "6",
                'name'                       => "Palak Paneer",
                'price'                      => 119,
                'ingredient'                 => "Hemlagad ost tillagad i spenatsås.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            //Stående alternativ
            [
                'lunch_category_id'          => $ids['Stående alternativ'],
                'serial_no'                  => "1",
                'name'                       => "Extra nan ",
                'price'                      => 25,
                'ingredient'                 => "",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'lunch_category_id'          => $ids['Stående alternativ'],
                'serial_no'                  => "2",
                'name'                       => "Vitlöksnan ",
                'price'                      => 30,
                'ingredient'                 => "",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],

        ];

        DB::table('lunch')->insert($mainMenu);
    }
}
