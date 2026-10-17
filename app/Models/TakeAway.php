<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TakeAway extends Model
{
    protected $table = 'take_away';

    protected $fillable = ['take_away_category_id', 'serial_no', 'name', 'price', 'ingredient', 'spicy_category_id' ];

    public function takeAwayCategory() {
        return $this->belongsTo('\App\TakeAwayCategory', 'take_away_category_id');
    }

    public function spicyCategory() {
        return $this->belongsTo('\App\SpicyCategory', 'spicy_category_id');
    }
}
