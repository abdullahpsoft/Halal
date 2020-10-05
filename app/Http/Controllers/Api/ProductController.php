<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Products;
use App\Models\Admin\News;
use App\Models\Admin\Faq;

use App\Models\Admin\Category;//new commit
use App\Models\Admin\SubCategory;//new commit

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
        $product = Products::where('id', '=', $id)->firstOrFail();;

        return response()->json($product, 401);

        //
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

    //new comits




    public function getCategory()
    {
        $categories = Category::paginate(12);
        return response()->json($categories, 401);
    }

    public function getSubCategory($cat)
    {
        $sub_categories = SubCategory::where('category_slug', $cat)->paginate(12);
        return response()->json($sub_categories, 401);
    }
}
