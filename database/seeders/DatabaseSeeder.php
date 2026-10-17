<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SpicyCategorySeeder::class);
        $this->call(MainMenuCategorySeeder::class);
        $this->call(MainMenuSeeder::class);
        $this->call(LunchCategorySeeder::class);
        $this->call(LunchSeeder::class);
        $this->call(TakeAwayCategorySeeder::class);
        $this->call(TakeAwaySeeder::class);
    }
}
