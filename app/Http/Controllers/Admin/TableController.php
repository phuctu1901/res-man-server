<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Table;

class TableController extends Controller
{
    public function getall()
    {
        $tables = Table::all();
        return $tables;
    }

    public function getById($table_id)
    {
        $table = Table::where('id',$table_id)->get()->first();
        return $table;
    }

    public function add()
    {
        $title = request('title');
        $tablestatus_id = request('tablestatus_id');
        $table = new Table([
            'title' => $title,
            'tablestatus_id' => $tablestatus_id
        ]);
        $table->save();
        return $table;
    }
}
