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
                            <h2>Add Company</h2>
                            <form method="POST" action="{{url('/store-company')}}">
                                {{ csrf_field() }}
                         
                                <div class="form-group">
                                    <label for="Company">Comany Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" >
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <button style="cursor:pointer;margin-top: 10px;" type="submit" class="btn btn-primary">Add Company</button>
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