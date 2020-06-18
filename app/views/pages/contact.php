<!--Start of Page Container -->
<div class="page-container">
	<div class="container">
		<div class="row">
			<!-- start of page content -->
			<div class="span8 page-content">
				<article class="clearfix">
					<h1 class="post-title"><a href="#">Contact</a></h1>
					<hr>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				</article>				
				<form method="post" action="<?php echo base_url();?>email/send" enctype="multipart/form-data">
					<div class="span2">
						<label for="name">Your Name <span>*</span> </label>
					</div>
					<div class="span6">
						<input type="text" name="name" id="name" class="required input-xlarge" placeholder="Enter your name" required>
					</div>

					<div class="span2">
						<label for="email">Your Email <span>*</span></label>
					</div>
					<div class="span6">
						<input type="email" name="email" id="email" class="email required input-xlarge" placeholder="example@mail.com" required>
					</div>

					<div class="span2">
						<label for="reason">Subject </label>
					</div>
					<div class="span6">
						<input type="text" name="subject" id="reason" class="input-xlarge" placeholder="Subject" required>
					</div>

					<div class="span2">
						<label for="message">Your Message <span>*</span> </label>
					</div>
					<div class="span6">
						<textarea name="message" id="message" class="required span6" rows="6" placeholder="Write your message here" required></textarea>
					</div>

					<div class="span6 offset2 bm30">
						<input type="submit" name="submit" value="Send Message" class="btn btn-inverse"> 
                    </div>
				</form>
			</div>
			<!-- end of page content -->

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
		</div>
	</div>
</div>