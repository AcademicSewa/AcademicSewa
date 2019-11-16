<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('adminassets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/fullcalendar.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/matrix-media.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/select2.css')}}" />
<link href="{{asset('adminassets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('adminassets/css/jquery.gritter.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/fullcalendar.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/matrix-media.css') }}" />
<link href="{{asset('adminassets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('adminassets/css/jquery.gritter.css') }}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->

<!--close-Header-part--> 


<!--top-Header-menu-->
@include('layouts.adminlayout.header')
@include('layouts.adminlayout.sidebar')
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
  @yield('content')
  

<!--end-main-container-part-->

<!--Footer-part-->

<!-- @include('layouts.adminlayout.footer') -->

<!--end-Footer-part-->

<!-- <script src="{{asset('adminassets/js/excanvas.min.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.min.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.ui.custom.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.ui.custom.js') }}"></script> 
<script src="{{asset('adminassets/js/bootstrap.min.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.flot.min.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.flot.resize.min.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.peity.min.js') }}"></script> 
<script src="{{asset('adminassets/js/fullcalendar.min.js') }}"></script> 
<script src="{{asset('adminassets/js/matrix.js') }}"></script> 
<script src="{{asset('adminassets/js/matrix.dashboard.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.gritter.min.js') }}"></script> 
<script src="{{asset('adminassets/js/matrix.interface.js') }}"></script> 
<script src="{{asset('adminassets/js/matrix.chat.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.validate.js') }}"></script> 
<script src="{{asset('adminassets/js/matrix.form_validation.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.wizard.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.uniform.js') }}"></script> 
<script src="{{asset('adminassets/js/select2.min.js') }}"></script> 
<script src="{{asset('adminassets/js/matrix.popover.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.dataTables.min.js') }}"></script> 
<script src="{{asset('adminassets/js/matrix.tables.js') }}"></script>  -->



<!-- <script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script> -->
<script src="{{asset('adminassets/js/jquery.min.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.ui.custom.js') }}"></script> 
<script src="{{asset('adminassets/js/bootstrap.min.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.uniform.js') }}"></script> 
<script src="{{asset('adminassets/js/select2.min.js') }}"></script> 
<script src="{{asset('adminassets/js/jquery.validate.js') }}"></script> 
<script src="{{asset('adminassets/js/matrix.js') }}"></script> 
<script src="{{asset('adminassets/js/matrix.form_validation.js') }}"></script>
<script src="{{asset('adminassets/js/jquery.dataTables.min.js') }}"></script> 
<script src="{{asset('adminassets/js/matrix.tables.js') }}"></script>
</body>
</html>
