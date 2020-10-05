<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Products;
use App\Models\Admin\Requests;

use App\Models\Admin\Manufacturer;
use Mail;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $reqs = Requests::all();

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

      return view('vendor.voyager.request.manufacturer', compact(['products','manufacturers']));
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



    public function mail(Request $request)
    {

      $product = Products::where('id',$request->product)->first();
      $manufacturer = Manufacturer::where('id',$request->manufacturer)->first();




        $to_name = $manufacturer->Name;
        $to_email = 'danial.sowebit@gmail.com';
      $data = array('name'=>'Halal',
       'body' => $request->body);

        Mail::send('emails.mail',
        $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('Laravel Test Mail');
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

      $reqs = Requests::all();

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
      // dd($product->name);
      return view('vendor.voyager.product.edit',compact(['product']));
    }

    public function publish($id)
    {

     $reqi = Requests::where('id', $id)->first();

     $product = Products::find($reqi->product_id);
     $product->published == "published";
     $product->save();

$reqi->status = "published" ;
$reqi->save();

     $reqs = Requests::all();

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

      $reqs = Requests::all();

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
