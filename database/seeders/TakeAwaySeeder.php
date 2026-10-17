<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TakeAwaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        // Use IDs from category seeder
        $ids = TakeAwayCategorySeeder::$categoryIds;

         $mainMenu = [
            //KycklingRätter  Serial number from 1 to 30 chicken items only
            [   
                'take_away_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "1",
                'name'                       => "Butter Chicken",
                'price'                      => 145,
                'ingredient'                 => "Kycklingfilé tillagad i smör och gräddsås.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'take_away_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "2",
                'name'                       => "Chichen Tikka Masala",
                'price'                      => 145,
                'ingredient'                 => "Kycklingfilé tillagad i en kryddig sås toppad med ingefära, grön chili och koriander.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'take_away_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "3",
                'name'                       => "Truly Indian Chef's Chicken Curry",
                'price'                      => 145,
                'ingredient'                 => "Kycklingfilé i Chef Curry och speciella kryddor.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'take_away_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "4",
                'name'                       => "Kadai Chicken(Laktosfri)",
                'price'                      => 145,
                'ingredient'                 => "Kycklingfilé med lök, paprika, ingefära, koriander och en blandning av kryddor.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'take_away_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "5",
                'name'                       => "Chicken Kali Mirch(Innehåller Nötter)",
                'price'                      => 145,
                'ingredient'                 => "Kycklingfilé i sås baserad på cashewnötter, toppad med svartpeppar.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'take_away_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "6",
                'name'                       => "Chicken Lababdar(Innehåller Nötter)",
                'price'                      => 145,
                'ingredient'                 => "Kycklingfilé, specialité från östra Indien. Syrlig. krämig och kryddig (Innehåller spår av nötter).",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'take_away_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "7",
                'name'                       => "Chicken Korma",
                'price'                      => 145,
                'ingredient'                 => "Kycklingfilé tillagad med cashewnötter i kokossås och toppad med mandelflarn.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],            
            [   
                'take_away_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "8",
                'name'                       => "Chicken Saag",
                'price'                      => 145,
                'ingredient'                 => "Tandoorigrillad kycklingfile i kryddig spenatsås.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'take_away_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "9",
                'name'                       => "Chicken Do Piaza",
                'price'                      => 145,
                'ingredient'                 => "Kycklingfilé tillagad med färsk ingefära, lök, vitlök, tomat och en kryddblandning.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'take_away_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "10",
                'name'                       => "Chichen Jalfrezi",
                'price'                      => 145,
                'ingredient'                 => "Kycklingfilé tillagad med färska grönsaker och indisk ost i en kryddig krämsås.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'take_away_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "11",
                'name'                       => "Chicken Madras(Väldigt Stark)",
                'price'                      => 145,
                'ingredient'                 => "Kycklingfilé med doft av färsk koriander i tamarin kryddade curryblad och kokossås.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'take_away_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "12",
                'name'                       => "Chicken Vindaloo (Väldigt Stark)",
                'price'                      => 145,
                'ingredient'                 => "Kycklingfilétillsammans med kryddiga torkade röda chilifrukter.",
                'spicy_category_id'          => 3,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'take_away_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "13",
                'name'                       => "Chicken Mynt Masala",
                'price'                      => 145,
                'ingredient'                 => "Kycklingfilé tillagad i masala, Mynt, kokosmjölk.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            //Lammrätter Serial number from 31 to 60 Lamm items only
            [
                'take_away_category_id'      => $ids['Lammrätter'],
                'serial_no'                  => "31",
                'name'                       => "Truly Indian Chef's Lamm Curry(Laktosfri)",
                'price'                      => 159,
                'ingredient'                 => "Lammfilé utan ben tillagat med kockens specialkryddor.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Lammrätter'],
                'serial_no'                  => "32",
                'name'                       => "Lamm Madras(Väldigt Stark)",
                'price'                      => 159,
                'ingredient'                 => "Lammfilé med doft av färsk koriander i tamarin kryddade curryblad och kokossås.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Lammrätter'],
                'serial_no'                  => "33",
                'name'                       => "Lamm Korma",
                'price'                      => 159,
                'ingredient'                 => "lammfilé tillagad i kokosmjölk och cashewnötter.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Lammrätter'],
                'serial_no'                  => "34",
                'name'                       => "Palak Lamm",
                'price'                      => 159,
                'ingredient'                 => "Lammfilé tillagad i kryddig spenatsås.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Lammrätter'],
                'serial_no'                  => "35",
                'name'                       => "Kadai Lamm",
                'price'                      => 159,
                'ingredient'                 => "Lammfilé tillagad i massalasās, paprika, röd chilli och hel koriander.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Lammrätter'],
                'serial_no'                  => "36",
                'name'                       => "Lamm Vindaloo(Väldigt Stark)",
                'price'                      => 159,
                'ingredient'                 => "Lammfilé tillsammans med den kryddiga torkade röda chilin.",
                'spicy_category_id'          => 3,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            //Vegetariska Rätter Serial number from 51 to 70 Vegetariska items only
            [
                'take_away_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "51",
                'name'                       => "Shahi Paneer",
                'price'                      => 145,
                'ingredient'                 => "Hemlagad Ost i kryddig gräddsås.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "52",
                'name'                       => "Aloo Saag",
                'price'                      => 145,
                'ingredient'                 => "Potatis i kryddig spenatsås.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "53",
                'name'                       => "Palak Paneer",
                'price'                      => 145,
                'ingredient'                 => "Hemlagad ost tillagad i spenatsås.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "54",
                'name'                       => "Kadai Paneer",
                'price'                      => 145,
                'ingredient'                 => "Hemlagad ost i masalasås, paprika, röd chilli och hel koriander.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "55",
                'name'                       => "Seasonal Vegetables",
                'price'                      => 145,
                'ingredient'                 => "Blandade grönsaker med hemlagad ost.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "56",
                'name'                       => "Veg Kofta",
                'price'                      => 145,
                'ingredient'                 => "Friterade, kryddiga och vegetariska knyten tillagade i Kryddig gräddsås.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ], 
            [
                'take_away_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "57",
                'name'                       => "Channa Masala: (Vegan går att göra laktosfri)",
                'price'                      => 145,
                'ingredient'                 => "En indisk favorit med kikärtor special sas.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "58",
                'name'                       => "Dal Makhani",
                'price'                      => 145,
                'ingredient'                 => "Blandade linser tillagade i gräddsås.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "59",
                'name'                       => "Dal Tadka",
                'price'                      => 145,
                'ingredient'                 => "Gula linser med svarta senaps frön och röd chilli.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "60",
                'name'                       => "Aloo Ghobi",
                'price'                      => 145,
                'ingredient'                 => "Kryddig rätt med blomkål och potatis.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "61",
                'name'                       => "Panner Mynt Masala",
                'price'                      => 145,
                'ingredient'                 => "Hamlagad ost med masalasås, Mynt och kokosmjölk.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            //Skaldjursrätter  Serial number from 71 to 80 Skaldjursrätter items only
            [
                'take_away_category_id'      => $ids['Skaldjursrätter'],
                'serial_no'                  => "71",
                'name'                       => "Truly Indian Räkor Curry Chef'Special",
                'price'                      => 169,
                'ingredient'                 => "Räkor tillagad med chef's masalasăs.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Skaldjursrätter'],
                'serial_no'                  => "72",
                'name'                       => "Räkor Tikka Masala",
                'price'                      => 169,
                'ingredient'                 => "Räkor tillagad med färska tomater, rödlök, och masalasäs.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Skaldjursrätter'],
                'serial_no'                  => "73",
                'name'                       => "Räkor Jalfrezi",
                'price'                      => 169,
                'ingredient'                 => "Räkor tillagad med färska tomater, rödlök.paprika och masalasäs.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
             //Risrätter Serial number from 81 to 90 Risrätter items only
            [
                'take_away_category_id'      => $ids['Risrätter'],
                'serial_no'                  => "81",
                'name'                       => "Chicken Biryani",
                'price'                      => 149,
                'ingredient'                 => "kycklingfile med Basmatiris serveras med Mix Raita.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Risrätter'],
                'serial_no'                  => "82",
                'name'                       => "Vegetable Biryani",
                'price'                      => 149,
                'ingredient'                 => "Grönsaker och hemost med Basmatiris serveras med Mix Raita..",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Risrätter'],
                'serial_no'                  => "83",
                'name'                       => "Lamm Biryani",
                'price'                      => 159,
                'ingredient'                 => "Lammfilé med Basmatiris serveras med Mix Raita..",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Risrätter'],
                'serial_no'                  => "84",
                'name'                       => "Prawns Biryani",
                'price'                      => 169,
                'ingredient'                 => "Räkor med Basmatiris serveras med Mix Raita..",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            //Bröd och Tillbehör
            [
                'take_away_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "101",
                'name'                       => "Mix Raita",
                'price'                      => 49,
                'ingredient'                 => "Yoghurt med lök,gurka, tomat och koriander.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "102",
                'name'                       => "Papad plain",
                'price'                      => 25,
                'ingredient'                 => "Tunna, krispiga papad, perfekt smakförhöjare för maten.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "103",
                'name'                       => "Extra Plain Basmati Rice",
                'price'                      => 39,
                'ingredient'                 => "Indiskt Basmatiris.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "104",
                'name'                       => "Samosa Veg",
                'price'                      => 49,
                'ingredient'                 => "Friterad pirog fylld med kryddad potatis.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "105",
                'name'                       => "Mango Lassi.",
                'price'                      => 39,
                'ingredient'                 => "Yoghurtdryck med mangosmak.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "106",
                'name'                       => "Extra plainNaan Bröd",
                'price'                      => 25,
                'ingredient'                 => "Mjukt bröd av vetemjöl gräddat i Tandooriugn.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "107",
                'name'                       => "Aloo Paratha",
                'price'                      => 39,
                'ingredient'                 => "Inbakat bröd med kryddad potatis.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "108",
                'name'                       => "Keema naan",
                'price'                      => 59,
                'ingredient'                 => "Kryddig naan med lammfärs.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'take_away_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "109",
                'name'                       => "Paneer naan",
                'price'                      => 59,
                'ingredient'                 => "Naan med hemlagad ost.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
        ];

        DB::table('take_away')->insert($mainMenu);
    }
}
