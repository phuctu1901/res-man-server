<?php

namespace App\Http\Controllers\Admin;

use App\TableStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableStatusController extends Controller
{
    //
    public function getall()
    {
        $tablestatus =TableStatus::all();
        return $tablestatus;
    }
}
