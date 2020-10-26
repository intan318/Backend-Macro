<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//buat ngambil material
Route::get('/getMaterial','App\Http\Controllers\MaterialAreaController@getMaterial');
Route::get('/showMaterial', 'App\Http\Controllers\MaterialAreaController@showMaterial');
Route::post('/storeMaterialArea', 'App\Http\Controllers\MaterialAreaController@storeMaterialArea');
Route::put('/updateMaterialArea/{id}', 'App\Http\Controllers\MaterialAreaController@updateMaterialArea');

Route::post('/storeMaterial', 'App\Http\Controllers\MaterialController@storeMaterial');
Route::put('/updateMaterial/{id}', 'App\Http\Controllers\MaterialController@updateMaterial');

Route::get('/getAllArea', 'App\Http\Controllers\AreaController@getAllArea');
Route::get('/getAllCategory', 'App\Http\Controllers\CategoryController@getAllCategory');


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// }
// );
