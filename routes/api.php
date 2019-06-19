<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('food', 'Admin\FoodController@getall');
Route::get('food/{category_id}', 'Admin\FoodController@getFoodById');
Route::post('food/add','Admin\FoodController@add');

Route::get('foodcategory', 'Admin\FoodCategoryController@getall');
Route::post('foodcategory/add', 'Admin\FoodCategoryController@add');

Route::get('table', 'Admin\TableController@getall');
Route::get('table/add', 'Admin\TableController@add');
Route::get('table/{id}', 'Admin\TableController@getById');

Route::post('table', 'Admin\TableController@add');


Route::get('unit', 'Admin\UnitController@getall');
Route::get('tablestatus', 'Admin\TableStatusController@getall');

Route::post('addBillInfo', 'Admin\BillController@addBillInfo');
Route::post('addBill', 'Admin\BillController@addBill');
Route::post('discount','Admin\BillController@discount');
Route::post('checkout','Admin\BillController@checkout');

Route::post('loadpayhistory','Admin\BillController@loadpayhistory');

Route::get('loadMenuByTableId/{table_id}', 'Admin\BillController@loadMenuByTableId');

Route::get('getBillUnPaid/{table_id}', 'Admin\BillController@getBillUnPaidByTableID');


Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});
