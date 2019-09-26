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
                        <div class="input-group m-b30" style="border-style: none;" >
                            <h2>Add Product Detail</h2>
                            <form method="POST" action="{{url('/store-detail')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                
                                <div class="form-group ">
                                    <label for="Product">Select Company:</label>
                                    <select name="select_company" id="select_company"  style="width: 100%">
                                       <option selected disabled="">Choose One</option>
                                      @foreach($companies as $company)
                                       <option value="{{$company->id}}">{{$company->name}}</option>
                                      @endforeach
                                    </select> 
                                </div>
                                @error('select_company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group ">
                                    <label for="Detail">Select Product:</label>
                                    <select name="select_product" id="select_product"  style="width: 100%">
                                       <option selected disabled="">Choose One</option>
                                      @foreach($products as $product)
                                       <option value="{{$product->id}}">{{$product->name}}</option>
                                      @endforeach
                                    </select> 
                                </div>
                                @error('select_product')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <label for="Detail">Model No:</label>
                                    <input type="text" class="form-control" id="model" name="model" value="{{ old('model') }}">
                                </div>
                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <label for="Detail">Price:</label>
                                    <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
                                </div>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <label for="Detail">Product Image:</label>
                                    <input type="file" class="form-control" id="image_file" name="image_file">
                                </div>
                                @error('image_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <label for="Detail"> Quantity:</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}">
                                </div>
                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <div class="form-group">
                                    <button style="cursor:pointer;margin-top: 10px;" type="submit" class="btn btn-primary">Add Product Detail</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script type="text/javascript">

      $("#select_company").change(function(e) {
        var id = $('#select_company').val();
        var UrlLink = "{{url('/get-products')}}/"+id;       

            $.ajax({
                type: "GET",
                url: UrlLink,
                success: function(status){
                    //console.log(status);
                    $( "#select_product").empty();
                $.each( status, function(i,val) {
                  $( "#select_product").append("<option value='"+val['id']+"'>"+val['name']+"</option>");
                });

                }
            });
            return false;
        });
    </script>

@endsection