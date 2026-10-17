<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Route;


class MenuHelper
{
    public static function getChillyImg($type)
    {
        $imgTag = "<img class='chilly' src='assets/img/chilly.png'>";

        switch ($type) {
            case '1':
                return $imgTag;
            case '2':
                return $imgTag . $imgTag;
            case '3':
                return $imgTag . $imgTag . $imgTag;
            case '4':
                return $imgTag . $imgTag . $imgTag . $imgTag;
            default:
                return '';
        }
    }

    public static function getChillyTitle() {
        return '<hr><h5 style="text-align:center; font-size:1rem;">
            Mild <img class="top-chilly" src="' . asset('assets/img/chilly.png') . '" alt="Mild">
            Mild Stark <img class="top-chilly" src="' . asset('assets/img/chilly.png') . '" alt="Mild Stark">
            <img class="top-chilly" src="' . asset('assets/img/chilly.png') . '" alt="Mild Stark">,
            Stark <img class="top-chilly" src="' . asset('assets/img/chilly.png') . '" alt="Stark">
            <img class="top-chilly" src="' . asset('assets/img/chilly.png') . '" alt="Stark">
            <img class="top-chilly" src="' . asset('assets/img/chilly.png') . '" alt="Stark">,
            Mycket Stark <img class="top-chilly" src="' . asset('assets/img/chilly.png') . '" alt="Mycket Stark">
            <img class="top-chilly" src="' . asset('assets/img/chilly.png') . '" alt="Mycket Stark">
            <img class="top-chilly" src="' . asset('assets/img/chilly.png') . '" alt="Mycket Stark">
            <img class="top-chilly" src="' . asset('assets/img/chilly.png') . '" alt="Mycket Stark">
            </h5><hr><br>';
    }

     public static function activeLink($routeNames)
        {
            if (is_array($routeNames)) {
                return in_array(Route::currentRouteName(), $routeNames) ? 'active' : '';
            }
            return Route::currentRouteName() === $routeNames ? 'active' : '';
        }
}
