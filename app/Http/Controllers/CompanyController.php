<?php

namespace App\Http\Controllers;

use App\Company;
use DB;
use Auth;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('company.create');
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
            'name' => 'required|string|max:255',
        ]);

        $company = new Company();
        $company->name=request()->get('name');
        $company->save();
        return redirect('/company/show')->with('message','Company added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $companies = Company::orderBy('created_at', 'desc')->paginate(8);;
        return view('company.index',compact('companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::Find($id);
        return view('company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $company = Company::findorfail($id);
        /*echo "<pre>";
        print_r($company);die();*/
        $company->update([
        'name' => $request->name
        ]);
        return redirect('/company/show')->with('message','Data Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect('/company/show')->with('message','Data Deleted Successfully');
    }
}
