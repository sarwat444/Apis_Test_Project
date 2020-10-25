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
Route::get('country' ,  'contryController@allCountry');
Route::get('country/{id}' ,'contryController@getcountry');
Route::post('country' ,'contryController@addcountry');
Route::put('country/{id}' ,'contryController@updatecounty') ;
Route::delete('country/{id}' ,'contryController@deletecountry');