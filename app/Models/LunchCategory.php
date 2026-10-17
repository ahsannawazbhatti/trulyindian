<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LunchCategory extends Model
{
    protected $table = 'lunch_category';

    protected $fillable = ['name'];

    public function lunch()
    {
        return $this->hasMany(Lunch::class, 'lunch_category_id');
    }
}
