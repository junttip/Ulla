<?php

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use App\Http\Controllers\UllaController;
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

Route::get('greetings', 'GreetingController@index');

Route::post('greeting', 'GreetingController@store');

Route::put('greeting',  'GreetingController@store');

Route::delete('greeting/{id}',  'GreetingController@destroy');

Route::get('citys', 'CityController@index');

Route::post('city', 'CityController@store');



//list Quips

Route::get('quips', 'QuipController@index');
Route::post('quip', 'QuipController@store');
Route::put('quip', 'QuipController@store');
Route::get('quip/{id}', 'QuipController@show');


Route::post('testipost', function(){
    return 'Post is working';
});
Route::get('testiget', function(){
    return 'Get is working';
});