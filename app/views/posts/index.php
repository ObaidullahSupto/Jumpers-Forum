<div class="page-container">
	<div class="container">
		<div class="row">
			<!-- start of page content -->
			<div class="span8 main-listing">
				<?php if($posts) : ?>
				<?php foreach ($posts as $post): ?>	
				<article  class="clearfix">
					<header class="clearfix">
						<h3 class="post-title">
							<a href="#"><i class="fas fa-edit"></i> <?php echo $post['title']; ?></a>
						</h3>
						<div class="post-meta clearfix">
							<span class="date"><i class="fa fa-calendar-o"></i> <?php echo $post['created_at'];?> in <b><?php echo $post['name'];?></b></span>
						</div><!-- end of post meta -->
					</header>
					<p><?php echo word_limiter($post['body'],60); ?><a class="readmore-link" href="<?php echo site_url('/posts/'.$post['slug']);?>"> <b>Read more</b></a></p>
				</article>
				<?php endforeach;?>
				<?php else : ?>
				 <center><h3>No Post To Display</h3></center>
				<?php endif; ?>	

				<div class='pagination-links'>
					<?php echo $this->pagination->create_links(); ?>		
				</div>					
			</div>

			<aside class="span4 page-sidebar">

				<section class="widget">
					<div class="support-widget">
						<h3 class="title">Support</h3><p class="intro">Need more support? If you did not found an answer, contact us for further help.</p>
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
		</div>
	</div>
</div>


