@extend('master')
   @section('main_content')



<div class="main_content container">
				><!--End Mian slider -->
				<div class="posts_sidebar clearfix"><!-- Start posts sidebar -->
					<div class="inner_single col-md-12"> <!-- Start inner single -->
						<div class="row">	
									
							<article class="hz_post"><!-- Start article -->
								<div class="video_post post_wrapper">

									<div class="hz_thumb_post">
										<div class="embed-responsive embed-responsive-16by9">
											
											<img class="lightbox_image" src="{{asset('public/blog_img/'.$find_blog->blog_img)}}" alt=""/>
										</div>
									</div>	

									<div class="hz_top_post">

										<div class="hz_title_and_meta">
											<div class="hz_title"><h3><a href="#">{!! $find_blog->blog_title !!}</a></h3></div>
											<div class="hz_meta_post">
												<span class="hz_post_by"><i class="fa fa-user"></i><a href="#">Ashmawi Sami</a></span>
												<span class="hz_cat_post"><i class="fa fa-folder-open"></i><a href="#">Design</a></span>
												<span class="hz_date_post"><i class="fa fa-calendar"></i><a href="#">Mar 10, 2015</a></span>
												<span class="hz_date_post"><i class="fa fa-comments"></i><a href="#">Comments</a></span>
											</div>
										</div>
									</div>

									<div class="hz_main_post_content">
										<div class="hz_content">
											<p>
												{!! $find_blog->long_desc !!}
											</p>
										</div>

										<div class="hz_bottom_post">
										<!--	<div class="hz_tags">
												<span><a href="#">Design</a></span>
												<span><a href="#">photoshop</a></span>
												<span><a href="#">HTML</a></span>
											</div> -->

											<div class="hz_icon_shere">
			                                    <span class="share_toggle pi-btn">
			                                        <i class="fa fa-share-alt"></i>
			                                    </span>
			                                    <div class="hz_share">
													<span><a href="#"><i class="fa fa-facebook"></i></a></span>
													<span><a href="#"><i class="fa fa-twitter"></i></a></span>
													<span><a href="#"><i class="fa fa-google-plus"></i></a></span>
													<span><a href="#"><i class="fa fa-stumbleupon"></i></a></span>
												</div>
											</div>
										</div>
									</div>
								</div>
									
								<div class="user_info_post"><!--Start user info post -->
									<div class="post_title"><h4>About the Author</h4></div>
									<div class="user_pic">
										<img src="img/demo/pic.jpg" alt="Ashmawi Sami">
									</div>
									<div class="min_user_info">
										<h4>Ashmawi Sami</h4>
										<p>written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. 
										The first line of Lorem Ipsum, Written In 45 BC. This Book Is A Treatise On The Theory Of Ethics, Very Popular During The Renai Of Ethics, Very Popular During The Renaissance...</p>
									</div>
									<div class="social_icon">
										<span><a href="#"><i class="fa fa-facebook"></i></a></span>
										<span><a href="#"><i class="fa fa-twitter"></i></a></span>
									<!--	<span><a href="#"><i class="fa fa-google-plus"></i></a></span> -->
										<span><a href="#"><i class="fa fa-youtube"></i></a></span>
									<!--	<span><a href="#"><i class="fa fa-dribbble"></i></a></span> -->
									<!--	<span><a href="#"><i class="fa fa-behance"></i></a></span> -->
										<span><a href="#"><i class="fa fa-instagram"></i></a></span>
										<!--<span><a href="#"><i class="fa fa-vimeo-square"></i></a></span> -->
										<span><a href="#"><i class="fa fa-linkedin"></i></a></span>
									</div>
								</div><!--End user info post -->
									
								
									

								
									

									
								<div id="respond"><!-- Start respond Conmments -->
		                            <div class="reply-title">
		                                <h4 class="post_title">Give Us Feedback</h4>
		                            </div><!-- COMMENT FORM -->
		                            
		                           
										<div class="comment-form">
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
										</div>

		                            <!-- END / COMMENT FORM -->
		                        </div>
									<!-- End respond Conmments -->
							</article><!-- End article -->
									
						</div>	
					</div><!--End Posts Areaa -->
				</div><!-- End posts sidebar -->
			</div><!-- End main content -->

@endsection