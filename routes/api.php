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



//****************** All the routes for API are below this line ****************
Route::get('get-products', 'Api\ProductController@index');

Route::get('get-products-ean/{ean}', 'Api\ProductController@ean');

Route::get('get-products-category/{cat}', 'Api\ProductController@cat');

Route::get('get-products-id/{id}', 'Api\ProductController@show');
