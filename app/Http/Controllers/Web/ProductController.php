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
    public function ptane($slug, $name)
    {
        $q = "";
        // $categories = DB::table('h_category')->get();
        $sub_cat = DB::table('h_sub_categories')->where('name', $name)->first();
        // $cat_name = $sub_category->name;

        // dd($cat_name);
        return view('p', compact(['q','sub_cat']));
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

        $reason = DB::table('begruendung')->where('ID',$product->reason_id)->where('Language',"de")->first();
        // dd($reason->Text);

        return view('products.show', compact('product', 'categories','subCategory','reason'));
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
        $filter = $request->filter1;
        $q = $request->q;

        if($q == "")
        {
            return redirect()->back()->with('alert', 'Please Enter Something To Search');
        }
        if($q != ""){
            $categories = DB::table('h_category')->get();
            $sub_cat = DB::table('h_sub_categories')->where('name', $name)->first();
            if($filter == "All Products"){
                $products = Products::where ( 'sub_category', $name)
                    ->where('name', 'LIKE', '%' . $q . '%')
                    // ->simplePaginate (12)->setPath ( '' );
                    ->get();

            }
            elseif($filter == "Harmless"){
                $products = Products::where ( 'sub_category', $name)
                    ->where ( 'name', 'LIKE', '%' . $q . '%' )
                    ->where('alcohol_status','no')
                    ->where('animal_additive_status','no')
                    // ->simplePaginate (12)->setPath ( '' );
                    ->get();

            }
            elseif($filter == "Controversial"){
                $products = Products::where(function ($query) use ($name,$q) {
                    $query->where( 'sub_category', $name)
                        ->where ( 'name', 'LIKE', '%' . $q . '%' )
                        ->where('alcohol_status','controversial');
                })->orWhere(function ($query) use ($name, $q) {
                    $query->where( 'sub_category', $name)
                        ->where ( 'name', 'LIKE', '%' . $q . '%' )
                        ->where('animal_additive_status','controversial');
                })
                    // ->simplePaginate (12)->setPath ( '' );
                    ->get();
                // dd($products);
            }
            elseif($filter == "Certified"){
                $products = Products::where ( 'sub_category', $name)
                    ->where ( 'name', 'LIKE', '%' . $q . '%' )
                    ->where('certified','yes')
                    ->simplePaginate (12)->setPath ( '' );
            }
            elseif($filter == "Unknown"){
                $products = Products::where(function ($query) use ($name,$q) {
                    $query->where( 'sub_category', $name)
                        ->where ( 'name', 'LIKE', '%' . $q . '%' )
                        ->where('alcohol_status','no information');
                })->orWhere(function ($query) use ($name, $q) {
                    $query->where( 'sub_category', $name)
                        ->where ( 'name', 'LIKE', '%' . $q . '%' )
                        ->where('animal_additive_status','no information');
                })

                    // ->simplePaginate (12)->setPath ( '' );
                    ->get();
                // dd($products);
            }

            // $pagination = $products->appends ( array ('q' => $q ) );

            if (count ( $products ) > 0){
                return view ( 'products.display',compact('products','categories', 'name','q') )->withQuery ( $q );
            }
            else
                return view ( 'products.display',compact('products','categories', 'name', 'q'),['successMsg'=>'No Details found. Try to search again !']);
        }
    }
}
