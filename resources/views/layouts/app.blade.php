<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from workload.dexignlab.com/codeigniter/demo/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2024 06:36:46 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Workload - CodeIgniter Project Management Admin Dashboard Template" />
    <meta property="og:title" content="Workload - CodeIgniter Project Management Admin Dashboard Template" />
    <meta property="og:description" content="Workload - CodeIgniter Project Management Admin Dashboard Template" />
    <meta property="og:image" content="../social-image.html" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Dashboard :: Mormugao Port Authority, Goa</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/mpa_logo.jpeg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/nouislider.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    @stack('styles')

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('layouts.nav_header')

        @include('layouts.header')

        @include('layouts.sidebar')

        @yield('content');

        <!--**********************************
    Footer start
***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="javascript:;" target="_blank">iOTAS</a> 2024</p>
            </div>
        </div>
        <!--**********************************
    Footer end
***********************************-->

    </div>
    <script src="{{ asset('js/global.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>


    @stack('scripts')
    <script src="{{ asset('js/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('js/dashboard-1.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>

    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/dlabnav-init.js')}}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>

    @stack('scripts')

    <script>
        function cardsCenter()
	{

		/*  testimonial one function by = owl.carousel.js */



		jQuery('.card-slider').owlCarousel({
			loop:true,
			margin:10,
			nav:false,
			//center:true,
			slideSpeed: 3000,
			paginationSpeed: 3000,
			dots: false,
			navText: ['', ''],
			responsive:{
				0:{
					items:1
				},
				576:{
					items:2
				},
				800:{
					items:2
				},
				991:{
					items:2
				},
				1200:{
					items:3
				},
				1600:{
					items:4
				}
			}
		})
	}

	jQuery(window).on('load',function(){
		setTimeout(function(){
			cardsCenter();
		}, 1000);
	});

    </script>


    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>

<!-- Mirrored from workload.dexignlab.com/codeigniter/demo/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2024 06:37:07 GMT -->

</html>
