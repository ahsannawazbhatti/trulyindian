<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpiceCategory extends Model
{
    protected $table = 'spicy_category';

    protected $fillable = ['name'];

    public function spicy()
    {
        return $this->hasMany('\App\SpicyCategory', 'spicy_category_id');
    }
}
