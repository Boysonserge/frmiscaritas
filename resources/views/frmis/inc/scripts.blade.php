@livewireScripts
<script src="{{asset('vendors/chart.js/dist/chart.min.js')}}"></script><!-- charts -->
<script src="{{asset('vendors/alpinejs/dist/cdn.min.js')}}"></script><!-- core js -->
<script src="{{asset('src/js/demo.js')}}"></script>
<script src="{{asset('vendors/flatpickr/dist/flatpickr.min.js')}}"></script><!-- input date -->
<script src="{{asset('vendors/flatpickr/dist/plugins/rangePlugin.js')}}"></script><!-- input range date -->
<script src="{{asset('src/js/customizer.js')}}"></script>
<script src="{{asset('js/tail.js')}}"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

@stack('js')
