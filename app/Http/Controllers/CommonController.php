<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    // public function home() {
    //     return view('home');
    // }

    public function aboutUs() {
        return view('about-us');
    }

     public function home() {
        $imageUrl = asset('assets/img/logo/logo.png');  // Full URL to your logo
        $siteUrl = url('/');                    // Your homepage URL
    
        $structuredData = json_encode([
            "@context" => "https://schema.org",
            "@type" => "Restaurant",
            "name" => "Truly Indian",
            "image" => $imageUrl,
            "url" => $siteUrl,
            "logo" => $imageUrl,
            "telephone" => "0520-480-900",
            "priceRange" => "Sek",
            "servesCuisine" => "Indian",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "Storgatan 44.",
                "postalCode" => "46130",
                "addressLocality" => "Trollhättan",
                "addressCountry" => "SE",
            ],
            "openingHoursSpecification" => [
                [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                    "opens" => "11:00",
                    "closes" => "21:00",
                ],
            ],
            "sameAs" => [
                "https://www.facebook.com/100040422200323",
                "https://www.instagram.com/trulyindianrestaurants",
            ],
           "menu" => [
                "https://trulyindian.se/lunch-meny",
                "https://trulyindian.se/take-away-meny"
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    
        return view('home', compact('structuredData'));
    }

    public function gallery() {
        return view('gallery');
    }
     public function catering() {
        return view('catering');
    }

    public function downloadPdf() {
        $file = public_path('files/menu.pdf');
        return response()->download($file, 'Truly-Indian-Menu.pdf');
    }
}
