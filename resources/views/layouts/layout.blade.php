<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
  
<!-- Mirrored from premiumlayers.net/demo/html/medicare/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Nov 2019 05:48:56 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MEDICARE | Home Page</title>


	<!-- Font awesome css -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
	<!-- owl Carousel css -->
	<link rel="stylesheet" href="{{ asset('css/theme_default.css')}}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')
    }}">
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" href="{{ asset('rs-plugin/css/settings.css')}}" media="screen" />
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/slicknav.min.css')}}">
	
	<!-- PrettyPhoto css -->
	<link rel="stylesheet" href="{{ asset('css/prettyPhoto.css')}}">
	
	<!-- DatePicker css -->
	<link rel="stylesheet" href="{{ asset('css/datepicker.css')}}">
	
	<!-- Tabs css -->
	<link rel="stylesheet" href="{{ asset('css/easy-responsive-tabs.css')}}">
	
	<!-- Accordian css -->
	<link rel="stylesheet" href="{{ asset('css/smk-accordion.css')}}">
	
	<!-- Custom css -->
	<link rel="stylesheet" href="{{ asset('style.css')}}">
	<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
	
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!-- This Template Is Fully Coded By Shakhawat H. from codingcouples.com -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	</head>
  <body>
		<div class="main_header">
			<!-- Start Header Top -->
			<div class="header_top_area">
				<div class="container">
					<div class="header_top">
						<ul>
							<li><a href="mailto:info@medicare.com"><i class="fa fa-envelope"></i> info@medicare.com</a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
						</ul>
					</div>
				</div>	
			</div>
			<!-- End Header Top-->
			
			<!-- Start Header -->
			<div class="header">
				<div class="container">
					<div class="logo_contact_info_part">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="logo">
								<a href="index.html"><img src="{{ asset('svg/logo.png')}}" alt="logo" /></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="cont_info">
								<div class="week">
									<img src="{{ asset('svg/date_icon.png')}}" alt="date" />
									<p>Mon to Sat <br><span>9 am to 8 PM</span> </p>
								</div>
								<div class="call_us">
									<img src="{{ asset('svg/mobile_icon.png')}}" alt="date" />
									<p>Call Us <br><span>132456798000</span> </p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="booking_cart">
								<div class="cart_count">
									<a href="#"><i class="fa fa-shopping-cart"></i> <span class="cart_co">2</span></a>
								</div>
								<div class="book_now">
									<a href="#">Book Appointment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Header -->	

            @yield('content')

<!-- Start Footer -->
<div class="footer_top_area">
			<div class="footer_top">
				<div class="container">
					<div class="footertop">
						<div class="col-md-3 col-sm-4">
							<div class="faddress">
								<img src="{{ asset('svg/map_dir.png')}}" alt="address" />
								<h3>Address</h3>
								<p>E104, Dharti 2, Near Silverstar, <br>Chennai, India</p>
							</div>
						</div>	
						<div class="col-md-3 col-sm-4">
							<div class="emcall">
								<img src="{{ asset('svg/emcall.png')}}" alt="address" />
								<h3>Emergency ( 24x7 )</h3>
								<p>Mobile: +91 132456798000 <br>Toll Free : 123 456 7890</p>
							</div>
						</div>	
						<div class="col-md-3 col-sm-4">
							<div class="emailus">
								<img src="{{ asset('svg/mess.png')}}" alt="address" />
								<h3>Email Us</h3>
								<p>info@medicare.com  & <br>info@medicarecenter.com</p>
							</div>
						</div>	
						<div class="col-md-3 col-sm-3 display-none">
							<div class="emailus">
								<img src="{{ asset('svg/clock.png')}}" alt="address" />
								<h3>Working Hours</h3>
								<p>Mon to Sat  <span>9 AM to 11 PM </span><br> 
								Sunday <span>10 AM to 6 PM </span></p>
							</div>
						</div>	
					</div>
				</div>
			</div>
			
			<div class="footer_middle">
				<div class="container">
					<div class="newsletter_part">
						<div class="col-md-4 col-sm-5 paddingltnone">
							<div class="news_letter">
								<h4>Subscribe Newsletter</h4>	
								<input type="email" id="nwsemail" placeholder="Email ID"/>
								<input type="submit" id="nwssubmit" value="GO" />
							</div>
						</div>	
						<div class="col-md-8 col-sm-7">
							<div class="medicare">
								<h3>About Medicare</h3>
								<p>Pellentesque turpis felis, dignissim sit amet sagittis ac, elemenmet sagittis ac, elemen elemeet sagittis ac, augugue. Aliquam vitae enim risus, at laoreet metus. </p>
							</div>
						</div>	
					</div>
				</div>
			</div>

			<div class="footer_menu_area">
				<div class="container">
					<div class="footer_menu_in">
						<div class="col-md-10 col-sm-10">
							<div class="footer_menu">
								<nav>
								    <ul>                                
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="doctors.html">Doctors</a></li>
                                        <li><a href="service.html">Services</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="elements.html">Element</a></li>
                                        <li><a href="faqs.html">Term& condition</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
								</nav>
							</div>					
						</div>
						<div class="col-md-2 col-sm-2">
							<div class="back_top">
								<a href="#"><img src="{{ asset('svg/backtop.png')}}" alt="backtop" /></a>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer -->
		
		
		<!-- Start Footer Bottom -->
		<div class="footer_bottom">
			<div class="container">
				<div class="footer_copyright">
					<div class="col-md-8 col-sm-8">
						<div class="copy_text">
							<p>&copy; Copyright 2015. All Rights Reserved by <a href="#">Medicare</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Bottom -->
		
		<!-- JS Files -->
		<script src="{{ asset('js/vendor/jquery-1.11.2.min.js')}}"></script>
		<!-- Google Maps API -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
		<!-- Bootstrap -->
		<script src="{{ asset('js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('js/jquery.slicknav.min.js')}}"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<script src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
		<!-- Bootstrap DatePicker-->
		<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
		<!-- Owl Carousel-->
		<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
		<!-- Mixitup -->
		<script src="{{ asset('js/jquery.mixitup.js')}}"></script>
		<!-- Prity Photo -->
		<script src="{{ asset('js/jquery.prettyPhoto.js')}}"></script>
		<!-- Accourdion -->
		<script src="{{ asset('js/smk-accordion.js')}}"></script>
		<!-- Easy Responsive Tab -->
		<script src="{{ asset('js/easyResponsiveTabs.js')}}"></script>

		<!--Opacity & Other IE fix for older browser-->
		<!--[if lte IE 8]>
			<script type="text/javascript" 	src="js/ie-opacity-polyfill.js"></script>
		<![endif]-->
		<script src="{{ asset('js/main.js')}}"></script>
  </body>

<!-- Mirrored from premiumlayers.net/demo/html/medicare/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Nov 2019 05:56:23 GMT -->
</html>