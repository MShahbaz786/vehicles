@extends('layout.layout')
@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr3.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Vendor Dashboard</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Vendor Dashboard</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="section-full p-t50 bg-white content-inner-2 compare-car">
            <div class="container">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible" style="margin-top: 10px;">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('message') }}
                    </div>
                @endif
                <div class="row">
                    <!-- Side bar start -->
                    @include('layout.vender_sidebar')
                    <div class="col-md-9 col-md-9" style="border: 1px solid #e1e6eb">
                        <div class="input-group m-b30">
                            <h2>Edit Product</h2>
                            <form method="POST" action="{{url('/update-detail/'.$detail->id)}}" id="editProduct" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                
                                <div class="form-group">
                                    <label for="Detail">Product Model:</label>
                                    <input type="text" class="form-control" id="model" name="model" value="{{$detail->model}}">
                                </div>
                                <div class="form-group">
                                    <label for="Detail">Product Price:</label>
                                    <input type="text" class="form-control" id="price" name="price" value="{{$detail->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="Detail">Image:</label>
                                    <input type="file" class="form-control" id="image_file" name="image_file" value="{{$detail->image}}">
                                </div>
                                <div class="form-group">
                                    <label for="Detail">Quantity:</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{$detail->availability}}">
                                </div>
                                <div class="form-group ">
                                    <label for="Detail">Select Company:</label>
                                    <select name="select_company" class="form-control" id="select_company" required="" style="width: 100%">
                                       <option selected disabled="">Choose One</option>
                                      @foreach($companies as $company)
                                       <option value="{{$company->id}}" {{$detail->company_id == $company->id ? 'selected' : ''}}>{{$company->name}}</option>
                                      @endforeach
                                    </select> 
                                </div>
                                <div class="form-group ">
                                    <label for="Detail">Select Product:</label>
                                    <select name="select_product" class="form-control" id="select_product" required="" style="width: 100%">
                                       <option selected disabled="">Choose One</option>
                                      @foreach($products as $product)
                                       <option value="{{$product->id}}" {{$detail->product_id == $product->id ? 'selected' : ''}}>{{$product->name}}</option>
                                      @endforeach
                                    </select> 
                                </div>
                                <div class="form-group">
                                    <button style="cursor:pointer;margin-top: 10px;" type="submit" class="btn btn-primary">Update Product</button>
                                    <a href="{{url('/product/show')}}"><button style="cursor:pointer;margin-top: 10px;" type="submit" class="btn btn-primary">Back</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
@endsection