<div class="page-footer">
    <div class="footer-grid container">
        <div class="footer-l white">&nbsp;</div>
        <div class="footer-grid-l white">
        </div>
        <div class="footer-r white">&nbsp;</div>
       
    </div>
</div>
</div>
<div class="left-sidebar-hover"></div>


<!-- Javascripts -->
<script src="{{asset('assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('assets/plugins/materialize/js/materialize.min.js')}}"></script>
<script src="{{asset('assets/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
<script src="{{asset('assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/plugins/counter-up-master/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/plugins/chart.js/chart.min.js')}}"></script>
<script src="{{asset('assets/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{asset('assets/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
<script src="{{asset('assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('assets/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('assets/plugins/curvedlines/curvedLines.js')}}"></script>
<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/alpha.min.js')}}"></script>
@yield('js')

<script>
      $('.select2-multi').select2({
        placeholder: 'Pilih beberapa ...'
    });

    $('.select2').select2();

    </script>
@if(session('success'))
<script>
    swal({   
    type: "success",
    title: "Success !",   
    text: "{{session('success')}}",   
    timer: 1500,   
    showConfirmButton: false 
});
</script>
@endif

@if(session('error'))
<script>
    swal({   
    type: "error",
    title: "Error !",   
    text: "{{session('error')}}",   
    timer: 1500,   
    showConfirmButton: false 
});
</script>
@endif




</body>
</html>