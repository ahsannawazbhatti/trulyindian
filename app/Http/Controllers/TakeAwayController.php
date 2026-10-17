<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TakeAwayCategory;

class TakeAwayController extends Controller
{
    public function takeAwayMenu()
    {
        $takeAwayCategories = TakeAwayCategory::all();

        // For structured data
        $menuItems = [];

        foreach ($takeAwayCategories as $category) {
            foreach ($category->takeAway as $item) {
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

        $structuredDataTakeAway = json_encode([
            "@context" => "https://schema.org",
            "@type" => "Menu",
            "name" => "Take Away Meny – Truly Indian Trollhättan",
            "url" => route('take-away-menu'),
            "hasMenuItem" => $menuItems
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        return view('take-away')->with([
            'takeAwayCategories' => $takeAwayCategories,
            'structuredDataTakeAway' => $structuredDataTakeAway
        ]);
    }
}
