<!DOCTYPE html>
<html lang="en">
<head>
<title>Goa College of Engineering</title>
	<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page Template">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
	

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top" style="background-color: black;">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							+91-832-2336301/401/303/302
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							gec@gec.ac.in
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-instagram"></i></a>
							<a href=""><i class="fa fa-pinterest"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
						<div class="user-panel">
							<a href="" id="registerbutton"><i class="fa fa-user-circle-o"></i> Register</a>
							<a href="" id="logbutton"><i class="fa fa-sign-in"></i> Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="site-navbar">
					<center>	<a href="#" class="site-logo"><img style="margin-top: -30px; height:90px; margin-bottom:01px; opacity: 90%;" src="img/logo.png" alt=""></a></center>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<div class="bg-text">
						<div class="header-top" style=" opacity: 80%; padding:5px;">
						<ul class="main-menu">
						<li><a href="{{route('index')}}">Home</a></li>
							<li><a href="{{route('about')}}">About Us</a></li>
							<li><a href="{{route('contact')}}">Faculty</a></li>
							<li><a href="{{route('blog')}}">Departments</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
							<li><a href="{{route('contact')}}">Student</a></li>
						</ul>
                       </div>
                      </div>
		
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container hero-text text-white">
			<h2></h2>
			<p></p>
			<a href="{{route('about')}}" class="site-btn" style="color:black;">Welcome</a>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Filter form section -->
	<!-- <div class="filter-search" style="background-color: blue">
		<div class="container" style="background-color: black">
			<form class="filter-form" action="{{route('search_property')}}" method="post">
			@csrf
				<input style="width:29%;" type="text" name="rent" placeholder="Amount range e.g 15,000">
				<input style="width:29%;" type="text" name="c_name" placeholder="City">
				<select name="state">
				<option value="">-</option>
					<option value="Punjab">Kabankalan</option>
					<option value="Sindh">Bacolod</option>
					<option value="Kpk">Binalbagan</option>
					<option value="Blochistan">Hinigaran</option>
				</select>
				<button type="submit" class="site-btn fs-submit">SEARCH</button>
			</form>
		</div>
	</div> -->
	<!-- Filter form section end -->
		
	<!-- feature category section -->
	<section class="feature-category-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Current Activities</h3>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 f-cata">
					<a href="http://exam.gec.ac.in/gecgoa_new/">
					<img src="img/feature-cate/1.jpg" alt="">
					<h5>Online Exam Registration</h5></a>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
				<a href="http://exam.gec.ac.in/ONLINESEMREG/OnlineSem_Login.aspx">
					<img src="img/feature-cate/2.jpg" alt="">
					<h5>Sem Registration</h5></a>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
				<a href="">
					<img src="img/feature-cate/3.jpg" alt="">
					<h5>Result</h5></a>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
				<a href="">
					<img src="img/feature-cate/4.jpg" alt="">
					<h5>Syllabus</h5></a>
				</div>
			</div>
		</div>
	</section>
	<!-- feature category section end-->

	<!-- Services section -->
	<section class="services-section spad set-bg" data-setbg="img/service-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="img/service.jpg" alt="">
				</div>
				<div class="col-lg-5 offset-lg-1 pl-lg-0">
					<div class="section-title text-white">
						<h2>QUICK LINKS</h2>
					</div>
					<div class="services">
						<div class="service-item">
							<div class="service-text">
							<a href="https://www.goa.gov.in/">
								<h5>Government of Goa</h5>
							</div>
						</div>
						<div class="service-item">
							<div class="service-text">
							<a href="https://www.unigoa.ac.in/">
								<h5>Goa University</h5>
							</div>
						</div>
						<div class="service-item">
							<div class="service-text">
							<a href="https://dte.goa.gov.in/">
								<h5>Directorate of Technical Education</h5>
							</div>
						</div>
						<div class="service-item">
							<div class="service-text">
							<a href="https://www.hindi.aicte-india.org/">
								<h5>AICTE</h5>
							</div>
						</div><div class="service-item">
						<div class="service-text">
						<a href="https://www.education.gov.in/en">
								<h5>Ministry of Human Resource Development</h5>
                          </div>
						</div>



					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->

	<!-- Gallery section -->
	<section class="gallery-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Gallery</h3>
				
			</div>
			<div class="gallery">
				<div class="grid-sizer"></div>
				<a href="#" class="gallery-item grid-long set-bg" data-setbg="img/gallery/1.jpg">
					<div class="gi-info">
						<h3>GEC Entrance</h3>
						
					</div>
				</a>
				<a href="#" class="gallery-item grid-wide set-bg" data-setbg="img/gallery/2.jpg">
					<div class="gi-info">
						<h3>Mining Department</h3>
						
					</div>
				</a>
				<a href="#" class="gallery-item set-bg" data-setbg="img/gallery/3.jpg">
					<div class="gi-info">
						<h3>Top View</h3>
						
					</div>
				</a>
				<a href="#" class="gallery-item set-bg" data-setbg="img/gallery/4.jpg">
					<div class="gi-info">
						<h3>Classroom</h3>
						
					</div>
				</a>
			</div>
		</div>
	</section>
	<!-- Gallery section end -->

	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Useful Information</h3>
				
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 blog-item">
					<h5><a href="http://www.gec.ac.in/uploaded_files/HelpDeskFile.pdf">Help Desk for Online Exam Registration</a></h5>
				</div>
				<div class="col-lg-4 col-md-6 blog-item">
					
					<h5><a href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm">SBI Online Fees Payment</a></h5>
				</div>
				<div class="col-lg-4 col-md-6 blog-item">
					<h5><a href="http://www.gec.ac.in/uploaded_files/HELP_FOR_ONLINE_FEE_PAYMENT_OF_FEES-_GEC_SBCOLLECT_1.pdf">Help for Online Fee Payment</a></h5>
				</div>
			</div>
			<br>
			<center><h4>For any exam related queries, please email on enquiry@gec.ac.in</h4></center>
		</div>
	</section>
	<!-- Blog section end -->

	<!-- Clients section -->
	<div class="clients-section">
		<div class="container">
			<div style="background-color: #00535b">
				<a href="#">
					<center><img src="img/StudentAssoc.jpg" alt=""></center>
				</a>
			</div>
		</div>
	</div>
	<!-- Clients section end -->



	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="img/logo.png" alt="">
					
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i><strong>Goa College of Engineering</strong>
                            <br>
                            "Bhausaheb Bandodkar Technical Education Complex"&nbsp;
                            Farmagudi, Ponda- Goa - India
                            Pin-403401<br></p>
						<p><i class="fa fa-phone"></i>Ph: 91-832-2336301/401/303/302</p>
						<p><i class="fa fa-envelope"></i>gec@gec.ac.in</p>
						
					</div>
				</div>
		
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="double-menu-widget">
						<h5 class="fw-title">Useful Links</h5>
						<ul>
						<li><a href="" target="_blank">Student Education Verification</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Apply Now</a></li>
                            <li><a href="#">Scholarships</a></li>
                            <li><a href="#">FAQs</a></li>
						</ul>
						
					</div>
				</div>
				
			</div>
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
					<li><a href="{{route('index')}}">Home</a></li>
							<li><a href="{{route('about')}}">About Us</a></li>
							<li><a href="{{route('postpage')}}">Faculty</a></li>
							<li><a href="{{route('blog')}}">Departments</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
							<li><a href="{{route('contact')}}">Students</a></li>
					</ul>
				</div>
				<span style="color:white">Copyright 2022. GCE Goa. All Rights Reserved</span>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->






