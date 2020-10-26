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
Route::get('/getMaterial','MaterialAreaController@getMaterial');
Route::get('/showMaterial', 'MaterialAreaController@showMaterial');
Route::get('/getAllArea', 'AreaController@getAllArea');
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// }
// );
