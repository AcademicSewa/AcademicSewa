 <header class="navbar-fixed-top">
	<div class="container">
    	<div class="row">
        	<div class="header_top">
        		<div class="col-md-6">
            		<div class="logo_img">
						<a href="#"><img src="{{asset('userassets/images/ll.png')}}" alt="logoimage" class="img-responsive"></a>
					</div>
				</div>
					
				<div class="col-md-6">
					<div class="menu_bar">	
						<nav role="navigation" class="navbar navbar-default">
							<div class="navbar-header">
                                <button id="menu_slide"  aria-controls="navbar" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
							   </div>
							   
							  <div class="collapse navbar-collapse" id="navbar">
                            
								<ul class="nav navbar-nav">
									 <li><a href="{{url('dashboard')}}" class="js-target-scroll">Home</a></li>
									 @if(Request::segment(1)==='bit' or Request::segment(1)==='be' or Request::segment(1)==='bca'or Request::segment(1)==='civil')
									 <li  class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown"> University</a>
                     <ul class="dropdown-menu"> 
					 @if(Request::segment(1)==='bit' or Request::segment(1)==='civil' or Request::segment(1)==='bca')
                      <li><a href="#purbanchal">PURBANCHAL UNIVERSITY</a></li>
                      <li><a href="#tribhuwan">TRIBHUWAN UNIVERSITY</a></li>
                      <li><a href="#pokhara">POKHARA UNIVERSITY</a></li>
					  @elseif(Request::segment(1)==='bit' )
					  <li><a href="#tribhuwan">TRIBHUWAN UNIVERSITY</a></li>
                      <li><a href="#pokhara">POKHARA UNIVERSITY</a></li>
					  @else(Request::segment(1)==='be' )
					  <li><a href="#pokhara">POKHARA UNIVERSITY</a></li>
                     @endif
					 </ul>
										</li>
										@else
									 <li><a href="#services" class="js-target-scroll">Services</a></li>
									 <li><a href="#portfolio" class="js-target-scroll">About us</a></li>
									  
									  <li><a href="#contact" class="js-target-scroll">Contact</a></li>
										@endif
									  <li  class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown"> Faculty </a>
									 	 <ul class="drop"> 
											<li><a href="{{url('bit')}}">bit</a></li>
											<li><a href="{{url('bca')}}" >BCA</a></li>
											<li><a href="{{url('be')}}"class="js-target-scroll">BE</a></li>
											<li><a href="{{url('civil')}}" class="js-target-scroll">CIVIL</a></li>
									
										 </ul>
									  </li>
									</ul>      
                          		</div>
							  
							 
       			
						</nav>
					</div>
    	        </div>
			  
			  </div>
			</div>
		</div>
</header> 