<!-- Modal for Button-->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/login.jpg');">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> UP</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
        
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <a href="{{route('signupadvisor')}} "><button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Property Advisor</button></a>
            </div>
            <!--Grid column-->
          </div>
		  <!--Grid row-->
		    <!--Grid row-->
			<div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <a href="{{route('signuptenet')}} "><button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Tenant</button></a>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12">
              <p  class="font-small white-text d-flex justify-content-end">Have an account? <a href="#" id="loginform" class="green-text ml-1 font-weight-bold">
                  Log in</a></p>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->

        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal for Button -->
<!-- Modal Login -->	
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
	<!--Content-->
	@if(Session::has('msg'))
			<span style="background-color:black; padding:10px; color:white; font-weight:bold; border-radius=10px;">{{Session('msg')}}</span>
	@endif
    <div class="modal-content card card-image" style="background-image: url('img/login.jpg');">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> In</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
		  <form action="{{route('login')}}" method="post" autocomplete="off">
		  @csrf
		@if ($errors->any())
			<div class="alert alert-danger alert-dismissable">
				<a class="panel-close close" data-dismiss="alert">×</a>
				@foreach ($errors->all() as $error)
					<div class="glyphicon glyphicon-warning-sign">&nbsp</div><b>{{ $error }}</b>
					<br />
				@endforeach
			</div>
		@endif
          <div class="md-form mb-5">
            <input type="email" name="email" id="Form-email5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-email5">Your email</label>
          </div>
          <div class="md-form pb-3">
            <input type="password" name="pass"  id="Form-pass5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-pass5">Your password</label>
          </div>
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1">Sign in</button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
		  </form>
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12">
              <p  class="font-small white-text d-flex justify-content-end">Create Account? <a href="#" id="createsignup" class="green-text ml-1 font-weight-bold">
                  Signup</a></p>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal for signin-->

                    
	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<!-- smodel script -->
	<script> 
		$('#registerbutton').on('click', function() {
    //  alert("hello"); 
     $('#register').modal('show');  
 });
 $('#logbutton').on('click', function() {
    //  alert("hello"); 
     $('#login').modal('show');  
 });
 $('#createsignup').on('click', function() {
	//  alert("hello"); 
	$('#login').modal('hide');
     $('#register').modal('show');  
 });
 $('#loginform').on('click', function() {
	//  alert("hello"); 
	$('#register').modal('hide');
     $('#login').modal('show');  
 });
	</script>
	@if(Session::has('msg'))
		 <script>
		 $('#login').modal('show');  
		 </script>
	@endif
	
	
</body>
</html>