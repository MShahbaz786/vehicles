<div class="col-md-12 col-lg-3">
    <div class="icon-bx-wraper bx-style-1 p-a20 m-b30">
        <form class="row">
            <h4 class="col-lg-12" style="color: green;">{{Auth::user()->name}}</h4>   
            <div class="col-md-4 col-sm-4 col-lg-12 m-b20">
                <h5 class="col-lg-12" style="color: blue;">Company Links</h5>   
                <a href="{{url('/company/create')}}"><h6>Add Company</h6></a>
                <a href="{{url('/company/show')}}"><h6>List Company</h6></a>
            </div>
        </form>
        <form class="row"> 
            <div class="col-md-4 col-sm-4 col-lg-12 m-b20">
                <h5 class="col-lg-12" style="color: blue;">Product Links</h5>   
                <a href="{{url('/product/create')}}"><h6>Add Product</h6></a>
                <a href="{{url('/product/show')}}"><h6>List Product</h6></a>
            </div>
        </form>
        <form class="row"> 
            <div class="col-md-4 col-sm-4 col-lg-12 m-b20">
                <h5 class="col-lg-12" style="color: blue;">Product Detail Links</h5>   
                <a href="{{url('/detail/create')}}"><h6>Add Product Detail</h6></a>
                <a href="{{url('/detail/show')}}"><h6>List Product Detail</h6></a>
            </div>
        </form>
    </div>
</div>