@extend('master')
  @section('main_content')


<div class="main_content container"><!-- main_content -->
				<div class="main_page about_me col-md-8"><!-- main_page about_me -->
					<div class="row">

						<div class="post_header"><!-- post_header -->
							<h1>Contact us</h1>
							<span class="title_divider"></span>
						</div><!-- // post_header -->

						<div class="about_content"><!-- about_content -->
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
						</div><!-- // about_content -->

						<div class="comment-form"><!-- comment-form -->
							<form method="post" class="form-js" action="http://demos.ashmawi.work/html/kepler/contact_us.php">
								<div class="form-input">
									<i class="fa fa-user"></i>
									<input type="text" name="name" id="name" placeholder="Your Name">
								</div>
								<div class="form-input">
									<i class="fa fa-envelope"></i>
									<input type="email" name="mail" id="mail" placeholder="Email">
								</div>
								<div class="form-input">
									<i class="fa fa-home"></i>
									<input type="url" name="url" id="url" placeholder="URL">
								</div>
								<div class="form-input">
									<i class="fa fa-comment"></i>
									<textarea placeholder="Message" name="message" id="message"></textarea>
								</div>
								<input type="submit" class="button" value="Send Message"></form>
						</div><!-- // comment-form -->
					</div>
				</div><!-- // main_page about_me -->

				<div class="sidebar col-md-4"><!--Start Sidebar -->
					<div class="row">
						<div class="inner_sidebar">

							<div class="widget widget_search"><!-- Start widget search -->
								<h4 class="widget_title">Search</h4>
								<form>
									<input type="search" value="Search here ..." onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
									<input class="button" type="submit" value="Search Now">
								</form>
							</div><!-- End widget search -->
								
							<div class="widget widget_recent_post"><!-- Start widget recent post -->
								<h4 class="widget_title">Recent Post</h4>
								<ul class="recent_post">

									<li>
										<figure class="widget_post_thumbnail">
											<a href="#"><img src="img/demo/wid/1.png" height="80" width="80" alt="Appropriately simplify quality imperatives"></a>
										</figure>
										<div class="widget_post_info">
											<h5><a href="#">Appropriately simplify quality imperatives</a></h5>
											<div class="post_meta">
												<span><a href="#"><i class="fa fa-comments-o"></i> 0 comments</a></span>
												<span class="date_meta"><a href="#"><i class="fa fa-calendar"></i> Mar 10, 2015</a></span>
											</div>
										</div>
									</li>

									<li>
										<figure class="widget_post_thumbnail">
											<a href="#"><img src="img/demo/wid/2.png" height="80" width="80" alt="Appropriately simplify quality imperatives"></a>
										</figure>
										<div class="widget_post_info">
											<h5><a href="#">Appropriately simplify quality imperatives</a></h5>
											<div class="post_meta">
												<span><a href="#"><i class="fa fa-comments-o"></i> 0 comments</a></span>
												<span class="date_meta"><a href="#"><i class="fa fa-calendar"></i> Mar 10, 2015</a></span>
											</div>
										</div>
									</li>

									<li>
										<figure class="widget_post_thumbnail">
											<a href="#"><img src="img/demo/wid/3.png" height="80" width="80" alt="Appropriately simplify quality imperatives"></a>
										</figure>
										<div class="widget_post_info">
											<h5><a href="#">Appropriately simplify quality imperatives</a></h5>
											<div class="post_meta">
												<span><a href="#"><i class="fa fa-comments-o"></i> 0 comments</a></span>
												<span class="date_meta"><a href="#"><i class="fa fa-calendar"></i> Mar 10, 2015</a></span>
											</div>
										</div>
									</li>

									<li>
										<figure class="widget_post_thumbnail">
											<a href="#"><img src="img/demo/wid/4.png" height="80" width="80" alt="Appropriately simplify quality imperatives"></a>
										</figure>
										<div class="widget_post_info">
											<h5><a href="#">Appropriately simplify quality imperatives</a></h5>
											<div class="post_meta">
												<span><a href="#"><i class="fa fa-comments-o"></i> 0 comments</a></span>
												<span class="date_meta"><a href="#"><i class="fa fa-calendar"></i> Mar 10, 2015</a></span>
											</div>
										</div>
									</li>
								</ul>
							</div><!-- End widget recent post -->
								
							<div class="widget  widget_tag_cloud"><!-- Start widget tag cloud -->
								<h4 class="widget_title">Tags</h4>
								<div class="tagcloud">
									<a href="#">audio</a>
									<a href="#">dailymotion</a>
									<a href="#">Gallery</a>
									<a href="#">LightBox</a>
									<a href="#">Link</a>
									<a href="#">mp3</a>
									<a href="#">nature</a>
									<a href="#">post</a>
									<a href="#">Quote</a>
									<a href="#">slider</a>
									<a href="#">soundcloud</a>
									<a href="#">sport</a>
									<a href="#">Standard</a>
									<a href="#">Twitter</a>
									<a href="#">vimeo</a>
								</div>
							</div><!-- End widget tag cloud -->
						</div>
					</div>
				</div><!--End Sidebar -->
			</div><!-- main_content -->

			@endsection