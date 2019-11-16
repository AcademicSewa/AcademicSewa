@extends('layouts.userlayouts.master')
@section('content')
<section id="home" class="top_banner_bg secondary-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="top_banner">
				
				</div>
				
				<div class="col-md-6">
					<div class="present">
						<h1> Introducing AcademicSewa</h1>
					
						
						<h5 style="font-size:30px;">Affiliated  with</h5> <h3><b>Purbachal University,<b>Tribhuwan University,</b><b>Pokhara University</b> </h3>
						
						
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="present_img">
						<img src="{{asset('userassets/images/banner_top.jpeg')}}" alt="image">
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<div class="mh-subheader"
>
        @if(session()->has('adminpost'))
        {{session()->get('message')}}
        @endif 
		<div class="mh-container mh-container-inner mh-row clearfix">
		<div class="mh-header-bar-content mh-header-bar-bottom-left mh-col-2-3 clearfix">
		<div class="mh-header-ticker mh-header-ticker-bottom">
		<div class="mh-ticker-bottom">
		<div class="mh-ticker-title mh-ticker-title-bottom">
		@if(count($adminposts)>0)
    	 @foreach($adminposts as $adminpost)
		<b>{{$adminpost->title}}</b><i class="fa fa-chevron-right"></i>		
			</div>
		<div class="mh-ticker-content mh-ticker-content-bottom">

		<ul id="mh-ticker-loop-bottom">	

	
		<i class="fa fa-caret-right"></i>{{$adminpost->message}}</span>
		</a>
					
				
		</div>						 
		</div>
		</div>

	</ul>
	@endforeach
	@else
   <p>No posts found</p>
    @endif
</div>
</div>


<section class="primary-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="section_heading">
				<h2>UNIVERSITIES </h2>
				
				</div>
<div class="container my-4">
<div class="row">
 <div class="card col-lg-4" style="width: 35rem;">
  <img src="{{asset('userassets/images/tuu.png')}}" class="card-img-top" alt="...">
   <div class="card-body">
   <strong> <h3 class="card-title">TRIBHUWAN UNIVERSITY</h3></strong>
    <p class="card-text">Tribhuvan University (TU) is a public university in Kirtipur, Kathmandu, Nepal. Established in 1959, TU is the oldest university in Nepal. In terms of enrollment, it is the tenth largest university in the world. The university offers 2,079 undergraduate and 2,000 postgraduate programs across a wide range of disciplines.</p>
    <a href="https://tribhuvan-university.edu.np/" target='_blank' class="btn btn-primary">See more>></a>
   </div>
 </div>

<div class="card col-lg-4" style="width: 35rem;">
  <img src="{{asset('userassets/images/pu.png')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <br><h3 class="card-title">PURBANCHAL UNIVERSITY</h3>
    <p class="card-text">Purbanchal University (PU), a public university in Biratnagar, was established in 1993 by the Government of Nepal with its fundamental objective of preserving, refining, inventing, adopting, extending and transmitting knowledge in an environment that fosters free enquiry and open scholarly debate, leading to all-encompassing development of the rural people and their economies and environment.  </p>
    <a href="http://purbuniv.edu.np/" class="btn btn-primary" target='_blank'>See more>></a>
  </div>
</div>	

<div class="card col-lg-12" style="width: 35rem;">
  <img src="{{asset('userassets/images/pou1.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
	<br><h3 class="card-title">POKHARA UNIVERSITY</h3>
    <p class="card-text">Pokhara University (PU/PoU), was established in 1997 as Nepal's fifth university.Its central office is in Pokhara Lekhnath municipality, Kaski district, Western Development Region. Along with Purbanchal University, PU was formed as part of the government's policy for improved access to higher education.</p>
    <a href="https://pu.edu.np/" class="btn btn-primary" target='_blank' >See more>></a>
  </div>
</div>

</div>
</div>				
			
</section>

<!--our services-->
<section id="services" class="padding_bottom_none our_service_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section_heading section_heading_2">
					<h2> Our Services </h2>
				
					<h2> AcademicSewa provides a best services that makes learning easier.</h2>
				</div>
				
				<div class="col-md-5 pull-right">
					<div class="services_detail">
						<ul>
							<li>
								<a href="#"><span><i class="far fa-file-pdf" aria-hidden="true"></i></span> 
								<h5> NOTES </h5></a>
								<p></p>
							</li>
							
							<li>
								<a href="#"><span><i class="far fa-file-pdf" aria-hidden="true"></i></span> 
								<h5> SYLLABUS </h5></a>
								<p></p>
							</li>
							
							<li>
								<a href="#"><span><i class="far fa-file-pdf" aria-hidden="true"></i></span> 
								<h5> OLD QUESTIONS </h5></a>
								<p> </p>
							</li>
						</ul>
						
					</div>
				</div>
				
				<div class="col-md-7">
					<div class="services_img">
						<img src="{{asset('userassets/images/pen.jpg')}}" alt="image-1">
					</div>
						
					<div class="services_img_n">
						<img src="{{asset('userassets/images/pen.jpg')}}" alt="image-1">
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!--About us-->
<section id="portfolio" class="fifth-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			
				<div class="section_heading">
					<h2> About us </h2>
					<div class="card-text "><h3 style="text-align: left;">Our Mission</h3>
					<h4>AcademicSewa mission is to prepare students for advance knowledge and educate in the field of respective faculties.We seek to help every students efficiently for betterment of human kind. </h4>
					<br>
					<h3 style="text-align: left;">Our Vision</h3>
					<h4>AcademicSewa is simply notes,old questions and syllabus  providing website that help students to study regarding all needed materials for  practical and theoretical knowledge that enables students to better understand through our notes. </h4>

				</div></div>
						
			</div>
		</div>
	</div>
</section>


<!--contact us-->
<section id="contact" class="contact_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section_heading section_heading_2">
					<h2> Contact Us </h2>
				
					<h4>Let drop a message to us & we will be in touch soon.</h4>
				</div>
							
				<div class="col-md-6">
					<div class="contact_form">
					@foreach($errors->all() as $error)
        {{$error}}
        @endforeach
					<form method="POST" action="{{ url('addmessage') }}">{{csrf_field()}}
					  <div class="form-group">
						<label >Full Name : <span> *</span></label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="full_name" >
					  </div>
					  
					  <div class="form-group">
						<label >Email Address : <span> *</span></label>
						<input type="email" class="form-control" id="exampleInputPassword1" name="email" >
					  </div>
					  
					  <div class="form-group">
						<label>Message <span> *</span></label>
						<textarea class="form-textarea" rows="3" name="message"></textarea>
					 </div>
					  
					    <div class="section_sub_btn">
							<button class="btn btn-default" type="submit" name="submit" value="submit">  Send Message</button>	
						</div>
					</form> 
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="contact_text">
						<ul>
							<li>
								<span><i class="fa fa-home" aria-hidden="true"></i></span> 
								<h5 style="font-size:30px;">Kathmandu,Nepal</h5>
							</li>
							
							<li>
								<span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> 
								<h5 style="font-size:30px;" > academicsewa@gmail.com </h5>
							</li>
							
						
						</ul>
						
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
   
</section>


@endsection