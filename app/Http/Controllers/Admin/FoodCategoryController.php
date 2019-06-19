<?php

namespace App\Http\Controllers\Admin;

use App\FoodCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodCategoryController extends Controller
{
    //
    public function getall(){
        $food_categories=FoodCategory::all();
        return $food_categories;
    }
}
