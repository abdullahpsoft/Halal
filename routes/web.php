<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::get('categories/{slug}', 'CategoriesController@index');

Route::get('categories/{slug}', 'Web\CategoryController@index');
Route::get('/', 'Web\WebController@index');//landing page
Route::get('/product-detail/{id}', 'Web\ProductController@show');

Route::any ( '/search', function () {
    $q = Request::get ( 'q' );
    if($q != ""){
    $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )->paginate (12)->setPath ( '' );
    $pagination = $products->appends ( array (
                'q' => Request::get ( 'q' )
        ) );
    if (count ( $products ) > 0)
        return view ( 'products.index',compact('products') )->withQuery ( $q );
    }
        return view ( 'products.index' )->withMessage ( 'No Details found. Try to search again !' );
} );



Route::get('categories/eat', 'Web\CategoryController@index');

Route::get('{slug}/{name}/products', 'Web\ProductController@index');


Route::get('explore', 'Web\WebController@explore');

Route::get('companies', 'Web\WebController@companies');

Route::get('about-us', 'Web\WebController@aboutUs');
