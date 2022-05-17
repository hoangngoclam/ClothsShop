@extends('client.layouts.master')
@section('content')
    
<!-- START SECTION BANNER -->
<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active background_bg" data-img-src="assets/images/banner1.jpg"></div>
            <div class="carousel-item background_bg" data-img-src="assets/images/banner2.jpg"></div>
            <div class="carousel-item background_bg" data-img-src="assets/images/banner3.jpg"></div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
</div>
<!-- END SECTION BANNER -->

<!-- END MAIN CONTENT -->
<div class="main_content">
    
    <!-- START SECTION SHOP -->
    <div class="section small_pt pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Exclusive Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-style1">
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true">New Arrival</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sellers-tab" data-toggle="tab" href="#sellers" role="tab" aria-controls="sellers" aria-selected="false">Best Sellers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                            <div class="row shop_container">
                                @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10] as $product)
                                    <div class="col-lg-3 col-md-4 col-6">
                                        @include('client.partials.product-card', ['product' => $product])
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="tab-pane fade " id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
                            <div class="row shop_container">
                                @foreach ([1, 2, 3, 4, 5, 6, 7] as $product)
                                    <div class="col-lg-3 col-md-4 col-6">
                                        @include('client.partials.product-card', ['product' => $product])
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- END SECTION SHOP -->
    
</div>
<!-- END MAIN CONTENT -->


@endsection
