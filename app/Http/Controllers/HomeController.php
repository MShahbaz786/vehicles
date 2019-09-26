<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;
use App\Company;
use App\Product;
use App\Detail;
class HomeController extends Controller
{
    public function vendorDashboard()
    {
        return view('vendor_dashboard');
    }
    public function userDashboard()
    {     
        return view('user_dashboard');
    }

    public function index()
    {
        $companies = Company::all();
        /*echo "<pre>";
        print_r($companies);die();*/
        return view('index',compact('companies'));
    }

    public function index1()
    {
        $companies = Company::all();
        return view('index',compact('companies'));
    }

    
    public function getProducts(Request $request)
    {   
        
        $products = Product::where('company_id',$request->select_company)->with('detail')->get();
       /*dd($products);die();*/
        return view('user.products',compact('products'));
    }


    public function productDetail($id){
        $details = Detail::where('product_id',$id)->with('product')->get(); 
        /*echo "<pre>";
        print_r($details);die();*/
        return view('user.detail',compact('details'));
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
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
