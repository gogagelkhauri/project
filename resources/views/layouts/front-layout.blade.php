<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/colors/green.css')}}" id="colors">
@yield('style')

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
<div id="wrapper">


<!-- Header
================================================== -->
<header>
<div class="container">
	<div class="sixteen columns">
	
		<!-- Logo -->
		<div id="logo">
			<h1><a href="/"><img src="{{asset('frontend/images/logo.png')}}" alt="Work Scout" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="#">For Candidates</a>
					<ul>
						<li><a href="browse-jobs.html">Browse Jobs</a></li>
						<li><a href="browse-categories.html">Browse Categories</a></li>
						<li><a href="add-resume.html">Add Resume</a></li>
						<li><a href="manage-resumes.html">Manage Resumes</a></li>
						<li><a href="job-alerts.html">Job Alerts</a></li>
					</ul>
				</li>

				<li><a href="#">For Employers</a>
					<ul>
						<li><a href="add-job.html">Add Job</a></li>
						<li><a href="manage-jobs.html">Manage Jobs</a></li>
						<li><a href="manage-applications.html">Manage Applications</a></li>
						<li><a href="browse-resumes.html">Browse Resumes</a></li>
					</ul>
				</li>

				<li><a href="blog.html">Blog</a></li>
				<li><a href="/contact">Contact</a></li>
				@if (Route::has('login'))
				
					@auth
						
						<li><a href="">Goga</a>
						<form method="POST" id="logout" action="{{ route('logout') }}">
						@csrf
						</form>
						<ul>
							<li><a href="/profile"><i class="fa fa-user"></i> Profile</a></li>
							<li>
							<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
															document.getElementById('logout').submit();">
								<i class="fa fa-sign-out"></i> {{ __('Logout') }}
							</a>
							</li>
							
						</ul>	
						</li>
						
					
				
					@else
						<li><a href="/register"><i class="fa fa-user"></i> Sign Up</a></li>
				  		<li><a href="/login"><i class="fa fa-lock"></i> Log In</a></li>
				    @endif
			@endif
			</ul>


			<ul id="responsive" class="float-right">
			
			</ul>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>

@yield('content')

<!-- Footer
================================================== -->
<div class="margin-top-15"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="seven columns">
			<h4>About</h4>
			<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			<a href="#" class="button">Get Started</a>
		</div>

		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="#">About Us</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Our Blog</a></li>
				<li><a href="#">Terms of Service</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Hiring Hub</a></li>
			</ul>
		</div>
		
		<div class="three columns">
			<h4>Press</h4>
			<ul class="footer-links">
				<li><a href="#">In the News</a></li>
				<li><a href="#">Press Releases</a></li>
				<li><a href="#">Awards</a></li>
				<li><a href="#">Testimonials</a></li>
				<li><a href="#">Timeline</a></li>
			</ul>
		</div>		

		<div class="three columns">
			<h4>Browse</h4>
			<ul class="footer-links">
				<li><a href="#">Freelancers by Category</a></li>
				<li><a href="#">Freelancers in USA</a></li>
				<li><a href="#">Freelancers in UK</a></li>
				<li><a href="#">Freelancers in Canada</a></li>
				<li><a href="#">Freelancers in Australia</a></li>
				<li><a href="#">Find Jobs</a></li>

			</ul>
		</div>

	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
				<div class="copyrights">©  Copyright 2020 by <a href="#">Goga Gelkhauri</a>. All Rights Reserved.</div>
			</div>
		</div>
	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="{{asset('frontend/scripts/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('frontend/scripts/custom.js')}}"></script>
<script src="{{asset('frontend/scripts/jquery.superfish.js')}}"></script>
<script src="{{asset('frontend/scripts/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('frontend/scripts/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('frontend/scripts/jquery.themepunch.showbizpro.min.js')}}"></script>
<script src="{{asset('frontend/scripts/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('frontend/scripts/chosen.jquery.min.js')}}"></script>
<script src="{{asset('frontend/scripts/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/scripts/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/scripts/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/scripts/jquery.jpanelmenu.js')}}"></script>
<script src="{{asset('frontend/scripts/stacktable.js')}}"></script>
@yield('script')


</body>
</html>