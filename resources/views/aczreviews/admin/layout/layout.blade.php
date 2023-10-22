<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('aczreviews/admin/fontawesome-free-6.3.0-web/css/all.min.css')}}">
    <!-- Main -->
    <link rel="stylesheet" href="{{url('aczreviews/admin/css/admin_common.css')}}">    
    <link rel="stylesheet" href="{{url('aczreviews/admin/css/admin_main.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{url('aczreviews/admin/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('aczreviews/admin/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css')}}"> 
    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="{{url('aczreviews/front/images/icon_images/logo-icon-2.png')}}">
    <link rel="stylesheet" href="{{url('aczreviews/admin/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}"> 
    <link rel="stylesheet" href="{{url('aczreviews/admin//datatables/datatables.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ACZ Reviews</title>
</head>
<body>
    <div class="overlay"></div>
    <header>
    @include('aczreviews.admin.layout.header')
    </header>
    <div id="loading">
    <img id="loading-image" src="{{url('aczreviews/front/images/Iphone-spinner-2.gif')}}" alt="Loading..." />
    </div>
    <div id="ajax_loading_overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
    <div id="app">
        @yield('content')
    </div>
    <footer>
    @include('aczreviews.admin.layout.footer')
    </footer>
    <script src="{{url('aczreviews/admin//bootstrap-5.0.2-dist/js/bootstrap.min.js')}}" ></script>
    <script type="text/javascript"  src="{{url('aczreviews/admin/js/jquery-3.7.0.min.js')}}" ></script>
    <script src="{{url('aczreviews/admin/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js')}}"></script>
    <script src="{{url('aczreviews/admin/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js')}}" ></script>
    <script type="text/javascript" src="{{ url('aczreviews/admin/js/owl-carousel-3.js')}}"></script>
    <script src="{{url('aczreviews/admin//datatables/datatables.js')}}"></script>
    <script type="text/javascript" src="{{url('aczreviews/admin/js/admin_custom.js')}}" ></script>
    <script>
        $(window).on('load', function () {
            $('#loading').hide();
        }) 
    </script>
    <script>
        jQuery(function($){
        $(document).ajaxSend(function() {
            $("#ajax_loading_overlay").fadeIn(300);　
        });
        });
    </script>
</body>
</html>