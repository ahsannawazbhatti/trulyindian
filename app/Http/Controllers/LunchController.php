<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LunchCategory;

class LunchController extends Controller
{
    public function lunchMenu()
    {
        // Eager load 'lunch' relationship to avoid N+1 queries
        $lunchCategories = LunchCategory::with('lunch')->get();

        // Prepare structured data for SEO
        $lunchMenuItems = [];

        foreach ($lunchCategories as $category) {
            foreach ($category->lunch as $item) {
                $lunchMenuItems[] = [
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

        $structuredDataLunch = json_encode([
            "@context" => "https://schema.org",
            "@type" => "Menu",
            "name" => "Lunch Meny – Truly Indian Trollhättan",
            "url" => route('lunch-menu'),
            "hasMenuItem" => $lunchMenuItems
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        // Pass structured data to view
        return view('lunch')->with([
            'lunchCategories' => $lunchCategories,
            'structuredDataLunch' => $structuredDataLunch
        ]);
    }
}
