<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<!--> <!--<![endif]-->
<html lang="en">

<!-- Mirrored from demos.ashmawi.work/html/kepler/home_8.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 14:03:50 GMT -->
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Full Width</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/style.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/font-awesome.min.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="{{asset('public/frontend')}}/img/favicon.png">

  <!-- Javascript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.v2.1.3.js"></script>
  <script type="text/javascript" src="{{asset('public/frontend')}}/js/bootstrap.min.js"></script>

</head>
<body>

  <!-- Full Width Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<!-- all_content -->
	<div class="all_content animsition container-fluid">
		<div class="row">
			<div class="header"><!-- Start header -->
				<div class="top_bar"><!-- Start top_bar -->
					<div class="min_top_bar"><!-- Start min_top_bar -->
						<div class="container">
							<div class="top_nav"><!-- Start top_nav -->
								
							</div><!-- End top_nav -->

							<div id="top_search_ico"><!-- Start top_search_ico -->
								<div class="top_search"><!-- Start top_search -->
									<form method="get"><input type="text" placeholder="Search and hit enter..."></form>
									<i class="fa fa-search search-desktop"></i>
								</div><!-- End top_search -->

								<div id="top_search_toggle"><!-- Start top_search_toggle -->
									<div id="search_toggle_top">
									<form method="get"><input type="text" placeholder="Search and hit enter..."></form>
									</div>
									<i class="fa fa-search search-desktop"></i>
								</div><!-- End top_search_toggle -->
							</div><!-- End top_search_ico -->

							<div class="social_icon"><!-- Start social_icon -->
								<span><a href="#"><i class="fa fa-facebook"></i></a></span>
								<span><a href="#"><i class="fa fa-twitter"></i></a></span>
								<span><a href="#"><i class="fa fa-google-plus"></i></a></span>
								<span><a href="#"><i class="fa fa-youtube"></i></a></span>
								<span><a href="#"><i class="fa fa-dribbble"></i></a></span>
								<span><a href="#"><i class="fa fa-behance"></i></a></span>
								<span><a href="#"><i class="fa fa-instagram"></i></a></span>
								<span><a href="#"><i class="fa fa-vimeo-square"></i></a></span>
								<span><a href="#"><i class="fa fa-linkedin"></i></a></span>
							</div><!-- End social_icon -->
						</div>
					</div><!-- End min_top_bar -->
				</div><!-- End top_bar -->

				<div class="main_header"><!-- Start main_header -->
					<div class="container">

						<div class="logo logo_blog_layout"><!-- Start logo -->
							<!-- <h3>logo</h3> -->
							<a href="index-2.html"><img src="{{asset('public/frontend')}}/img/demo/newsbloglogo06.png" alt=""></a>
						</div><!-- End logo -->

						<div class="nav_bar"><!-- Start nav_bar -->
							<nav id="primary_nav_wrap"><!-- Start primary_nav_wrap -->
								<ul>
								  <li class="current-menu-item"><a href="{{URL::to('/')}}">Home</a>
								    <ul>
								      
								    </ul>
								  </li>
								  <li><a href="#">Category</a>
								    <ul>
								      <li><a href="#">Politics</a></li>
								      <li><a href="#">Sports</a></li>
								      <li><a href="#">Technology</a></li>
								      <li><a href="{{URL::to('/all-category')}}">Entertainment</a></li>
								    </ul>
								  </li>

							      <li><a href="">about</a></li>
							      <li><a href="{{URL::to('/contact')}}">contact</a></li>

								</ul>
							</nav><!-- End primary_nav_wrap -->
						</div><!-- End nav_bar -->
						
						<div class="hz_responsive"><!--button for responsive menu-->
							<div id="dl-menu" class="dl-menuwrapper">
								<button class="dl-trigger">Open Menu</button>
							<ul class="dl-menu">
							  <li class="current-menu-item"><a href="index-2.html">Home</a>
							    <ul class="dl-submenu">
							      <li><a href="full_width.html">full width</a>
							      	<ul class="dl-submenu">
							      		<li><a href="layout_left_sidebar.html">Lift Sidebar</a></li>
							      		<li><a href="index-2.html">Right Sidebar</a></li>
							      	</ul>
							      </li>
							      <li><a href="grid_layout.html">Grid Layout</a>
							      	<ul class="dl-submenu">
							      		<li><a href="grid_layout_left_sidebar.html">Left Sidebar</a></li>
							      		<li><a href="grid_layout_right_sidebar.html">Right Sidebar</a></li>
							      	</ul>
							      </li>
							      <li><a href="list_layout.html">List Layout</a>
							      	<ul class="dl-submenu">
							      		<li><a href="list_layout_left_sidebar.html">List Left Sidebar</a></li>
							      		<li><a href="list_layout_right_sidebar.html">List Right Sidebar</a></li>
							      	</ul>
							      </li>
							    </ul>
							  </li>
							  <li><a href="#">Pages</a>
							    <ul class="dl-submenu">
							      <li><a href="single.html">Single</a></li>
							      <li><a href="about_me.html">about me</a></li>
							      <li><a href="contact.html">contact</a></li>
							      <li><a href="authors.html">Authors</a></li>
							      <li><a href="archive.html">archive</a></li>
							      <li><a href="404.html">404</a></li>
							    </ul>
							  </li>
							  <li><a href="#">single post</a>
							    <ul class="dl-submenu">
							      <li><a href="single_full_width.html">single full Width</a></li>
							      <li><a href="single_left_sidebar.html">single left sidebar</a></li>
							      <li><a href="single_right_sidebar.html">single right sidebar</a></li>
							    </ul>
							  </li>
							  <li><a href="#">Category</a>
							    <ul class="dl-submenu">
							      <li><a href="#">Politics</a></li>
							      <li><a href="#">Category 2</a></li>
							      <li><a href="#">Category 3</a></li>
							      <li><a href="#">Sports</a></li>
							      <li><a href="#">Technology</a></li>
							      <li><a href="#">Entertainment</a></li>
							    </ul>
							  </li>

						      <li><a href="about_me.html">about me</a></li>
						      <li><a href="contact.html">contact</a></li>
							</ul>
							</div><!-- /dl-menuwrapper -->
						</div><!--End button for responsive menu-->
						
					</div>
				</div><!-- End main_header -->
			</div><!-- End header -->

			@yield('main_content')
			

			<div id="footer" class="footer container-fulid"><!-- Start footer -->
				<footer class="main_footer"><!-- Start main_footer -->
					<div class="container">
						<div class="row">

							<div class="col-sm-4"><!-- Start widget_text -->
								<div id="text-3" class="widget widget_text">
									<h4 class="widget_title">Newsblog</h4>
									<div class="textwidget">
										Newsblog is a news website !
									</div>
								</div>	
							</div><!-- End widget_text -->
							
							
							
				</footer><!-- End main_footer -->

				<div class="copyright"> <!-- Start copyright -->
					<div class="hmztop">Scroll To Top</div><!-- Back top -->
					<div class="footer_logo"><!-- Start footer logo -->
						<a href="#"><img src="img/ alt="Logo"></a>
					</div><!-- End footer logo -->
					<div class="social_icon"><!--Start social_icon -->
						<span><a href="#"><i class="fa fa-facebook"></i></a></span>
						<span><a href="#"><i class="fa fa-twitter"></i></a></span>
						<span><a href="#"><i class="fa fa-google-plus"></i></a></span>
						<span><a href="#"><i class="fa fa-youtube"></i></a></span>
						<span><a href="#"><i class="fa fa-dribbble"></i></a></span>
						<span><a href="#"><i class="fa fa-behance"></i></a></span>
						<span><a href="#"><i class="fa fa-instagram"></i></a></span>
						<span><a href="#"><i class="fa fa-vimeo-square"></i></a></span>
						<span><a href="#"><i class="fa fa-skype"></i></a></span>
						<span><a href="#"><i class="fa fa-linkedin"></i></a></span>
					</div><!--End social_icon -->
					<p>Copyrights © 2015 All Rights Reserved by <a href="#">Hamzh</a></p>
				</div><!-- End copyright --> 
			</div><!-- End footer -->
		</div><!-- End row -->
	</div>
	<!-- End all_content -->

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<!-- Javascript
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/modernizr.min.js"></script>
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/owl.carousel.js"></script>
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/isotope.js"></script>
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.jribbble-1.0.1.ugly.js"></script>
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="{{asset('public/frontend')}}/js/hamzh.js"></script>
</body>

<!-- Mirrored from demos.ashmawi.work/html/kepler/home_8.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 14:03:50 GMT -->
</html>
