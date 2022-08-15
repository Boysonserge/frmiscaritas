<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>{{env('APP_FRMIS')}}</title>
    <link rel="stylesheet" id="stylesheet" href="{{asset('src/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/customizer.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/prism.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{--Select2 js libraries--}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/umfn23uvhuxvx1wku6rk2pwxyw3jdq7mwdvhrsp4fqocwom4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{asset('js/tail.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css" rel="stylesheet" type="text/css" />
    @include('flatpickr::components.style')

    <!-- google font -->
    <link href="{{asset('css2?family=Quicksand:wght@300;400;500;600;700&display=swap')}}" rel="stylesheet">

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

        <main class="pt-20 -mt-2">

            @livewire('frmis.milestone-create')
        </main>
        @include('frmis.inc.footer')
    </div>
</div>


@include('flatpickr::components.script')
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
@component('livewire-notification::components.toast') @endcomponent



<script src="https://unpkg.com/flowbite@1.5.1/dist/datepicker.js"></script>


<script src="{{asset('vendors/chart.js/dist/chart.min.js')}}"></script><!-- charts -->

<script src="{{asset('vendors/alpinejs/dist/cdn.min.js')}}"></script><!-- core js -->
<script src="{{asset('src/js/demo.js')}}"></script>
<script src="{{asset('src/js/customizer.js')}}"></script>

<script>



    $(document).ready(function() {
        $('.select2').select2();
        $('.select3').select2({
            tags: true,
            placeholder: "Type impact indicators"
        });
    });

    window.addEventListener('render-select2', event => {
        console.log('option changed');
        $('.select3').select2({
            tags: true,
            placeholder: "Type impact indicators"
        });
        $('.select2').select2();

    })

</script>
@stack('js')

</body>
</html>
