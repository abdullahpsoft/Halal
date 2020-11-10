<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Products;
use App\Models\Admin\Manufacturer;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('h_category')->get();
        $eat = DB::table('h_sub_categories')->where('category_slug',"eat")->get();
        $drink = DB::table('h_sub_categories')->where('category_slug',"drink")->get();
        $nf = DB::table('h_sub_categories')->where('category_slug',"nf")->get();
        $stores = DB::table('stores')->get();
        $products = Products::orderBy('created_at', 'desc')->paginate(6);
        return view('welcome', compact('products','categories','stores','eat','drink','nf'));
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

    public function explore()
    {
        $categories = DB::table('h_category')->get();
        $products = Products::orderBy('created_at', 'desc')->paginate(6);
        $news = DB::table('news')->get();
        $faqs = DB::table('faq')->get();
        return view('explore', compact(['categories','products','news','faqs']));
    }
    public function companies()
    {
        $categories = DB::table('h_category')->get();
        return view('companies', compact(['categories']));
    }
    public function registerCompany(Request $request)
    {
      $company = new Manufacturer;
      $company->Name = $request->name;
      $company->Email = $request->email;
      $company->contact_person = $request->contact_person;
      $company->phone = $request->phone;
      $company->address = $request->address;
      $company->city = $request->city;
      $company->state = $request->state;
      $company->zip = $request->zip;
      $company->country = $request->country;
      $company->save();

      $user = new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->role_id = 5;
      $password = Hash::make($request->password);
      $user->password = $password;
      $user->save();

      return redirect('/');
      
    }

    public function aboutUs()
    {
        $categories = DB::table('h_category')->get();
        return view('about-us', compact(['categories']));
    }
}