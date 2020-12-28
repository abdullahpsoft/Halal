<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use App\Models\Admin\Mail as AdminMail;
use App\Models\Admin\Store;
use App\Models\Admin\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Products;
use App\Models\Admin\Requests;
use App\Models\Admin\SubCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

use App\Models\Admin\Manufacturer;
use Mail;
//use Symfony\Component\Console\Input\Input;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//      $reqs = Requests::orderBy('status', 'asc')->get();

      $reqs = Requests::orderByRaw('case
    when `status` LIKE "%untracked%" then 1
    when `status` LIKE "%updated%"  then 2
    when `status` LIKE "%published%"  then 3
    else 4 end')->get();

  return view('vendor.voyager.request.index', compact(['reqs']));
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $id = Auth::user()->id;
      $products = Products::where('man_reply',NULL)->get();
      $manufacturers = Manufacturer::all();
      $mails = AdminMail::all();
      return view('vendor.voyager.request.manufacturer', compact(['products','manufacturers','mails']));
        //
    }
    public function product()
    {
        $sub_categories = SubCategory::all();
        $manufacturers =  Manufacturer::all();
        $mails = \App\Models\Admin\Mail::all();
        $stores = Stores::all();
        return view('vendor.voyager.request.product', compact('sub_categories','manufacturers','mails','stores'));
        //
    }
    public function store_product(Request $request)
    {

//        dd($request->all());
        $product = new Products();
        $product->name = $request->name;

        $product->sub_category =  $request->subCategory;

        $sub_category = SubCategory::where('name',$request->subCategory)->first();
//        dd($sub_category);
        $product->sub_category_slug =  $sub_category->sub_category_slug;

        $product->ean =  $request->ean;
        $product->company_name =  $request->company_name;
        $product->title =  $request->title;
        $product->store_id =  $request->store_id;


        if($request->gujar == 'on'){


        $product->manufacturer_id = $request->manufacturer2;
        $product->alcohol_status = $request->alcohol2;
        if($request->alcohol2 == 'no'){
            $product->alcohol = 0;
        } elseif ($request->alcohol2 == 'yes'){
            $product->alcohol = 1;
        } elseif ($request->alcohol2 == 'controversial'){
            $product->alcohol = 2;
        } elseif ($request->alcohol2 == 'no information'){
            $product->alcohol = 3;
        }else{

        }

        $product->animal_additive_status = $request->animal2;
            if($request->animal2 == 'no'){
                $product->animal_additive = 0;
            } elseif ($request->animal2 == 'yes'){
                $product->animal_additive = 1;
            } elseif ($request->animal2 == 'controversial'){
                $product->animal_additive = 2;
            } elseif ($request->animal2 == 'no information'){
                $product->animal_additive = 3;
            }else{

            }

            $product->reason = $request->comment2;
            $product->reason_title = $request->comment2title;
            $product->man_reply = $request->mail2;





            if ($request->hasFile('image')) {

                $cover = $request->file('image');
                $extension = $cover->getClientOriginalExtension();
                Storage::disk('custom')->put($request->name.'.'.$extension,  File::get($cover));
                Storage::disk('custom-big')->put($request->name.'.'.$extension,  File::get($cover));
//

                    $product->image = $request->name.'.'.$extension;


                //  Let's do everything here
//                if ($request->file('image')->isValid()) {
//                    //
//                    $validated = $request->validate([
//                        'name' => 'string|max:40',
//                        'image' => 'mimes:jpeg,png|max:1014',
//                    ]);
//
//                    $extension = $request->image->extension();
//                    $request->image->storeAs('/public/uploads', $validated['name'].".".$extension);
////                    $url = Storage::url($validated['name'].".".$extension);
////                    $file = File::create([
////                        'name' => $validated['name'],
////                        'url' => $url,
////                    ]);
//
//                }
            }





            $product->save();

            $id = Auth::user()->id;
            $name = Auth::user()->name;

            $req = new Requests;
            $req->product_id = $product->id;
            $req->product_name = $request->name;

            $req->manufacturer_id = $request->manufacturer2;
            $req->manufacturer_name = $request->company_name;

            $req->sent_by = $id;
            $req->sent_by_name = $name;

            $req->status = 'updated';

            $req->save();

            $reqs = Requests::orderByRaw('case
    when `status` LIKE "%untracked%" then 1
    when `status` LIKE "%updated%"  then 2
    when `status` LIKE "%published%"  then 3
    else 4 end')->get();
            return view('vendor.voyager.request.index', compact(['reqs']))->with('message','Product Added Successfully');
                                }
        else{


            $product->manufacturer_id = $request->manufacturer1;

            $product->save();


            $manufacturer = Manufacturer::where('id',$request->manufacturer1)->first();



            $to_name = $manufacturer->Name;
            $to_email = 'abdullahpsoft@gmail.com';
            $subjects = 'Product: '.$request->name.' and Ean: '.$request->ean;
            $link = 'Link: http://127.0.0.1:8000/admin/login';
            $data = array('name'=>'Halal',
                'body' => $request->mail1body.' '. $subjects.' '.$link);

            Mail::send('emails.mail',
                $data, function($message) use ($to_name, $to_email) {
                    $message->to($to_email, $to_name)
                        ->subject('Response for Product ');
                    $message->from('abdullahsowebit@gmail.com','Title');
                });



            $id = Auth::user()->id;
            $name = Auth::user()->name;

            $req = new Requests;
            $req->product_id = $product->id;
            $req->product_name = $request->name;

            $req->manufacturer_id = $request->manufacturer1;
            $req->manufacturer_name = $request->company_name;

            $req->sent_by = $id;
            $req->sent_by_name = $name;

            $req->status = 'untracked';

            $req->save();

            $reqs = Requests::orderByRaw('case
    when `status` LIKE "%untracked%" then 1
    when `status` LIKE "%updated%"  then 2
    when `status` LIKE "%published%"  then 3
    else 4 end')->get();
            return view('vendor.voyager.request.index', compact(['reqs']))->with('message','Product Details Added & Mail Sent To Manufacturer Successfully ');

        }




        //
    }
    public static function get_requests(){
        $requests =  Requests::where('status','untracked')->count();

        return $requests;
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

    public function delete($id)
    {
        DB::delete('delete from h_products where id = ?',[$id]);
        DB::delete('delete from request_track where product_id = ?',[$id]);

        return redirect()->back()->with('message', 'Successfully Deleted Product!');
        //
    }

    public function deleteuser($id)
    {

        return redirect()->back()->with('message', 'Roles cannot be deleted!');
        //
    }

    public function deletecategory($id)
    {

        return redirect()->back()->with('message', 'Categories cannot be deleted!');
        //
    }

    public function mail(Request $request)
    {

      $product = Products::where('id',$request->product)->first();
      $manufacturer = Manufacturer::where('id',$request->manufacturer)->first();



        $to_name = $manufacturer->Name;
        $to_email = 'abdullahpsoft@gmail.com';
        $subjects = 'Product: '.$product->name.' and Ean: '.$product->ean;
        $link = 'Link: http://127.0.0.1:8000/admin/login';
      $data = array('name'=>'Halal',
       'body' => $request->body.' '. $subjects.' '.$link);

        Mail::send('emails.mail',
        $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('Response for Product ');
        $message->from('abdullahsowebit@gmail.com','Title');
      });

      $id = Auth::user()->id;
      $name = Auth::user()->name;

      $req = new Requests;
      $req->product_id = $product->id;
      $req->product_name = $product->name;

      $req->manufacturer_id = $manufacturer->id;
      $req->manufacturer_name = $manufacturer->Name;

      $req->sent_by = $id;
      $req->sent_by_name = $name;


      $req->save();

      $product->manufacturer_name = $manufacturer->Name;
      $product->manufacturer_id = $manufacturer->id;
if(Auth::user()->hasRole('super-user')){
  $product->superuser_id = $id;
  $product->superuser_name = $name;

}
if(Auth::user()->hasRole('super-analyst')){
  $product->analyst_id = $id;
  $product->analyst_name = $name;

}
      $product->save();

        $reqs = Requests::orderByRaw('case
    when `status` LIKE "%untracked%" then 1
    when `status` LIKE "%updated%"  then 2
    when `status` LIKE "%published%"  then 3
    else 4 end')->get();

  return view('vendor.voyager.request.index', compact(['reqs']));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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

     $reqi = Requests::where('id', $id)->first();

     return view('vendor.voyager.request.edit', compact(['reqi']));


        //
    }
    public function view($id){
      $reqi = Requests::where('id', $id)->first();

      $product = Products::find($reqi->product_id);
      $stores = Store::all();
        $subCategories = SubCategory::all();

      // dd($product->name);
      return view('vendor.voyager.product.edit',compact(['product','stores','subCategories']));
    }

    public function publish($id)
    {

     $reqi = Requests::where('id', $id)->first();

     $product = Products::find($reqi->product_id);
     $product->published == "published";
     $product->save();

$reqi->status = "published" ;
$reqi->save();

        $reqs = Requests::orderByRaw('case
    when `status` LIKE "%untracked%" then 1
    when `status` LIKE "%updated%"  then 2
    when `status` LIKE "%published%"  then 3
    else 4 end')->get();
 return view('vendor.voyager.request.index', compact(['reqs']));
       //

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

//dd($request->all());
      $id2 = Auth::user()->id;
      $name = Auth::user()->name;

      $reqi = Requests::find($id);
      $reqi->status = 'updated';
      $reqi->save();
      $addProduct = Products::find($reqi->product_id);
      $addProduct->man_reply = $request->body;

      if(Auth::user()->hasRole('super-user')){
        $addProduct->superuser_id = $id2;
        $addProduct->superuser_name = $name;

      }
      if(Auth::user()->hasRole('super-analyst')){
        $addProduct->analyst_id = $id2;
        $addProduct->analyst_name = $name;

      }
      $addProduct->alcohol_status = $request->alcohol;
      $addProduct->animal_additive_status = $request->animal;



      $addProduct->save();

        $reqs = Requests::orderByRaw('case
    when `status` LIKE "%untracked%" then 1
    when `status` LIKE "%updated%"  then 2
    when `status` LIKE "%published%"  then 3
    else 4 end')->get();

    return view('vendor.voyager.request.index', compact(['reqs']));
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
