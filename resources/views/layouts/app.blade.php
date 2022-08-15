<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title  -->
    <title>{{env('APP_FRMIS')}}</title>
    <link rel="stylesheet" id="stylesheet" href="{{asset('src/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/customizer.css')}}">
    <script src="{{asset('vendors/alpinejs/dist/cdn.min.js')}}"></script>
    <link rel="icon" href="{{asset('src/img/favicon.png')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{--Select2 js libraries--}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- google font -->
    <link href="{{asset('css2?family=Quicksand:wght@300;400;500;600;700&display=swap')}}" rel="stylesheet">

    @livewireStyles
</head>
<body class="font-sans text-base font-normal text-gray-600 dark:text-gray-400 dark:bg-gray-800">
<!-- wrapper -->
<div x-data="{ open: false }" class="wrapper overflow-x-hidden bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">

    @isset($sidebar)
        {{$sidebar}}
    @endisset
        <div x-bind:aria-expanded="open"
             :class="{ 'ltr:ml-64 ltr:-mr-64 md:ltr:ml-0 md:ltr:mr-0 rtl:mr-64 rtl:-ml-64 md:rtl:mr-0 md:rtl:ml-0': open, 'ltr:ml-0 ltr:mr-0 md:ltr:ml-64 rtl:mr-0 rtl:ml-0 md:rtl:mr-64': !(open) }"
             class="flex flex-col ltr:ml-64 rtl:mr-64 min-h-screen transition-all duration-500 ease-in-out">
    {{ $slot }}
        </div>
</div>


@isset($scripts)
    {{$scripts}}
@endisset
</body>

</html>
