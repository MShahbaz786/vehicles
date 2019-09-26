@extends('layout.layout')
@section('content')
    <!-- Content -->

    <div class="page-content">
        <!-- Slider -->
        <div class="main-slider style-two default-banner" style="height: 600px;">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <div id="dz_rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                        <div id="dz_rev_slider_4" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.3.3">
                            <ul>
                                <!-- SLIDE 1 -->
                                <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/slide1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
									<div class="tp-caption   tp-resizeme" 
										id="slide-2957-layer-5" 
										data-x="502" 
										data-y="center" 
										data-voffset="130" 
										data-width="['none','none','none','none']"
										data-height="['none','none','none','none']"
										data-transform_idle="o:1;"
										data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeOut;" 
										data-transform_out="opacity:0;s:300;" 
										data-start="1200" 
										data-responsive_offset="on" 
										style="z-index: 11;">
											<img src="images/car2.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> 
									</div>	
                                </li>
                                <!-- SLIDE 2 -->
								<!-- SLIDE  -->
                                <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/slide2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
									<div class="tp-caption   tp-resizeme" 
										id="slide-2957-layer-4" 
										data-x="502" 
										data-y="center" 
										data-voffset="130" 
										data-width="['none','none','none','none']"
										data-height="['none','none','none','none']"
										data-transform_idle="o:1;"
										data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeOut;" 
										data-transform_out="opacity:0;s:300;" 
										data-start="1200" 
										data-responsive_offset="on" 
										style="z-index: 11;">
											<img src="images/car3.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> 
									</div>	
                                </li>
                                
                            </ul>
                            <div class="tp-bannertimer tp-bottom bg-primary" style="height: 5px; "></div>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
			<!-- Form -->	
			<div class="form-slide">
				<div class="container">
				<form action="{{url('/getProducts')}}"  method="Get" class="searching-form" role="search">
					<div class="row search-row">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="col-md-8 offset-md-2">
							<div class="form-group" style="margin-left: 100px;">
								<label style="color: #fff;">Select Comapany</label>
									<select class="form-control" name="select_company">
										<option selected="" disabled="">Select Company</option>
										@foreach($companies as $company)
										<option value="{{$company->id}}">{{$company->name}}</option>
										@endforeach
									</select>	
							</div>
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<div class="form-group">
								<button type="submit" class="site-button">Search Company Products</button>
							</div>
						</div>
					</div>
				</form>
				</div>
			</div>	
			<!-- Form END -->	
	   </div>
        <!-- Slider END -->
		<!-- New Car -->
		<div class="section-full bg-img-fix dlab-new-work overlay-white-dark " style="background-image: url(images/background/bg1.jpg);">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 col-sm-4  p-a0 no-of-item">
						<div class="no-of-item-dtl">
							<h2>New</h2>
							<h3>UPCOMING CARS</h3>
						</div>
					</div>
					<div class="col-md-9 col-sm-8 p-a0">
						<div class="new-item owl-btn-style-1 owl-carousel">
							<div class="item dlab-new-item">
								<div class="dlab-box">
									<div class="dlab-media"> 
										<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a> 
									</div>
									<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
								</div>
							</div>
							<div class="item dlab-new-item">
								<div class="dlab-box">
									<div class="dlab-media"> 
										<a href="#"><img src="images/our-work/work/pic2.jpg" alt=""></a> 
									</div>
									<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
								</div>
							</div>
							<div class="item dlab-new-item">
								<div class="dlab-box">
									<div class="dlab-media"> 
										<a href="#"><img src="images/our-work/work/pic3.jpg" alt=""></a> 
									</div>
									<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- New Car New -->	
		
		<!-- Testimonial -->
        <
        <!-- Latest News -->
		<div class="section-full bg-white content-inner-1">
			<div class="container">
				<div class="section-head text-center head-1">
					<span class="text-primary">Read our latest news</span>
					<h3 class="h3 text-uppercase">Latest News</h3>
				</div>
				<div class="row">
					<div class="blog-carousel owl-carousel col-md-12">
						<div class="item">
							<div class="ow-blog-post date-style-2 dlab-latest-blog">
								<div class="ow-post-media dlab-img-effect zoom-slow"> <img src="images/blog/latest-blog/pic2.jpg" alt=""> </div>
								<div class="ow-post-meta">
									<ul>
										<li class="profile-user">
											<img src="images/testimonials/pic1.jpg" alt=""/>
										</li>
										<li><span>John Doe</span></li>
										<li><i class="fa fa-calendar"></i></li>
										<li><i class="fa fa-comments"></i></li>
									</ul>
								</div>
								<div class="ow-post-info ">
									<div class="ow-post-title">
										<h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post">Porche Release New Model</a> </h4>
									</div>
									<div class="ow-post-text">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry......</p>
									</div>
									<div class="ow-post-readmore "> 
										<a href="#" rel="bookmark" class="site-button-link"> Read More <i class="fa fa-angle-right"></i></a> 
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ow-blog-post date-style-2 dlab-latest-blog">
								<div class="ow-post-media dlab-img-effect zoom-slow"> <img src="images/blog/latest-blog/pic1.jpg" alt=""> </div>
								<div class="ow-post-meta">
									<ul>
										<li class="profile-user">
											<img src="images/testimonials/pic2.jpg" alt=""/>
										</li>
										<li><span>John Doe</span></li>
										<li><i class="fa fa-calendar"></i></li>
										<li><i class="fa fa-comments"></i></li>
									</ul>
								</div>
								<div class="ow-post-info ">
									<div class="ow-post-title">
										<h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post">Porche Release New Model</a> </h4>
									</div>
									<div class="ow-post-text">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry......</p>
									</div>
									<div class="ow-post-readmore "> 
										<a href="#" rel="bookmark" class="site-button-link"> Read More <i class="fa fa-angle-right"></i></a> 
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ow-blog-post date-style-2 dlab-latest-blog">
								<div class="ow-post-media dlab-img-effect zoom-slow"> <img src="images/blog/latest-blog/pic3.jpg" alt=""> </div>
								<div class="ow-post-meta">
									<ul>
										<li class="profile-user">
											<img src="images/testimonials/pic3.jpg" alt=""/>
										</li>
										<li><span>John Doe</span></li>
										<li><i class="fa fa-calendar"></i></li>
										<li><i class="fa fa-comments"></i></li>
									</ul>
								</div>
								<div class="ow-post-info ">
									<div class="ow-post-title">
										<h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post">Porche Release New Model</a> </h4>
									</div>
									<div class="ow-post-text">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry......</p>
									</div>
									<div class="ow-post-readmore "> 
										<a href="#" rel="bookmark" class="site-button-link"> Read More <i class="fa fa-angle-right"></i></a> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-full content-inner bg-img-fix overlay-primary-dark" style="background-image: url(images/background/bg3.jpg);">
            <div class="container">
                <div class="section-head text-center head-1 text-white">
					<span>What Our Happy Clients say about us </span>
					<h3 class="h3 text-uppercase">our Testimonial</h3>
					<div class="dlab-separator bg-white"></div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
				</div>
                <div class="section-content ">
					
					<div class="testimonial-center owl-carousel owl-btn-center-lr">
						<div class="item">
							<div class="testimonial-2 testimonial-bg style-1">
								<div class="testimonial-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								</div>
								<div class="testimonial-detail clearfix">
									<div class="testimonial-box">
										<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic1.jpg" alt="" width="100" height="100"></div>
										<strong class="testimonial-name">John Doe</strong> 
										<span class="text-white">Car Dealer</span> 
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-2 testimonial-bg style-1">
								<div class="testimonial-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								</div>
								<div class="testimonial-detail clearfix">
									<div class="testimonial-box">
										<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic2.jpg" alt="" width="100" height="100"></div>
										<strong class="testimonial-name">John Doe</strong> 
										<span class="text-white">Car Dealer</span> 
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-2 testimonial-bg style-1">
								<div class="testimonial-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								</div>
								<div class="testimonial-detail clearfix">
									<div class="testimonial-box">
										<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic3.jpg" alt="" width="100" height="100"></div>
										<strong class="testimonial-name">John Doe</strong> 
										<span class="text-white">Car Dealer</span> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- Testimonial -->
		<!-- Latest News END-->
		
		<div class="section-full bg-img-fix p-t30 p-b30 ">
			<div class="container">
				<div class="section-content">
					<div class="client-logo-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo"><a href="#"><img src="images/client-logo/logo1.jpg" alt=""></a></div>
							</div>
						</div>
						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo"> <a href="#"><img src="images/client-logo/logo2.jpg" alt=""></a> </div>
							</div>
						</div>
						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo"> <a href="#"><img src="images/client-logo/logo3.jpg" alt=""></a> </div>
							</div>
						</div>
						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo"> <a href="#"><img src="images/client-logo/logo4.jpg" alt=""></a> </div>
							</div>
						</div>
						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo"> <a href="#"><img src="images/client-logo/logo5.jpg" alt=""></a> </div>
							</div>
						</div>
						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo"> <a href="#"><img src="images/client-logo/logo2.jpg" alt=""></a> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Client logo Carousel END -->
		<!-- Content END-->
    </div>
    
@endsection