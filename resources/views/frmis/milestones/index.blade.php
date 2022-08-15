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

    <script src="{{asset('js/tail.js')}}"></script>
@livewireStyles

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

        <main class="pt-20 -mt-2 mt-8">
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="py-4 px-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    @livewire('test')
                </div>
            </div>

        </main>

        @include('frmis.inc.footer')
    </div>
</div>

@livewireScripts
<script src="{{asset('vendors/alpinejs/dist/cdn.min.js')}}"></script><!-- core js -->
<script src="{{asset('vendors/chart.js/dist/chart.min.js')}}"></script><!-- charts -->
<script src="{{asset('vendors/flatpickr/dist/flatpickr.min.js')}}"></script><!-- input date -->
<script src="{{asset('vendors/flatpickr/dist/plugins/rangePlugin.js')}}"></script><!-- input range date -->
<script src="{{asset('vendors/yaireo/tagify/dist/tagify.min.js')}}"></script><!-- input tags -->
<script src="{{asset('vendors/pristinejs/dist/pristine.min.js')}}"></script><!-- form validation -->
<script src="{{asset('vendors/simple-datatables/dist/umd/simple-datatables.js')}}"></script><!--sort table-->
<script src="{{asset('vendors/glightbox/dist/js/glightbox.min.js')}}"></script><!-- lightbox image -->
<script src="{{asset('vendors/flickity/dist/flickity.pkgd.min.js')}}"></script><!-- slider -->

<script src="{{asset('src/js/demo.js')}}"></script>

<!--start::Customizer js ( Only for demo purpose )-->
<script src="{{asset('src/js/customizer.js')}}"></script>
<script src="{{asset('src/js/prism.js')}}"></script>
</body>
</html>
