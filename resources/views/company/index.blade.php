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
                            <h3>Companies List</h3>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Company Name</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; ?>
                                @foreach($companies as $company)
                                <tr>
                                    <td scope="col">{{ $i}}</td>
                                    <td scope="col">{{$company->name}}</td>
                                    <td scope="col">
                                    <a class="btn btn-info" href="{{url('/edit-company/'.$company->id)}}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger" href="{{url('/delete-company/'.$company->id)}}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                        Dalete
                                    </a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                                @endforeach 
                              </tbody>
                            </table>
                            {{ $companies->links() }}
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
@endsection