<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TakeAwayCategory extends Model
{
    protected $table = 'take_away_category';

    protected $fillable = ['name'];

    public function takeAway()
    {
        return $this->hasMany(TakeAway::class, 'take_away_category_id');
    }
}
