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
   Route::get('posts/publish','Voyager\PostController@publish')->name('posts.publish');
   Route::get('products/manufacturer','Voyager\ManufacturerController@index');
   Route::get('products/manufacturer/create','Voyager\ManufacturerController@create');
   Route::post('products/manufacturer','Voyager\ManufacturerController@store');
   Route::get('products/manufacturer/edit/{id}','Voyager\ManufacturerController@edit');
   Route::post('products/manufacturers/{id}','Voyager\ManufacturerController@update');

   Route::get('products/user','Voyager\UserController@index');
   Route::get('products/user/create','Voyager\UserController@create');
   Route::post('products/user','Voyager\UserController@store');
   Route::get('products/user/edit/{id}','Voyager\UserController@edit');
   Route::post('products/users/{id}','Voyager\UserController@update');


    Voyager::routes();
});

// Route::get('categories/{slug}', 'CategoriesController@index');

Route::get('categories/{slug}', 'Web\CategoryController@index');
Route::get('/', 'Web\WebController@index');//landing page
Route::get('/product-detail/{id}', 'Web\ProductController@show');

Route::any ( '/search', function () {
    $q = Request::get ( 'q' );
    if($q == "")
    {
        return redirect()->back()->with('alert', 'Please Enter Something To Search');
    }
    if($q != ""){
    $categories = DB::table('h_category')->get();
    $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )->paginate (12)->setPath ( '' );
    $pagination = $products->appends ( array (
                'q' => Request::get ( 'q' )
        ) );

    if (count ( $products ) > 0){
        return view ( 'products.index',compact('products','categories') )->withQuery ( $q );
    }
    else
        return view ( 'products.index',compact('products','categories'),['successMsg'=>'No Details found. Try to search again !']);
        //  )->with('alert','No Details found. Try to search again !' );
}

} );



// Route::get('categories/eat', 'Web\CategoryController@index');

Route::get('{slug}/{name}/products', 'Web\ProductController@index');


Route::get('explore', 'Web\WebController@explore');

Route::get('companies', 'Web\WebController@companies');

Route::get('about-us', 'Web\WebController@aboutUs');
