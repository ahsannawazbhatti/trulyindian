<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lunch extends Model
{
    protected $table = 'lunch';

    protected $fillable = ['lunch_category_id', 'serial_no', 'name', 'price', 'ingredient', 'spicy_category_id' ];

    public function takeAwayCategory() {
        return $this->belongsTo('\App\LunchCategory', 'lunch_category_id');
    }

    public function spicyCategory() {
        return $this->belongsTo('\App\SpicyCategory', 'spicy_category_id');
    }
}
