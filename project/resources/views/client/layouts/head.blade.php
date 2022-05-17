{{-- @if (Route::is('client.home')) --}}
    {{-- <!-- SITE TITLE -->
    <title>TStore | Linh kiện - Phụ kiện - Điện thoại -Sửa chưa & Bảo hành</title>
    <meta name="title" content="TStore | Điện thoại - Linh kiện - Phụ kiện - Sửa chữa và bảo hành điện thoại Đà Lạt">
    <meta name="description" content="TStore | Cung cấp các mặt hàng linh kiện, phụ kiện, điện thoại. Đi kèm với dịch vụ như sửa chữa, ép kính, thay thế linh kiện chính hãng chất lượng cao tại Đà Lạt">
    <meta name="keywords" content="Điện thoại, Linh kiện, Phụ kiện giá rẻ, Sửa chữa và bảo hành điện thoại">

    <meta property="og:title" content="TStore | Điện thoại - Linh kiện - Phụ kiện - Sửa chữa và bảo hành điện thoại">
    <meta property="og:description" content="TStore | Cung cấp các mặt hàng linh kiện, phụ kiện, điện thoại. Đi kèm với dịch vụ như sửa chữa, ép kính, thay thế linh kiện chính hãng chất lượng cao tại Đà Lạt">
    <meta property="og:url" content="https://tstore.com.vn">
    <meta property="og:image" content="">
    @elseif(Route::is('client.detail'))
    @php
    $arrSubImage = explode('|', $product->images);
    @endphp
    <title>{{ $product->meta_title }}</title>
    <meta name="title" content="{{ $product->meta_title }}">
    <meta name="description" content="{{ $product->meta_desc }}">
    <meta name="keywords" content="{{ $product->meta_keywords }}">

    <meta property="og:title" content="{{ $product->meta_title }}">
    <meta property="og:description" content="{{ $product->meta_desc }}">
    <meta property="og:url" content="https://tstore.com.vn">
    <meta property="og:image" content="{{ asset($arrSubImage[0]) }}">
    @else
    <title>TStore | Linh kiện - Phụ kiện - Điện thoại -Sửa chưa & Bảo hành</title>
    @endif
    <!-- Meta -->
    <meta charset="utf-8">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="3LReMnrvkZ44qMz6Lkjf2wz6ERrDSIqpTSDhr3cs">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="copyright" content="TStore">
    <meta name="author" content="TStore">
    <meta http-equiv="audience" content="General">
    <meta name="resource-type" content="Document">
    <meta name="distribution" content="Global">
    <meta content="INDEX,FOLLOW" name="robots">
    <meta name="revisit-after" content="1 days">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="GENERATOR" content="TStore">
    <meta property="og:site_name" content="tstore.com.vn">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="vi_VN"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons.css') }}">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.default.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    