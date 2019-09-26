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
                    <div class="col-md-9 col-md-9" style="border: 1px solid #e1e6eb;margin-bottom: 15px;">
                        <div class="icon-bx-wraper bx-style-1 m-b30" style="border-style:none;">
                            <h3>Product Details</h3>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Company</th>
                                  <th scope="col">Product</th>
                                  <th scope="col">Model</th>
                                  <th scope="col">Price</th>
                                  <th scope="col">Image</th>
                                  <th scope="col">Quantity</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; ?>
                                @foreach($details as $detail)
                                <tr>
                                    <td scope="col">{{ $i}}</td>
                                    <td>
                                        @foreach($companies as $company)
                                          @if($company->id == $detail->company_id)
                                            {{$company->name}}
                                          @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($products as $product)
                                          @if($product->id==$detail->product_id)
                                            {{$product->name}}
                                          @endif
                                        @endforeach
                                    </td>
                                    <td scope="col">{{$detail->model}}</td>
                                    <td scope="col">{{$detail->price}}</td>
                                    <td scope="col"><img src="{{ asset('ProductImages/' . $detail->image) }}" width="60px" height="60px" /></td>
                                    <td scope="col">{{$detail->availability}}</td>
                                    <td scope="col">
                                    <a class="btn btn-info" href="{{url('/edit-detail/'.$detail->id)}}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger" href="{{url('/delete-detail/'.$detail->id)}}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                        Dalete
                                    </a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                                @endforeach 
                              </tbody>
                            </table>
                            {{ $details->links() }}
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
@endsection