<!DOCTYPE html>
<html lang="vi">

<head>
    @include('client.layouts.head')
    @yield('css')
</head>

<body>

    <!-- LOADER -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <img src="{{ asset('assets/images/loading_page.gif') }}" alt="">
        </div>
    </div>
    <!-- END LOADER -->
    <!-- START HEADER -->
    @include('client.layouts.header')
    <!-- END HEADER -->

    <!-- START CONTENT -->
    @yield('content')
    <!-- END CONTENT -->


    <!-- START FOOTER -->
    @include('client.layouts.footer')
    <!-- END FOOTER -->

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

    <!-- Latest jQuery -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <!-- popper min js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- magnific-popup min js  -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <!-- waypoints min js  -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- parallax js  -->
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <!-- countdown js  -->
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- isotope min js -->
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <!-- jquery.dd.min js -->
    <script src="{{ asset('assets/js/jquery.dd.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- elevatezoom js -->
    <script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>

    {{-- <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- scripts js -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    <script src="{{ asset('assets/js/utils.js') }}"></script>

    <script src="{{ asset('assets/js/cart.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        // START Handle for type search select
        var searchParams = new URLSearchParams(window.location.search);
        var params = [];
        for (var param of searchParams) {
            params[param[0]] = param[1];
        }

        function encodeQueryData(data) {
            const ret = [];
            for (let d in data)
                if (data[d] !== '') {
                    ret.push(encodeURIComponent(d) + '=' + encodeURIComponent(data[d]));
                }
            return ret.join('&');
        }
        // Sort by type
        var searchTypeSelect = document.getElementById("searchTypeSelect");
        var searchTypeInput = document.getElementById("searchTypeInput");
        searchTypeSelect.addEventListener('change',
            function(event) {
                var type = event.target.options[event.target.selectedIndex].dataset.type;
                if (type == 'categoryLv1') {
                    searchTypeInput.name = 'cat1';
                } else if (type == 'categoryLv2') {
                    searchTypeInput.name = 'cat2';
                }
                searchTypeInput.value = this.value;
                // var querystring = encodeQueryData(params);
                // window.location = window.location.origin + window.location.pathname + '?' + querystring;
            });
        // END Handle for type search select
    </script>

    {{-- @include('client.partials.js-variables') --}}
    <!-- Javascript for each page -->
    @yield('js')

</body>

</html>