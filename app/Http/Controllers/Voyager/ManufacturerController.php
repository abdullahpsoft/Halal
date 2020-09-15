<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Products;
use Illuminate\Support\Facades\Auth;

class ManufacturerController extends Controller
{
    public function index(){

      $id = Auth::user()->id;
      $products = Products::where('manufacturer_id','=',$id);
      // dd($products);

      return view('vendor.voyager.manufacturer.browse');

    }

    //
}
