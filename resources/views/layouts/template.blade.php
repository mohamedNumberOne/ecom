<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">


    {{-- Additional CSS Files   --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}"> 

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('icones/all.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-hexashop.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">

    {{-- fin Additional CSS Files --}}
    @yield('css')


    <title> @yield('application_name') </title>

    @livewireStyles

</head>


    <!-- ***** Preloader Start ***** -->
    {{-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> --}}
    <!-- ***** Preloader End ***** -->

<body class="font-sans antialiased">



    @yield('content_page')



    @livewireScripts

    @yield('js')

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('icones/all.js') }}"></script> 

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

    <script src="{{ asset('js/bootstrap.js') }}"></script>

</body>

</html>
