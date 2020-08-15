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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});





//****************** All the routes for API are below this line ****************
Route::get('get-products', 'Api\ProductController@index');

Route::get('get-products-ean/{ean}', 'Api\ProductController@ean');

Route::get('get-products-category/{cat}', 'Api\ProductController@cat');

Route::get('get-products-id/{id}', 'Api\ProductController@show');
