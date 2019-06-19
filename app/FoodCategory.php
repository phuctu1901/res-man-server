<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    protected $table = 'foodcategories';
    protected $fillable = ['title'];
    public $timestamps = false;
    //
}
