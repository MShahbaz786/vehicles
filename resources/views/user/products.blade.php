@extends('layout.layout')
@section('content')
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Company Products</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{url('/index')}}">Home</a></li>
                    <li>Company Products</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="row">
                    <!-- left part start -->
                    <div class="col-sm-8 col-md-8 col-lg-12">
                        <div class="row">
                            <!-- blog grid  -->

                            <div id="masonry" class="dlab-blog-grid-4">
                            	@foreach($products as $product)
                            	@if( !empty ( $product->detail ) )
                                <div class="post card-container col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30">
                                    	
										<a href="{{url('/product-detail/'.$product->id)}}"><div class="dlab-media"> 
											<img src="{{url('/ProductImages/'.$product['detail']['image'])}}" alt="">
										</div></a>
										<div class="dlab-info" style="background-color:#f7f7f7">
											<h4 class="dlab-title"><a href="{{url('/product-detail/'.$product->id)}}">{{$product->name}}</a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><span class="text-primary">Model: {{$product->detail->model}}</span></p>
										</div>
								
									</div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <!-- blog grid END -->
                        </div>
                    </div>
                    <!-- left part END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
@endsection