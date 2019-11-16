


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AcademicSewa</title>
    

     <!-- CSS Custom -->
    <link rel="stylesheet" type="text/css" href="{{asset('userassets/css/styles.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('userassets/css/notes.css')}}">
      	<!-- Bootstrap CSS -->
	<link href="{{asset('userassets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">-->
    <!-- CSS Plugins -->
    <link href="{{asset('userassets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('userassets/css/animate.min.css')}}">
    <!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
 




</head>
<body>
  <style>
  .navbar {
  border: none ;
  margin-bottom: 0;
  position: relative;
}
.dropdown-menu {
  background-color:black;
}
    </style>


@include('layouts.userlayouts.header')
@yield('content')

@include('layouts.userlayouts.footer')
<script src="{{asset('userassets/js/jquery.min.js')}}"></script>
<script src="{{asset('userassets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('userassets/js/interface.js')}}"></script> 
<script type="text/javascript"> 
	$(document).ready(function(){
	$("#menu_slide").click(function(){
		$("#navbar").slideToggle('normal');
	});
	});
 </script>
<!--Menu Js Right Menu-->
<script type="text/javascript">
$(document).ready(function(){
  $('#navbar > ul > li:has(ul)').addClass("has-sub");
  $('#navbar > ul > li > a').click(function() {
    var checkElement = $(this).next();
    $('#navbar li').removeClass('dropdown');
    $(this).closest('li').addClass('dropdown');	
    if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
      $(this).closest('li').removeClass('dropdown');
      checkElement.slideUp('normal');
    }
    if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
      $('#navbar ul ul:visible').slideUp('normal');
      checkElement.slideDown('normal');
    }
    if (checkElement.is('ul')) {
      return false;
    } else {
      return true;	
    }		
  });
});
<!--end-->
</script>
<script type="text/javascript">	
$("#navbar").on("click", function(event){
    event.stopPropagation();
});
$(".dropdown-menu").on("click", function(event){
    event.stopPropagation();
});
$(document).on("click", function(event){
    $(".dropdown-menu").slideUp('normal');
});	

$(".navbar-header").on("click", function(event){
    event.stopPropagation();
});
$(document).on("click", function(event){
    $("#navbar").slideUp('normal');
});		
</script>



</body>
<!-- JS Plugins -->
  </html>
 