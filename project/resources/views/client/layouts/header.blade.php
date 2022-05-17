{{-- <header class="header_wrap">
    <div class="top-header d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="header_topbar_info">
                        <div class="header_offer">
                            <i class="ti-location-pin"></i>
                            <a href="{{$googleMapURL}}">{{$shopAddress}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        @php
                        $user = null;
                        $user = Session::get('user');
                        @endphp
                        @if ($user == null)
                        <a href="{{ route('client.login') }}">Đăng nhập</a>
                        &nbsp;/&nbsp;
                        <a href="{{ route('client.register') }}">Đăng ký</a>
                        @else
                        <a href="{{ route('client.logout') }}">Đăng xuất</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-header dark_skin">
        <div class="container">
            <div class="nav_block">
                <a class="navbar-brand" href="{{ route('client.home') }}">
                    <img class="logo_light" src="{{ asset('assets/images/logo/logo_icon_light.png') }}" alt="logo" />
                    <img class="logo_dark" src="{{ asset('assets/images/logo/logo-chuan.png') }}" width="150px" alt="logo" />
                </a>
                <div class="contact_phone order-md-last">
                    <a href="tel:{{$shopPhoneNumber}}">
                        <i class="linearicons-phone-wave"></i>
                        <span>{{$shopPhoneNumber}}</span>
                    </a>
                </div>
                <div class="product_search_form">
                    <form action="{{ route('client.shop') }}">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="custom_select">
                                    <select id="searchTypeSelect">
                                        <option selected="selected" disabled>Chọn danh mục...</option>
                                        @if (isset($allCategoriesProcessed) && $allCategoriesProcessed)
                                        @foreach ($allCategoriesProcessed as $categoriesLv1)
                                        <option value="{{ $categoriesLv1['id'] }}" data-type="categoryLv1" {{ $categoriesLv1['id'] == request()->get('cat1') ? 'selected' : '' }}>
                                            {{ $categoriesLv1['name'] }}
                                        </option>
                                        @if (isset($categoriesLv1['categoriesLv2']) && $categoriesLv1['categoriesLv2'])
                                        @foreach ($categoriesLv1['categoriesLv2'] as $categoryLv2)
                                        <option value="{{ $categoryLv2['id'] }}" data-type="categoryLv2" {{ $categoryLv2['id'] == request()->get('cat2') ? 'selected' : '' }}>
                                            &nbsp;&nbsp;&nbsp;{{ $categoryLv2['name'] }}</option>
                                        @endforeach
                                        @endif
                                        @endforeach
                                        @endif
                                    </select>
                                    <input type="hidden" name="" id="searchTypeInput">
                                </div>
                            </div>
                            <input class="form-control" placeholder="Tìm kiếm sản phẩm ..." required="" type="text" name="keyword" value="{{ request()->get('keyword') }}">
                            <button type="submit" class="search_btn"><i class="linearicons-magnifier"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header light_skin main_menu_uppercase bg_dark mb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                    <div class="categories_wrap">
                        <button type="button" data-toggle="collapse" data-target="#navCatContent" aria-expanded="false" class="categories_btn">
                            <i class="linearicons-menu"></i><span>Danh mục </span>
                        </button>
                        <div id="navCatContent" class="navbar collapse">

                            <ul>
                                @if($listAllCategory)
                                @foreach($listAllCategory as $parentCategory)
                                <li class="dropdown dropdown-mega-menu">
                                    @if($parentCategory["type"] == "product")
                                    <a class="dropdown-item nav-link {{count($parentCategory["childrenCategory"]) > 0 ? "dropdown-toggler": ""}}" href="{{ route('client.shop').'?cat1='.$parentCategory["id"] }}" data-toggle="dropdown">
                                        <span>{{$parentCategory["name"]}}</span>
                                    </a>
                                    @else
                                    <a class="dropdown-item nav-link
                                                {{count($parentCategory["childrenCategory"]) > 0 ? "dropdown-toggler": ""}}" href="{{ route('client.shop').'?cat1='.$parentCategory["id"] }}" data-toggle="dropdown">
                                        <span>{{$parentCategory["name"]}}</span>
                                    </a>
                                    @endif
                                    @if(count($parentCategory["childrenCategory"]) > 0)
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-4">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            @foreach($parentCategory["childrenCategory"] as $childCategory)
                                                            <li>
                                                                @if($parentCategory["type"] == "product")
                                                                <a class="dropdown-item nav-link nav_item" href="{{ route('client.shop') . '?cat2=' . $childCategory["id"] }}">
                                                                    <span>{{$childCategory["name"]}}</span>
                                                                </a>
                                                                @else
                                                                <a class="dropdown-item nav-link nav_item" href="{{ route('client.serviceShop') . '?cat2=' . $childCategory["id"] }}">
                                                                    <span>{{$childCategory["name"]}}</span>
                                                                </a>
                                                                @endif
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif

                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler side_navbar_toggler" type="button" data-toggle="collapse" data-target="#navbarSidetoggle" aria-expanded="false">
                            <span class="ion-android-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                            <ul class="navbar-nav">
                                <li><a class="nav-link nav_item" href="{{ route('client.home') }}">Trang chủ</a>
                                </li>
                                <li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-toggle nav-link" href="{{ route('client.shop') }}" data-toggle="dropdown">
                                        Sản phẩm
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            @if (isset($productCategorys) && $productCategorys)
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li>
                                                        <a class="dropdown-item nav-link nav_item" href="{{ route('client.shop') }}">Tất cả</a>
                                                    </li>
                                                    <!-- <li class="dropdown-header" style="color: #ffd400;">Iphone</li> -->
                                                    @foreach ($productCategorys as $productCategory)
                                                    <li><a class="dropdown-item nav-link nav_item" href="{{ route('client.shop') . '?cat1=' . $productCategory["id"] }}">{{ $productCategory["name"] }}</a>
                                                    </li>
                                                    @endforeach

                                                </ul>
                                            </li>
                                            @endif

                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a class="nav-link nav_item" href="{{ route('client.contact') }}">
                                        Liên hệ
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <ul class="navbar-nav attr-nav align-items-center">
                            <li class="dropdown cart_dropdown">
                                @php
                                $totalQty = 0;
                                foreach (Cart::content() as $cartItem) {
                                $totalQty = $totalQty + intval($cartItem->qty);
                                }
                                @endphp
                                <a class="nav-link cart_trigger" href="#" data-toggle="dropdown">
                                    <i class="linearicons-cart"></i><span class="cart_count">{{ $totalQty }}</span>
                                </a>
                                <div class="cart_box dropdown-menu dropdown-menu-right">
                                    @if (count(Cart::content()))
                                    <ul class="cart_list">
                                        @foreach (Cart::content() as $cartItem)
                                        <li>
                                            <a data-rowid="{{ $cartItem->rowId }}" href="javascript:void(0)" class="item_remove" data-type="rmFromCartBtn"><i class="ion-close"></i></a>
                                            <a href="#"><img src="{{ asset('assets/images/cart_thamb1.jpg') }}" alt="cart_thumb1">{{ $cartItem->name }}</a>
                                            <span class="cart_quantity"> {{ (int) $cartItem->qty }} x
                                                <span class="cart_amount"> <span class="price_symbole"></span></span>{{ number_format((float) $cartItem->price, 0, '', '.') }}
                                                VND</span>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="cart_footer">
                                        <p class="cart_total"><strong>Tổng giá:</strong> <span class="cart_price">{{ number_format(floatval(str_replace([','], '', Cart::subtotal())), 0, '', '.') }}
                                                VND<span class="price_symbole"></span></span></p>
                                        <p class="cart_buttons"><a href="{{ route('client.cart') }}" class="btn btn-fill-line view-cart">Giỏ hàng</a>

                                            @if (Session::get('user'))
                                            <a href="{{ route('client.checkout') }}" class="btn btn-fill-out checkout">thanh toán</a>
                                            @else
                                            <a href="{{ route('client.login') }}" class="btn btn-fill-out checkout">thanh toán</a>
                                            @endif
                                            <!-- <a href="{{ route('client.checkout') }}" class="btn btn-fill-out checkout">Thanh toán</a> -->

                                        </p>
                                    </div>
                                    @else
                                    <div class="cart-empty cart-empty-list"><i class="linearicons-cart-empty"></i>
                                        <div>Giỏ hàng của bạn hiện đang trống</div>
                                    </div>
                                    @endif
                                </div>
                            </li>
                        </ul>
                        <div class="pr_search_icon">
                            <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header> --}}
<!-- LOADER -->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- END LOADER -->

<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">
	<div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                	<div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <ul class="contact_detail text-center text-lg-left">
                            <li><i class="ti-location-pin"></i><span>123 Street, Old Trafford, New South London , UK</span></li>
                            <li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="text-center text-md-right">
                       	<ul class="header_list">
                            <li><a href="login.html"><i class="ti-user"></i><span>Login</span></a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
    	<div class="container">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand" href="index.html">
                    <img class="logo_light" src="assets/images/logo_light.png" alt="logo" />
                    <img class="logo_dark" src="assets/images/logo_dark.png" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a class="nav-link nav_item" href="/">Trang chủ</a></li> 
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="nav-link dropdown-toggle active" href="#">Danh mục sản phẩm</a>
                            <div class="dropdown-menu">
                                <ul> 
                                    <li><a class="dropdown-item nav-link nav_item active" href="index.html">Fashion 1</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-2.html">Fashion 2</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-3.html">Furniture 1</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-4.html">Furniture 2</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-5.html">Electronics 1</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-6.html">Electronics 2</a></li>
                                </ul>
                            </div>   
                        </li>
                        <li><a class="nav-link nav_item" href="/">Về chúng tôi</a></li>
                        <li><a class="nav-link nav_item" href="/">Liên hệ</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div><div class="search_overlay"></div>
                    </li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line rounded-0 view-cart">View Cart</a><a href="#" class="btn btn-fill-out rounded-0 checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->