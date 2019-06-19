<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    protected $primaryKey = 'id'; // or null
    public $incrementing=true;
    protected $fillable=['title','foodcategory_id', 'unit_id','price', 'isAvailable','isDeleted'];
    public $timestamps=false;
}
