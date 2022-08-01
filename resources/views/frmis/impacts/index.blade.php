<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>{{env('APP_FRMIS')}}</title>
    <meta name="description" content="Tailwind Dashboard Template">

    <!-- Development css (used in all pages) -->
    <link rel="stylesheet" id="stylesheet" href="{{asset('src/css/style.css')}}">
    <!-- Production css (used in all pages) -->
    <!-- <link rel="stylesheet" href="../dist/css/style.css"> -->

    <!--start::Vendor Stylesheets (only on this page)-->
    <link rel="stylesheet" href="{{asset('src/css/customizer.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/prism.css')}}">
    <!--end::Vendor Stylesheets (only on this page)-->

    <!-- google font -->
    <link href="../css2?family=Nunito:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('src/img/favicon.png')}}">
</head>
<body class="font-sans text-base font-normal text-gray-600 dark:text-gray-400 dark:bg-gray-800">
<!-- wrapper -->
<div x-data="{ open: false }" class="wrapper overflow-x-hidden bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
    @include('frmis.inc.sidebar')

    <div x-bind:aria-expanded="open"
         :class="{ 'ltr:ml-64 ltr:-mr-64 md:ltr:ml-0 md:ltr:mr-0 rtl:mr-64 rtl:-ml-64 md:rtl:mr-0 md:rtl:ml-0': open, 'ltr:ml-0 ltr:mr-0 md:ltr:ml-64 rtl:mr-0 rtl:ml-0 md:rtl:mr-64': !(open) }"
         class="flex flex-col ltr:ml-64 rtl:mr-64 min-h-screen transition-all duration-500 ease-in-out">
        <!-- Navbar -->
        @include('frmis.inc.nav')
        <!-- End Navbar -->

        <main class="pt-20 -mt-2">
            @livewire('frmis.impact')
        </main>

        @include('frmis.inc.footer')
    </div>
</div>

<!--start::Global javascript (used in all pages)-->
<script src="{{asset('vendors/alpinejs/dist/cdn.min.js')}}"></script><!-- core js -->

<script src="{{asset('src/js/demo.js')}}"></script>

<script src="{{asset('src/js/customizer.js')}}"></script>
</body>
</html>
