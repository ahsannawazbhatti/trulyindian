<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainMenu extends Model
{
    protected $table = 'main_menu';

    protected $fillable = ['main_menu_category_id', 'serial_no', 'name', 'price', 'ingredient', 'spicy_category_id' ];

    public function MainMenuCategory() {
        return $this->belongsTo('\App\MainMenuCategory', 'main_menu_category_id');
    }

    public function spicyCategory() {
        return $this->belongsTo('\App\SpicyCategory', 'spicy_category_id');
    }
}
