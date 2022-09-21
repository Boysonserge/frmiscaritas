<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="caritas Diocese Kabgayi">
    <meta name="keywords" content="caritas Diocese Kabgayi, Diocese Kabgayi, Kabgayi Diocese, Diocesaine Kabgayi, caritas Diocesaine Kabgayi">
    <meta name="author" content="Caritas Diocese Kabgayi">
    <title>Caritas Diocese Kabgayi</title>



    <link rel="shortcut icon" href="{{asset('images/resource/caritas2.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Prata|Rubik:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom-animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    @livewireStyles

</head>

<body>

<div class="page-wrapper">

    <!-- Main Header-->
    @isset($sidebar)
        {{$sidebar}}
    @endisset

    <!-- End Main Header -->

    @isset($body)
        {{$body}}
    @endisset



    <!-- Main Footer -->
    @isset($footer)
        {{$footer}}
    @endisset

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon flaticon-arrow"></span></div>
</div>
<!--End pagewrapper-->



<!-- JS -->
@livewireScripts
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/TweenMax.min.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/swiper.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/menu-nav-btn.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/script.js')}}"></script>

</body>


</html>

