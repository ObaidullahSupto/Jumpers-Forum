<div class="page-container">
	<div class="container">
		<div class="row">
			<!-- start of Slider -->
			<div class="span8 page-content">
				<div id="" class="w3-content w3-section" >
				  <img class="mySlides" src="<?php echo base_url();?>images/ai/cover.png" style="width:100%; height:330px;">
				  <img class="mySlides" src="<?php echo base_url();?>images/ai/ai.png" style="width:100%; height:330px;">
				  <img class="mySlides" src="<?php echo base_url();?>images/ai/juli.png" style="width:100%; height:330px;">
				  <img class="mySlides" src="<?php echo base_url();?>images/ai/aiml.jpg" style="width:100%; height:330px;">
				  <img class="mySlides" src="<?php echo base_url();?>images/ai/aiml.png" style="width:100%; height:330px;">
				  <img class="mySlides" src="<?php echo base_url();?>images/ai/dia.png" style="width:100%; height:330px;">
				</div>
			</div>
			<!-- end of Slider -->
			<!-- start of sidebar -->
			<aside class="span4 page-sidebar">
				<section class="widget">
					<div class="support-widget">
						<h3 class="title">Support</h3>
						<p class="intro">Need more support? If you did not found an answer, contact us for further help.</p>
					</div>
				</section>

				<section class="widget">
					<div class="quick-links-widget"><h3 class="title">Quick Links</h3>
						<ul id="menu-quick-links" class="menu clearfix">
							<li><a href="<?php echo base_url();?>">Forums</a></li>
							<li><a href="<?php echo base_url();?>contact">Contact</a></li>					
							<!-- If not logged in /not registered -->
							<?php if(!$this->session->userdata('logged_in')): ?>
								<li><a href="<?php echo base_url();?>users/login">Log In</a></li>
								<li><a href="<?php echo base_url();?>users/register">Sign Up</a></li>
							<?php endif; ?>
							<!-- If logged in / registered -->
							<?php if($this->session->userdata('logged_in')): ?>
								<li><a href="<?php echo base_url();?>categories/create">Create Category</a></li>
								<li><a href="<?php echo base_url();?>posts/create">Create Post</a></li>
								<li><a href="<?php echo base_url();?>users/logout">Sign out</a></li>
							<?php endif; ?>	
						</ul>
					</div>
				</section>
			</aside>
			<!-- end of sidebar -->

			<div class="span12 page-content">
				<hr>
				<center><h2>JUMPers Forum</h2></center>
				<hr>
				<div class="container">
					<div id="primary" class="sidebar-right clearfix">
						<div class="ht-container">
							<main id="content" role="main">
								<div id="bbp-container">
									<div id="bbp-content" role="main">
										<div id="forum-front" class="bbp-forum-front">
											<div class="entry-content">
												<div id="bbpress-forums">
													<ul class="bbp-forums">
														<li class="bbp-body">
															<ul class="odd status-category forum hentry">	
																<li class="bbp-forum-info">	
																	<?php foreach($categories as $category) : ?>
																	<div class="bbp-forum-header">
																		<a class="bbp-forum-title" href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>					
																	</div>
																	<ul class="bbp-forums-list">	
																		<li class='odd-forum-row'>
																			<ul>
																				<li class="bbp-forum clearfix">
																					<div class="bbp-forum-title-container">
																						<a href='<?php echo site_url('/categories/posts/'.$category['id']); ?>' class="bbp-forum-description">Announcements</a>
																						<p class="bbp-forum-description">Click to view all post related to this topic </p>
																					</div>
																					<div class="topic-reply-counts">Total Topics:
																						<?php 
																							$servername="localhost";
																							$username="eclbikyu_forum";
																							$password="eclit@os18";
																							$dbname="eclbikyu_community";
																							$con=mysqli_connect($servername,$username,$password,$dbname);
																							$totalcat="SELECT count(id) AS total FROM categories";										
																							$resultcat=mysqli_query($con,$totalcat);
																							$values=mysqli_fetch_assoc($resultcat);
																							$num_rows=$values['total'];
																							echo $num_rows;
																						?>
																						<br/>Posts:
																						<?php 
																							$servername="localhost";
																							$username="eclbikyu_forum";
																							$password="eclit@os18";
																							$dbname="eclbikyu_community";
																							$con=mysqli_connect($servername,$username,$password,$dbname);
																							$totalp="SELECT count(id) AS total FROM posts";										
																							$resultp=mysqli_query($con,$totalp);
																							$values=mysqli_fetch_assoc($resultp);
																							$num_rows=$values['total'];
																							echo $num_rows;
																						?>
																					</div>
																					<div class='freshness-forum-link'>
																						<div class='last-posted-topic-title'>
																							Created Date
																						</div>
																						<div class='last-posted-topic-time'><b><?php echo $category['created_at']; ?></b></div>
																					</div>
																				</li>
																			</ul>
																		</li>												
																	</ul>
																	<?php endforeach; ?>												 	
																</li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</main>				
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>
