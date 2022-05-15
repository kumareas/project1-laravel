<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('first/{id}', [Firstcontroller::class,'first']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('customer', [Customercontroller::class,'customer']);

Route::get('about/{id}', function ($id){
    return 'About'.$ids;
});
Route::get('test',function()
{
    return view('components.first');
});

Route::view ('welcome','welcome', ['name' => 'naanum coder']);

Route::get('/name/{name}', function ($name) {
    return $name;
})->where('name', '[A-Za-z]+');
 
Route::get('/number/{id}', function ($id) {
    return $id;
})->where('id', '[0-9]+');
 
Route::get('/user/{id}/{name}', function ($id, $name) {
    return $id.'  '.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
*/

Route::get('customer', [CustomerController::class,'index']);
Route::post('customer-save', [CustomerController::class,'save']);