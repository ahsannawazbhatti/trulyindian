<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MainMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Use IDs from category seeder
        $ids = MainMenuCategorySeeder::$categoryIds;

         $mainMenu = [
            //Förrätter
            [   
                'main_menu_category_id'      => $ids['Förrätter'],
                'serial_no'                  => "1",
                'name'                       => "Paneer Tikka",
                'price'                      => 159,
                'ingredient'                 => "Marinerad, hemlagad ost, grillad i Tandoor.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Förrätter'],
                'serial_no'                  => "2",
                'name'                       => "Tandoori Chicken Tikka",
                'price'                      => 159,
                'ingredient'                 => "Grillade tandoorimarinerade kycklingfilé, serveras med myntasås.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Förrätter'],
                'serial_no'                  => "3",
                'name'                       => "Chicken Malai Tikka",
                'price'                      => 159,
                'ingredient'                 => "Cashewnötter, ost och yoghurtmarinerad kycklingfilé, grillad i Tandoor.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Förrätter'],
                'serial_no'                  => "4",
                'name'                       => "Mutton Seekh Kabab",
                'price'                      => 159,
                'ingredient'                 => "kryddad lammfärs på spett, grillad i Tandoor.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
             [
                'main_menu_category_id'      => $ids['Förrätter'],
                'serial_no'                  => "5",
                'name'                       => "Samosa, veg.",
                'price'                      => 59,
                'ingredient'                 => "Friterad Pirog, fylld med kryddad potatis.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            //Kycklingrätter
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "1",
                'name'                       => "Butter Chicken",
                'price'                      => 169,
                'ingredient'                 => "Kycklingfilé tillagad i smör och gräddsås.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "2",
                'name'                       => "Chicken Kali Mirch",
                'price'                      => 169,
                'ingredient'                 => "Kycklingfilé i sås baserad på cashewnötter, toppad med svartpeppar.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "3",
                'name'                       => "Chicken Lababdar",
                'price'                      => 169,
                'ingredient'                 => "Kycklingfilé, specialité från östra Indien. Syrlig. krämig och kryddig (Innehåller spår av nötter).",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "4",
                'name'                       => "Chichen Tikka Masala",
                'price'                      => 169,
                'ingredient'                 => "kycklingfilé tillagad i en kryddig sås toppad med ingefära, grön chili och koriander.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "5",
                'name'                       => "Truly Indian Chef's Chicken Curry",
                'price'                      => 169,
                'ingredient'                 => "kycklingfilé I Chef Curry.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "6",
                'name'                       => "Chicken Saag",
                'price'                      => 169,
                'ingredient'                 => "kycklingfilé tillagad med kryddor och spenat.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "7",
                'name'                       => "Kadai Chicken",
                'price'                      => 169,
                'ingredient'                 => "Kycklingfilé med lök, paprika, ingefära, koriander och en blandning av kryddor.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "8",
                'name'                       => "Murg Achari",
                'price'                      => 169,
                'ingredient'                 => "kycklingfilé med blandade pickles och kryddor.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "9",
                'name'                       => "Dahi Chicken",
                'price'                      => 169,
                'ingredient'                 => "kycklingfilé i yoghurt och kryddblandning.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "10",
                'name'                       => "Chicken Korma",
                'price'                      => 169,
                'ingredient'                 => "kycklingfilé tillagad med cashewnötter i kokossås och toppad med mandelflarn.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "11",
                'name'                       => "Chicken Vindaloo",
                'price'                      => 169,
                'ingredient'                 => "kycklingfilé tillsammans med kryddiga torkade röda chilifrukter.",
                'spicy_category_id'          => 3,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "12",
                'name'                       => "Chichen Do Piaza",
                'price'                      => 169,
                'ingredient'                 => "kycklingfilé tillagad med färsk ingefära, lök, vitlök, tomat och en kryddblandning.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "13",
                'name'                       => "Chichen Jalfrezi",
                'price'                      => 169,
                'ingredient'                 => "kycklingfilé tillagad med färska grönsaker och indisk ost i en kryddig krämsås.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [   
                'main_menu_category_id'      => $ids['Kycklingrätter'],
                'serial_no'                  => "14",
                'name'                       => "Chicken Madras",
                'price'                      => 169,
                'ingredient'                 => "Kycklingfilé med doft av färsk koriander i tamarin kryddade curryblad och kokossås.",
                'spicy_category_id'          => 3,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            //Lammrätter
            [
                'main_menu_category_id'      => $ids['Lammrätter'],
                'serial_no'                  => "1",
                'name'                       => "Lamm Tikka Masala",
                'price'                      => 179,
                'ingredient'                 => "lammfilé tillagat i tandoorikryddor med en blandning av kryddor.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Lammrätter'],
                'serial_no'                  => "2",
                'name'                       => "Lamm Vindaloo",
                'price'                      => 179,
                'ingredient'                 => "lammfilé tillsammans med den kryddiga torkade röda chilin.",
                'spicy_category_id'          => 3,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Lammrätter'],
                'serial_no'                  => "3",
                'name'                       => "Truly Indian Chef's Lamm Curry",
                'price'                      => 179,
                'ingredient'                 => "lammfilé tillagat med kockens specialkryddor.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Lammrätter'],
                'serial_no'                  => "4",
                'name'                       => "Lamm Korma",
                'price'                      => 179,
                'ingredient'                 => "lammfilé tillagad i kokosmjölk och cashewnötter.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Lammrätter'],
                'serial_no'                  => "5",
                'name'                       => "Palak Gosht",
                'price'                      => 179,
                'ingredient'                 => "Lammfilé tillagad i kryddig spenatsås.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Lammrätter'],
                'serial_no'                  => "6",
                'name'                       => "Kadai Gosht",
                'price'                      => 179,
                'ingredient'                 => "Lammfilé tillagad i massalasās, paprika, röd chilli och hel koriander.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Lammrätter'],
                'serial_no'                  => "7",
                'name'                       => "Lamm Madras",
                'price'                      => 179,
                'ingredient'                 => "Lammfilé med doft av färsk koriander i tamarin kryddade curryblad och kokossås.",
                'spicy_category_id'          => 3,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            //Vegetariska Rätter
            [
                'main_menu_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "1",
                'name'                       => "Paneer Masala",
                'price'                      => 169,
                'ingredient'                 => "Hemlagad Ost i masalasäs.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "2",
                'name'                       => "Shahi Paneer",
                'price'                      => 169,
                'ingredient'                 => "Hemlagad ost i kryddig gräddsås.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "3",
                'name'                       => "Palak Paneer",
                'price'                      => 169,
                'ingredient'                 => "Hemlagad ost tillagad i spenatsås.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "4",
                'name'                       => "Kadai Paneer",
                'price'                      => 169,
                'ingredient'                 => "Hemlagad ost i masalasås, paprika, röd chilli och hel koriander.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "5",
                'name'                       => "Seasonal Vegetables",
                'price'                      => 169,
                'ingredient'                 => "Blandade grönsaker med hemlagad ost.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "6",
                'name'                       => "Veg. Kofta",
                'price'                      => 169,
                'ingredient'                 => "Friterade, kryddiga och vegetariska knyten tillagade i Kryddig gräddsås.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "7",
                'name'                       => "Channa Masala: (Vegan)",
                'price'                      => 169,
                'ingredient'                 => "En indisk favorit med kikärtor special sas.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "8",
                'name'                       => "Dal Makhani",
                'price'                      => 169,
                'ingredient'                 => "Blandade linser tillagade i gräddsås.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "9",
                'name'                       => "Dal Tadka",
                'price'                      => 169,
                'ingredient'                 => "Gula linser med svarta senaps frön och röd chilli.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Vegetariska Rätter'],
                'serial_no'                  => "10",
                'name'                       => "Aloo Ghobi",
                'price'                      => 169,
                'ingredient'                 => "Kryddig rätt med blomkål och potatis.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            // [
            //     'main_menu_category_id'      => $ids['Vegetariska Rätter'],
            //     'serial_no'                  => "11",
            //     'name'                       => "BAINGAN BURTHA. (vegetal)",
            //     'price'                      => 159,
            //     'ingredient'                 => "Auberginegryta med lök och tomat.",
            //     'spicy_category_id'          => 0,
            //     'created_at'                 => Carbon::now(),
            //     'updated_at'                 => Carbon::now()
            // ],
            //Risrätter
            [
                'main_menu_category_id'      => $ids['Risrätter'],
                'serial_no'                  => "1",
                'name'                       => "Chicken Biryani",
                'price'                      => 169,
                'ingredient'                 => "Risrätt med kycklingfilé.en specialité från staden Hydrabad Chicken Biryani serveras med Mix Raita och Papad.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Risrätter'],
                'serial_no'                  => "2",
                'name'                       => "Lamm Biryani",
                'price'                      => 179,
                'ingredient'                 => "Risrätt med lammfilé, en specialité från staden Hydrabad Lamm Biryani serveras med Mix Raita och Papad.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Risrätter'],
                'serial_no'                  => "3",
                'name'                       => "Vegetable Biryani",
                'price'                      => 169,
                'ingredient'                 => "Risrätt med blandade grönsaker och hemlagad ost. Serveras med Mix raita och Naan bröd. En vegetarisk favorit.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Risrätter'],
                'serial_no'                  => "4",
                'name'                       => "Prawns Biryani",
                'price'                      => 185,
                'ingredient'                 => "Räkor med färsk ingefära, koriander, lök i speciella biryani-kryddor.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            //Skaldjursrätter
            [
                'main_menu_category_id'      => $ids['Skaldjursrätter'],
                'serial_no'                  => "1",
                'name'                       => "Truly Indian Räkor Curry Chef'Special",
                'price'                      => 185,
                'ingredient'                 => "Räkor tillagad med chef's masalasăs.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Skaldjursrätter'],
                'serial_no'                  => "2",
                'name'                       => "Räkor Jalfrezi",
                'price'                      => 185,
                'ingredient'                 => "Räkor tillagad med färska tomater, rödlök.paprika och masalasäs.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Skaldjursrätter'],
                'serial_no'                  => "3",
                'name'                       => "Räkor Vindaloo",
                'price'                      => 185,
                'ingredient'                 => "Räkor tillagad med piri piri i rödvin sås.",
                'spicy_category_id'          => 3,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Skaldjursrätter'],
                'serial_no'                  => "4",
                'name'                       => "Räkor Masala",
                'price'                      => 185,
                'ingredient'                 => "Räkor tillagad med färska tomater, rödlök, och masalasäs.",
                'spicy_category_id'          => 2,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            //Naan Rolls
            [
                'main_menu_category_id'      => $ids['Naan Rolls'],
                'serial_no'                  => "1",
                'name'                       => "Chicken Tikka Naan Roll",
                'price'                      => 139,
                'ingredient'                 => "Tandoorigrillad kycklingfilé i Naanbröd med sallad och săs.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Naan Rolls'],
                'serial_no'                  => "2",
                'name'                       => "Mutton Seekh Naan Roll",
                'price'                      => 149,
                'ingredient'                 => "Lammfärsspett i bröd med sallad.",
                'spicy_category_id'          => 1,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            //Bröd och Tillbehör
             [
                'main_menu_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "1",
                'name'                       => "Naan Bröd",
                'price'                      => 25,
                'ingredient'                 => "Mjukt bröd av vetemjöl gräddat i Tandooriugn.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "2",
                'name'                       => "Vitlök Naan Bröd",
                'price'                      => 30,
                'ingredient'                 => "Naan med vitlök.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "3",
                'name'                       => "Aloo Paratha",
                'price'                      => 49,
                'ingredient'                 => "Inbakat bröd med kryddad potatis.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "4",
                'name'                       => "Paneer Naan",
                'price'                      => 59,
                'ingredient'                 => "Naan med hemlagad ost.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "5",
                'name'                       => "Keema Naan",
                'price'                      => 59,
                'ingredient'                 => "Kryddig naan med lammfärs.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "6",
                'name'                       => "Mix Raita",
                'price'                      => 49,
                'ingredient'                 => "Yoghurt med lök,gurka, tomat och koriander.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            // [
            //     'main_menu_category_id'      => $ids['Bröd och Tillbehör'],
            //     'serial_no'                  => "7",
            //     'name'                       => "Sallad",
            //     'price'                      => 39,
            //     'ingredient'                 => "Grönsallad.",
            //     'spicy_category_id'          => 0,
            //     'created_at'                 => Carbon::now(),
            //     'updated_at'                 => Carbon::now()
            // ],
            [
                'main_menu_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "7",
                'name'                       => "Papad Plain",
                'price'                      => 25,
                'ingredient'                 => "Tunna, krispiga papad, perfekt smakförhöjare för maten.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "8",
                'name'                       => "Extra Plain Basmati Rice",
                'price'                      => 39,
                'ingredient'                 => "Indiskt Basmatiris.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "9",
                'name'                       => "Mango Lassi.",
                'price'                      => 39,
                'ingredient'                 => "Yoghurtdryck med mangosmak.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "10",
                'name'                       => "Mynta Sås",
                'price'                      => 15,
                'ingredient'                 => "Yoghurt with mint.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Bröd och Tillbehör'],
                'serial_no'                  => "11",
                'name'                       => "Plain Yoghurt",
                'price'                      => 15,
                'ingredient'                 => "",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            //Dessert
             [
                'main_menu_category_id'      => $ids['Dessert'],
                'serial_no'                  => "1",
                'name'                       => "Gulab Jamun",
                'price'                      => 49,
                'ingredient'                 => "friterade minibollar isockerlag, serveras med vaniljglass.",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
             //Dryck
            [
                'main_menu_category_id'      => $ids['Dryck'],
                'serial_no'                  => "1",
                'name'                       => "Pepsi",
                'price'                      => 25,
                'ingredient'                 => "",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Dryck'],
                'serial_no'                  => "2",
                'name'                       => "Pepsi Max",
                'price'                      => 25,
                'ingredient'                 => "",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Dryck'],
                'serial_no'                  => "3",
                'name'                       => "7-Up",
                'price'                      => 25,
                'ingredient'                 => "",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Dryck'],
                'serial_no'                  => "4",
                'name'                       => "Ramlosa Naturell",
                'price'                      => 25,
                'ingredient'                 => "",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Dryck'],
                'serial_no'                  => "5",
                'name'                       => "Ramlosa Citron",
                'price'                      => 25,
                'ingredient'                 => "",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
            [
                'main_menu_category_id'      => $ids['Dryck'],
                'serial_no'                  => "6",
                'name'                       => "Ramlosa Granatäpple",
                'price'                      => 25,
                'ingredient'                 => "",
                'spicy_category_id'          => 0,
                'created_at'                 => Carbon::now(),
                'updated_at'                 => Carbon::now()
            ],
        ];

        DB::table('main_menu')->insert($mainMenu);
    }
}
