<?php

namespace App\Http\Controllers\Admin;

use App\Food;
use App\FoodCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    public function getall(){
        $foods = Food::all();
//        foreach ($foods as $food){
//            $food.foodcategory_id = FoodCategory::get()=>where('id',$food.foodcategory_id)
//        }
        return $foods;
    }

    public  function  getFoodById($category_id){
        $foods = Food::where('foodcategory_id',$category_id)->where('isDeleted',0)->where('isAvailable',1)->get();
//        foreach ($foods as $food){
//            $food.foodcategory_id = FoodCategory::get()=>where('id',$food.foodcategory_id)
//        }
        return $foods;
    }

    public function add(Request $request){
        $title=$request->title;
        $foodcategory_id=$request->foodcategory_id;
        $price=$request->price;
        $unit_id=$request->unit_id;
        $isAvailable=(int) $request->isAvailable;
        $isDeleted=(int) $request->isDeleted;
        $food = new Food([
            'title'=>$title,
            'foodcategory_id'=>$foodcategory_id,
            'price'=>$price,
            'unit_id'=>$unit_id,
            'isAvailable'=>$isAvailable,
            'isDeleted'=>$isDeleted
            ]);
        $food->save();
    }
}
