<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Products;
use App\Models\Admin\SubCategory;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug,$name)
    {
        $q = '';
        $categories = DB::table('h_category')->get();
        $sub_category = DB::table('h_sub_categories')->where('name', $name)->get();
        $products = DB::table('h_products')->where('sub_category_slug', $sub_category[0]->sub_category_slug)->paginate(12);
        // dd($products);
        return view('products.display', compact(['categories', 'products', 'name','q']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function search(Request $req)
    {
      $categories = DB::table('h_category')->get();
      $products =  Products::query()
   ->where('name', 'LIKE', "%{$req->search}%")
   ->paginate(5);


return view('products.index', compact('products','categories'));
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    public function show($id)
    {
    $categories = DB::table('h_category')->get();

    $product = Products::find($id);

    $subCategory = SubCategory::where('sub_category_slug','=', $product->sub_category_slug)->firstOrFail();

    return view('products.show', compact('product', 'categories','subCategory'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //new ocicommit
    public function searchInSubCat(Request $request, $name)
    {
        $q = $request->q;
        if($q == "")
        {
            return redirect()->back()->with('alert', 'Please Enter Something To Search');
        }
        if($q != ""){
            $categories = DB::table('h_category')->get();
            $products = Products::where ( 'sub_category', $name)
                                    ->where('name', 'LIKE', '%' . $q . '%')
                                    ->paginate (12);
            $pagination = $products->appends ( array ('q' => $q ) );

            if (count ( $products ) > 0){
                return view ( 'products.display',compact('products','categories','name','q') )->withQuery ( $q );
            }
            else
                return view ( 'products.display',compact('products','categories','name','q'),['successMsg'=>'No Details found. Try to search again !']);
            }
        }
}
