<?php

namespace App\Http\Controllers;

use App\Detail;
use Illuminate\Http\Request;
use App\Company;
use App\Product;
use File;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $products = Product::all();
        $details = Detail::all();
        /*echo "<pre>";
        print_r($products); die();*/
        return view('products.detail.create',compact('companies','products','details'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 
            'model' => 'required|string|max:255',
            'price' => 'required|integer',
            'quantity' => 'required|integer|max:255',
            'image_file' => 'required',
            'select_company' => 'required|max:255',
            'select_product' => 'required|max:255'
        ]);

        $detail = new Detail();
        $detail->company_id=request()->get('select_company');
        $detail->product_id=request()->get('select_product');
        $detail->model=request()->get('model');
        $detail->price=request()->get('price');
        $detail->availability=request()->get('quantity');

        if ($request->hasFile('image_file'))
            {
                $file = $request->file('image_file');
                $extension = $file->getClientOriginalExtension();
                $fileName = time().'.'.$extension;
                $path = public_path().'\ProductImages';
                $uplaod = $file->move($path,$fileName);

                   $detail->image  = $fileName;
                   $detail->save();
            } 
        $detail->save();
            
        return redirect('/detail/show')->with('message','Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        $details = Detail::orderBy('created_at', 'desc')->paginate(8);
        $products  = Product::all();
        $companies = Company::all();
        return view('products.detail.index', compact('details','products','companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail,$id)
    {
        $detail = Detail::find($id);
        $companies = Company::all();
        $products = Product::all();
        return view('products.detail.edit',compact('detail','companies','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail,$id)
    {
        $detail = Detail::find($id);
        $detail->company_id = $request->select_company;
        $detail->product_id = $request->select_product;
        $detail->model = $request->model;
        $detail->price = $request->price;
        $detail->availability = $request->quantity;
        

        if ($request->hasFile('image_file'))
            {
                $oldImage = public_path("ProductImages/{$detail->image}");
                File::delete($oldImage);
                //File::delete(public_path("ProductImages/{$detail->image}"));Same as above
                $file = $request->file('image_file');
                $extension = $file->getClientOriginalExtension();
                $fileName = time().'.'.$extension;
                $path = public_path().'\ProductImages';
                $uplaod = $file->move($path,$fileName);

                   $detail->image  = $fileName;
                   $detail->save();
        }
        $detail->save();
        return redirect('/detail/show')->with('message','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = Detail::find($id);
        $detail->delete();
        return redirect('/detail/show')->with('message','Data Deleted Successfully');
    }

    public function getProducts($id)
    {
        $products=Product::where('company_id',$id)->get();
        return response()->json($products);
    }
}
