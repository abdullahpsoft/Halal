<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Products;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){

      $id = Auth::user()->id;
      $products = Products::where('user_id',$id)->get();

      return view('vendor.voyager.user.browse',compact(['products']));

    }
    public function create(){
      return view('vendor.voyager.user.create');
    }

    public function store(Request $request){

      $addProduct = new Products;
      $addProduct->name = $request->name;
      $addProduct->ean = $request->ean;
      $addProduct->sub_category_slug = $request->sub_category_slug;
      $addProduct->alcohol = $request->alcohol;
      $addProduct->company_name = $request->company_name;
      $addProduct->store_id = $request->store_id;
      $addProduct->animal_additive = $request->animal_additive;
      $addProduct->image = $request->image;
      $addProduct->title = $request->title;
      $addProduct->status = $request->status;
      $addProduct->user_id = Auth::user()->id;
      $addProduct->save();

      $id = Auth::user()->id;
      $products = Products::where('user_id',$id)->get();

      return view('vendor.voyager.user.browse',compact(['products']));

    }

    public function edit($id){
      $product = Products::where('id',$id)->first();
      // dd($product->name);
      return view('vendor.voyager.user.edit',compact(['product']));
    }

    public function update(Request $request, $id){
      // dd("Hello");
      $addProduct = Products::find($id);
      $addProduct->name = $request->name;
      $addProduct->ean = $request->ean;
      $addProduct->sub_category_slug = $request->sub_category_slug;
      $addProduct->alcohol = $request->alcohol;
      $addProduct->company_name = $request->company_name;
      $addProduct->store_id = $request->store_id;
      $addProduct->animal_additive = $request->animal_additive;
      $addProduct->image = $request->image;
      $addProduct->title = $request->title;
      $addProduct->status = $request->status;
      $addProduct->user_id = Auth::user()->id;
      $addProduct->save();

      $id = Auth::user()->id;
      $products = Products::where('user_id',$id)->get();

      return view('vendor.voyager.user.browse',compact(['products']));
    }

    //
}
