<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MainMenu;

class MainMenuCategory extends Model
{
    protected $table = 'main_menu_category';

    protected $fillable = ['name'];

    public function mainMenu()
    {
        return $this->hasMany(MainMenu::class, 'main_menu_category_id');
    }
}
