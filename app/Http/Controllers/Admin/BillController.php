<?php

namespace App\Http\Controllers\Admin;

use App\Bill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    public  function addBillInfo(Request $request){
        $bill_id = $request->bill_id;
        $food_id=$request->food_id;
        $food_count=$request->food_count;
        $billInfo =DB::select('call addBillInfo(?,?,?)',[$bill_id,$food_id,$food_count]);
//        dump($bill_id, $food_id, $food_count);
    }

    public  function addBill(Request $request){
        $table_id = $request->table_id;
        $bill =DB::select('call addBill(?)',[$table_id]);
//        dump($bill_id, $food_id, $food_count);
    }

    public  function  getBillUnPaidByTableID($table_id){
        $bills = Bill::where('table_id',$table_id)->where('isPaid',0)->get('id')->first();
        if ($bills){
            return ($bills['id']);
        }
        return 0;
//        return $bills;
    }

    public function loadMenuByTableId($table_id){
        $bills =DB::select('call loadMenuByTable(?)',[$table_id]);
        return $bills;
    }

    public  function discount(Request $request){
        $bill_id = $request->bill_id;
        $discount=$request->discount;
        DB::select('call addDiscount(?,?)',[$bill_id,$discount]);
    }

    public  function checkout(Request $request){
        $bill_id = $request->bill_id;
        DB::select('call checkout(?)',[$bill_id]);
    }

    public function loadpayhistory(Request $request){
        $date=$request->date;
        return DB::select('call loadPayHistory(?)',["$date"]);

    }
}
