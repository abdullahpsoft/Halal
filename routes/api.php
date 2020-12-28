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

Route::any ( '/search', function (Request $request) {
    // $q = Request::get ( 'q' );
    $q = $request->q;
    if($q == "")
    {
      return response()->json(NULL, 401);
        // return redirect()->back()->with('alert', 'Please Enter Something To Search');
    }
    if($q != ""){
    $categories = DB::table('h_category')->get();
    $products = App\Models\Admin\Products::where ( 'name', 'LIKE', '%' . $q . '%' )->paginate (12)->setPath ( '' );
    $pagination = $products->appends ( array (
                'q' => $request->q
                // Request::get ( 'q' )
        ) );

    if (count ( $products ) > 0){

        return response()->json($products, 401);
    }
    else

        return response()->json(NULL, 401);
        //  )->with('alert','No Details found. Try to search again !' );
}

} );

Route::any ( '/search/{name}', function (Request $request, $name) {
    // $q = Request::get ( 'q' );
    $filter = $request->filter;
    // $q = $request->q;

    // if($q == "")
    // {
    //   return response()->json(NULL, 401);
    //     // return redirect()->back()->with('alert', 'Please Enter Something To Search');
    // }
    // if($q != ""){
        $categories = DB::table('h_category')->get();
        if($filter == "All Products"){
            $products = App\Models\Admin\Products::where ( 'sub_category', $name)
            // ->where('name', 'LIKE', '%' . $q . '%')
            ->paginate (12)
            ->setPath ( '' );
        }
        elseif($filter == "Harmless"){
            $products = App\Models\Admin\Products::where ( 'sub_category', $name)
            // ->where ( 'name', 'LIKE', '%' . $q . '%' )
            ->where('alcohol_status','no')
            ->where('animal_additive_status','no')
            ->paginate (12)->setPath ( '' );
        }
        elseif($filter == "Controversial"){
            $products = App\Models\Admin\Products::where ( 'sub_category', $name)
            // ->where ( 'name', 'LIKE', '%' . $q . '%' )
            ->where('alcohol_status','controversial')
            ->orWhere('animal_additive_status','controversial')
            ->paginate (12)->setPath ( '' );
        }
        elseif($filter == "Certified"){
            $products = App\Models\Admin\Products::where ( 'sub_category', $name)
            // ->where ( 'name', 'LIKE', '%' . $q . '%' )
            ->where('certified','yes')
            ->paginate (12)->setPath ( '' );
        }
        $pagination = $products->appends ( array (
                // 'q' => $request->q
                // Request::get ( 'q' )
        ) );

    if (count ( $products ) > 0){

        return response()->json($products, 401);
    }
    else

        return response()->json(NULL, 401);
        //  )->with('alert','No Details found. Try to search again !' );
}

 );

//****************** All the routes for API are below this line ****************
Route::get('get-products', 'Api\ProductController@index');

Route::get('get-category', 'Api\ProductController@getCategory');

Route::get('get-subcategory/{cat}', 'Api\ProductController@getSubCategory');

Route::get('new-products', 'Api\ProductController@new');

Route::get('recommended-products', 'Api\ProductController@recommended');

Route::get('news', 'Api\ProductController@news');

Route::get('faqs', 'Api\ProductController@faqs');

Route::get('get-products-ean/{ean}', 'Api\ProductController@ean');

Route::get('get-products-category/{cat}', 'Api\ProductController@cat');

Route::get('get-products-id/{id}', 'Api\ProductController@show');

Route::post('product-request', 'Api\ProductController@newrequest');

Route::post('feedback', 'Api\ProductController@feedback');

Route::post('image-request', 'Api\ProductController@imagerequest');//dar
