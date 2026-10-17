<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainMenuCategory;

class MainMenuController extends Controller
{
    
    public function mainMenu()
    {
        $mainMenuCategories = MainMenuCategory::all();
        
        // Prepare structured data for SEO (JSON-LD)
        $menuItems = [];

        foreach ($mainMenuCategories as $category) {
            foreach ($category->mainMenu as $item) {
                $menuItems[] = [
                    "@type" => "MenuItem",
                    "name" => $item->name,
                    "description" => strip_tags($item->ingredient),
                    "offers" => [
                        "@type" => "Offer",
                        "price" => $item->price,
                        "priceCurrency" => "SEK"
                    ]
                ];
            }
        }

        $structuredDataMainMenu = json_encode([
            "@context" => "https://schema.org",
            "@type" => "Menu",
            "name" => "Alla Cart Meny – Truly Indian Trollhättan",
            "url" => route('main-menu'),
            "hasMenuItem" => $menuItems
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        return view('main-menu')->with([
            'mainMenuCategories' => $mainMenuCategories,
            'structuredDataMainMenu' => $structuredDataMainMenu
        ]);
    }
}
