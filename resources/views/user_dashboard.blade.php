@extends('layout.layout')
@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr3.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Customer Dashboard</h1>
				</div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Customer Dashboard</li>
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
					@include('layout.user_sidebar')
					<div class="col-md-8">
						<h3>Dashboard</h3>
					</div>
                </div>
				<div class="row">
					
				</div>
            </div>
        </div>
	</div>
    <!-- Content END-->
@endsection