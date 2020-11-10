<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Products;
use App\Models\Admin\Requests;

use App\Models\Admin\News;
use App\Models\Admin\Feedback;

use App\Models\Admin\Faq;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //   $products = Products::all();
        $products = Products::paginate(12); 
        return response()->json($products, 401);
    }

    public function news()
    {
      $news = News::paginate(12);
      return response()->json($news, 401);        
    }

    public function faqs()
    {
      $faqs = Faq::paginate(12); 
      return response()->json($faqs, 401);        
    }

    public function new()
    {
      $products = Products::orderBy('id', 'DESC')->paginate(12);
      return response()->json($products, 401);
    }  

    public function recommended()
    {
      $products = Products::where('recommended', 1)->paginate(12);
      return response()->json($products, 401);
    }

    public function ean($ean)
    {
        $product = Products::where('ean', '=', $ean)->firstOrFail();;
        dd($product->sub_category_slug);
        return response()->json($product, 401);

        //
    }

    public function cat($cat)
    {
        $products = Products::where('sub_category', '=', $cat)->paginate(12);
        return response()->json($products, 401);

        //
    }

    public function show($id)
    {
        $product = Products::where('id', '=', $id)->firstOrFail();

        return response()->json($product, 401);

        //
    }

    public function getCategory()
    {
        $categories = Category::paginate(12); 
        return response()->json($categories, 401);
    }

    public function newrequest(Request $request)
    {

        $store_id = null;
        if($request->store != null){

            $store = new Stores();
            $store->name = $request->store;
            $store->save();
            $store_id = $store->id; 
        }

        $product = new Products();
      
      $product->name = $request->name;
      $product->company_name = $request->company;
      $product->ean = $request->ean;

      if($request->name != null){
      $product->image = $request->image;
      }

    if($store_id != null){
      $product->store_id  = $store_id;
      }
       $product->save();
       $product_id = $product->id;
       $requests = new Requests();
       $requests->product_id = $product_id;
       $requests->product_name = $request->name;
       $requests->sent_by_name = "unregistered user";
       $requests->status = "untracked";
       $requests->save();
      return response()->json("Success", 401);
    }

    public function feedback(Request $request)
    {
        $feed = new Feedback();
        $feed->name = $request->name;
        $feed->title = $request->title;
        $feed->description = $request->description;
        $feed->save();

          return response()->json("Success", 401);
    }

    public function getSubCategory($cat)
    {
        $sub_categories = SubCategory::where('category_slug', $cat)->paginate(12);
        $s_cat = SubCategory::where('category_slug', $cat)->get();
        $count = array();
        $merge = [];

        foreach($s_cat as $sub){
            // $count[] = Products::where('sub_category', '=', $sub->name)->count();
            
            $merge[$sub->name] = Products::where('sub_category', '=', $sub->name)->count();
                          
        } 
        
        // dd($merge);
        // return response()->json($sub_categories, 401);
        // return response()->json($merge, $sub_categories, 401);
        return response()->json(array(
            'sub_categories' => $sub_categories,
            'sub_cat_no_of_products' => $merge,
        ));
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
}
