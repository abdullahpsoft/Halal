<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Products;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Requests;

class ManufacturerController extends Controller
{
    public function index(){

      $id = Auth::user()->id;
      $products = Products::where('manufacturer_id',$id)->get();


      return view('vendor.voyager.manufacturer.index',compact(['products']));

    }
    public function create(){
      return view('vendor.voyager.manufacturer.create');
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
      $addProduct->manufacturer_id = Auth::user()->id;
      $addProduct->save();

      $id = Auth::user()->id;
      $products = Products::where('manufacturer_id',$id)->get();

      return view('vendor.voyager.manufacturer.index',compact(['products']));

    }

    public function edit($id){
      $product = Products::where('id',$id)->first();
      // dd($product->name);
      return view('vendor.voyager.manufacturer.edit',compact(['product']));
    }

    public function update(Request $request, $id){
      // dd("Hello");
      $addProduct = Products::find($id);
      $addProduct->name = $request->name;
      $addProduct->ean = $request->ean;

      $addProduct->sub_category = $request->sub_category_slug;
        $sub_category = SubCategory::where('name',$request->sub_category_slug)->first();
        $addProduct->sub_category_slug =  $sub_category->sub_category_slug;
      $addProduct->alcohol_status = $request->alcohol;
      $addProduct->company_name = $request->company_name;
      $addProduct->store_id = $request->store_id;
      $addProduct->animal_additive_status = $request->animal_additive;

        if ($request->hasFile('image') && $request->image != '') {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1014',
                ]);

                $extension = $request->image->extension();
                $request->image->storeAs('/public/img', $validated['name'].".".$extension);
//                    $url = Storage::url($validated['name'].".".$extension);
//                    $file = File::create([
//                        'name' => $validated['name'],
//                        'url' => $url,
//                    ]);
            }
                    $addProduct->image = $validated['name'].".".$extension;

        }





//        $addProduct->image = $validated['name'].".".$extension;

        $addProduct->published = 'published';

      $addProduct->title = $request->title;
      $addProduct->status = $request->status;
      $addProduct->manufacturer_id = Auth::user()->id;
      $addProduct->save();
        $addedProduct = Products::where('name',$request->name)->first();

        $req = Requests::where('product_id',$addedProduct->id)->first();

$req->status = 'published';
        $req->product_name = $request->name;
        $req->manufacturer_name = $request->company_name;
$req->save();

        $id = Auth::user()->id;
      $products = Products::where('manufacturer_id',$id)->get();

//      return view('vendor.voyager.manufacturer.index',compact(['products']));
//        return view('vendor.voyager.product.index',compact(['products']));
return redirect()->back();
    }

    //
}
