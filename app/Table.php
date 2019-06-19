<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable=['title', 'tablestatus_id'];
    public $timestamps = false;
    //
}
