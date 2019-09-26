@extends('layout.layout')
@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr3.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Vehicle Details</h1>
				</div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{url('/index')}}">Home</a></li>
                    <li>Vehicle Details</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
		<div class="car-details-info">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<div class="nav">
							<ul>
								<li class="active"><a href="#">Overview</a></li>
								<li><a href="#">Specifications</a></li>
								<li><a href="#">Price</a></li>
								<li><a href="#">Compare</a></li>
								<li><a href="#">Pictures</a></li>
							</ul>
						</div>
					</div>
				</div>	
			</div>
		</div>
		
        <div class="section-full p-t50 bg-white content-inner-2">
            <div class="container">
                <div class="row">
                    <!-- Side bar start -->
                    @foreach($details as $detail)
                    <div class="col-md-8">
						<div class="m-b30">
							<h3 class="h3 m-t0">{{$detail->product->name}}</h3>
						</div>
						<div class="owl-fade-one owl-carousel owl-btn-center-lr">
							<div class="item">
								<div class="dlab-thum-bx"> <img src="{{url('/ProductImages/'.$detail->image)}}" alt=""> </div>
							</div>
						</div>
						<div class="clearfix m-t30">
							<ul class="nav theme-tabs m-b10">
								<li class="active">
									<a data-toggle="tab" aria-controls="economy"  href="#economy">
										<i class="fa fa-star"></i> 
										Details
									</a>
								</li>
							</ul>
							<div class="dlab-tabs">
								<div class="tab-content">
									<div id="economy"  class="tab-pane active clearfix city-list">
										<div class="icon-bx-wraper bx-style-1 p-a30">
											<ul class="table-dl clearfix">
												<li>
													<div class="leftview">Model:</div>
													<div class="rightview">{{$detail->model}}</div>
												</li>
											  </ul>
											  <ul class="table-dl clearfix">
												<li>
													<div class="leftview">Price:</div>
													<div class="rightview">{{$detail->price}}</div>
												</li>
											  </ul>
											  <ul class="table-dl clearfix">
												<li>
													<div class="leftview">Quantity:</div>
													<div class="rightview">{{$detail->availability}}</div>
												</li>
											  </ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog" >
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="modal-body clearfix">
										<div class="pull-letf max-width-300"></div>
										<div class="lead-form">
											<form>
												<h3 class="m-t0">Personal Details</h3>
												<div class="form-group">
													<input value="" class="form-control" placeholder="Name"/>
												</div>	
												<div class="form-group">
													<input value="" class="form-control" placeholder="Mobile Number"/>
												</div>
												<div class="clearfix">
													<button type="button" class="btn-primary site-button btn-block">Submit </button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
                    <!-- Side bar END -->
					<div class="col-md-4">
						<div class="used-car-features clearfix m-b30">
							<div class="car-features">
								<i class="flaticon-calendar"></i>
								<h5>2019</h5>
								<span>Model</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-dashboard"></i>
								<h5>6,900 km</h5>
								<span>Driven</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-gas-station"></i>
								<h5>Diesel</h5>
								<span>Fuel</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-mechanic"></i>
								<h5>Individual</h5>
								<span>Seller</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-calendar"></i>
								<h5>Automatic</h5>
								<span>Transmission</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-car-key"></i>
								<h5>First</h5>
								<span>Owner</span>	
							</div>
						</div>
						<div class="car-dl-info m-b30">
							<div class="price">
								<h2 class="m-t0 m-b5">Price $5890</h2>
								<span>Hyundai EON LPG Magna Plus</span>	
							</div>			
							<form>
								<p class="m-t0 m-b5">Ex-showroom Price</p>
								<div class="form-group">
									<select>
										<option>Mumbai</option>
										<option>Chandigarh </option>
										<option>Rajasthan</option>
									</select>
								</div>	
								<div class="clearfix">
									<button type="button" class="btn-primary site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">View On Road Price </button>
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