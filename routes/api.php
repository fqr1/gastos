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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/mi/data',function(){
  return json_encode(['test'=>'sucessful']);
});

Route::get('/expense','\App\Http\Controllers\ExpenseController@getExpense');
Route::post('/expense','\App\Http\Controllers\ExpenseController@postExpense');
Route::put('/expense','\App\Http\Controllers\ExpenseController@putExpense');
Route::delete('/expense','\App\Http\Controllers\ExpenseController@deleteExpense');
