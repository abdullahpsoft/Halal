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

Route::any ( '/search', function () {
//    dd(Request::all());
    $filter1 = Request::get('filter1');
    $filter2 = Request::get('test');
    // dd($filter2);
    $filter3 = Request::get('filter3');
    $filter4 = Request::get('filter4');
    $filter5 = Request::get('filter5');
    $filter6 = Request::get('filter6');
    $q = Request::get ( 'q' );
    if($q == "")
    {
        return redirect()->back()->with('alert', 'Please Enter Something To Search');
    }
    if($q != ""){
        $categories = DB::table('h_category')->get();
        $eat = DB::table('h_sub_categories')->where('category_slug',"eat")->get();
        $drink = DB::table('h_sub_categories')->where('category_slug',"drink")->get();
        $nf = DB::table('h_sub_categories')->where('category_slug',"nf")->get();
        $stores = DB::table('stores')->get();


        if($filter1 == "All Products"){
            if($filter2 == ""){
                if($filter3 == ""){
                    $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )->simplePaginate (12)->setPath ( '' );
                }
                else if($filter3 != ""){
                    if($filter3 == "Eat"){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('sub_category',$filter4)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Drink" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('sub_category',$filter5)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Non-Food" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('sub_category',$filter6)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                }
            }else if($filter2 != ""){
                if($filter3 == ""){

                    $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                        ->where('store_id',$filter2)
                        ->simplePaginate (24)
                        ->setPath ( '' );
                }
                else if($filter3 != ""){
                    if($filter3 == "Eat"){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter4)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Drink" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter5)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Non-Food" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter6)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                }
            }
        }

        else if($filter1 == "Harmless"){
            if($filter2 == ""){
                if($filter3 == ""){
                    $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                        ->where('alcohol_status','no')
                        ->where('animal_additive_status','no')
                        ->simplePaginate (24)->setPath ( '' );
                }
                else if($filter3 != ""){
                    if($filter3 == "Eat"){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','no')
                            ->where('animal_additive_status','no')
                            ->where('sub_category',$filter4)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Drink" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','no')
                            ->where('animal_additive_status','no')
                            ->where('sub_category',$filter5)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Non-Food" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','no')
                            ->where('animal_additive_status','no')
                            ->where('sub_category',$filter6)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                }
            }else if($filter2 != ""){
                if($filter3 == ""){
                    $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                        ->where('alcohol_status','no')
                        ->where('animal_additive_status','no')
                        ->where('store_id',$filter2)
                        ->simplePaginate (24)
                        ->setPath ( '' );
                }
                else if($filter3 != ""){
                    if($filter3 == "Eat"){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','no')
                            ->where('animal_additive_status','no')
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter4)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Drink" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','no')
                            ->where('animal_additive_status','no')
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter5)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Non-Food" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','no')
                            ->where('animal_additive_status','no')
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter6)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                }
            }
        }

        else if($filter1 == "Controversial"){
            if($filter2 == ""){
                if($filter3 == ""){
                    $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                        ->where('alcohol_status','controversial')
                        ->orWhere('animal_additive_status','controversial')
                        ->simplePaginate (24)->setPath ( '' );
                }
                else if($filter3 != ""){
                    if($filter3 == "Eat"){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','controversial')
                            ->orWhere('animal_additive_status','controversial')
                            ->where('sub_category',$filter4)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Drink" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','controversial')
                            ->orWhere('animal_additive_status','controversial')
                            ->where('sub_category',$filter5)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Non-Food" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','controversial')
                            ->orWhere('animal_additive_status','controversial')
                            ->where('sub_category',$filter6)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                }
            }else if($filter2 != ""){
                if($filter3 == ""){
                    $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                        ->where('alcohol_status','controversial')
                        ->orWhere('animal_additive_status','controversial')
                        ->where('store_id',$filter2)
                        ->simplePaginate (24)
                        ->setPath ( '' );
                }
                else if($filter3 != ""){
                    if($filter3 == "Eat"){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','controversial')
                            ->orWhere('animal_additive_status','controversial')
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter4)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Drink" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','controversial')
                            ->orWhere('animal_additive_status','controversial')
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter5)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Non-Food" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','controversial')
                            ->orWhere('animal_additive_status','controversial')
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter6)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                }
            }
        }

        else if($filter1 == "Unknown"){
            if($filter2 == ""){
                if($filter3 == ""){
                    $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                        ->where('alcohol_status','no information')
                        ->orWhere('animal_additive_status','no information')
                        ->simplePaginate (24)->setPath ( '' );
                }
                else if($filter3 != ""){
                    if($filter3 == "Eat"){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','no information')
                            ->orWhere('animal_additive_status','no information')
                            ->where('sub_category',$filter4)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Drink" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','no information')
                            ->orWhere('animal_additive_status','no information')
                            ->where('sub_category',$filter5)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Non-Food" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','no information')
                            ->orWhere('animal_additive_status','no information')
                            ->where('sub_category',$filter6)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                }
            }else if($filter2 != ""){
                if($filter3 == ""){
                    $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                        ->where('alcohol_status','no information')
                        ->orWhere('animal_additive_status','no information')
                        ->where('store_id',$filter2)
                        ->simplePaginate (24)
                        ->setPath ( '' );
                }
                else if($filter3 != ""){
                    if($filter3 == "Eat"){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','no information')
                            ->orWhere('animal_additive_status','no information')
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter4)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Drink" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','no information')
                            ->orWhere('animal_additive_status','no information')
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter5)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Non-Food" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('alcohol_status','no information')
                            ->orWhere('animal_additive_status','no information')
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter6)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                }
            }
        }

        else if($filter1 == "Certified"){
            if($filter2 == ""){
                if($filter3 == ""){
                    $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                        ->where('certified','yes')
                        ->simplePaginate (24)->setPath ( '' );
                }
                else if($filter3 != ""){
                    if($filter3 == "Eat"){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('certified','yes')
                            ->where('sub_category',$filter4)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Drink" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('certified','yes')
                            ->where('sub_category',$filter5)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Non-Food" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('certified','yes')
                            ->where('sub_category',$filter6)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                }
            }else if($filter2 != ""){
                if($filter3 == ""){
                    $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                        ->where('certified','yes')
                        ->where('store_id',$filter2)
                        ->simplePaginate (24)
                        ->setPath ( '' );
                }
                else if($filter3 != ""){
                    if($filter3 == "Eat"){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('certified','yes')
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter4)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Drink" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('certified','yes')
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter5)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                    else if($filter3 == "Non-Food" ){
                        $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )
                            ->where('certified','yes')
                            ->where('store_id',$filter2)
                            ->where('sub_category',$filter6)
                            ->simplePaginate (24)->setPath ( '' );
                    }
                }
            }
        }

        $pagination = $products->appends ( array ('q' => Request::get ( 'q' )) );

        if (count ( $products ) > 0){
            return view ( 'products.index',compact('products','categories','eat','drink','nf','stores') )->withQuery ( $q );
        }
        else
            return view ( 'products.index',compact('products','categories','eat','drink','nf','stores'),['successMsg'=>'No Details found. Try to search again !']);

    }

} );
Route::group(['prefix' => 'admin'], function () {
   Route::get('posts/publish','Voyager\PostController@publish')->name('posts.publish');

   Route::get('posts/publish/admin','Voyager\PostController@publishadmin')->name('posts.publishadmin');
   Route::get('posts/publish/user','Voyager\PostController@publishuser')->name('posts.publishuser');


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


   Route::get('request/manufacturer','Voyager\RequestController@index')->name('request.manu');
   Route::get('request','Voyager\RequestController@index');
    Route::get('add/product','Voyager\RequestController@product')->name('add.product');

   Route::get('request/manufacturer/create','Voyager\RequestController@create');

   Route::get('request/manufacturer/edit/{id}','Voyager\RequestController@edit');

   Route::post('request/manufacturer','Voyager\RequestController@mail');
 Route::post('request/manufacturer/{id}','Voyager\RequestController@update');



 Route::get('request/super/edit/{id}','Voyager\RequestController@publish');
 Route::get('request/super/view/{id}','Voyager\RequestController@view');

    Route::post('h-products/store','Voyager\RequestController@store_product');
    Voyager::routes();
    Route::get('h-products/create', ['uses' => 'Voyager\RequestController@product', 'as'      => 'voyager.h-products.create']);

// Route::get('admin/h-products/create','Voyager\RequestController@create');

});

// Route::get('categories/{slug}', 'CategoriesController@index');

Route::get('categories/{slug}', 'Web\CategoryController@index');
Route::get('/', 'Web\WebController@index');//landing page
Route::get('/product-detail/{id}', 'Web\ProductController@show');


Route::get('/categories', 'Web\CategoryController@categories');


// Route::get('categories/eat', 'Web\CategoryController@index');

Route::get('{slug}/{name}/products', 'Web\ProductController@ptane');


Route::get('explore', 'Web\WebController@explore');

Route::get('companies', 'Web\WebController@companies');

Route::get('about-us', 'Web\WebController@aboutUs');

//new commit
Route::any('/search-in-sub_cat/{name}', 'Web\ProductController@searchInSubCat');
Route::post('/register-company', 'Web\WebController@registerCompany');
Route::get('request/count','Voyager\RequestController@get_requests');
