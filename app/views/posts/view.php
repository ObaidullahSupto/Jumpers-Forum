<!--Start of Page Container -->
<div class="page-container">
	<div class="container">
		<div class="row">
			<!-- start of page content -->
			<div class="span8 page-content">
				<article id="post-99" class="clearfix">
							<h1 class="post-title">
								<a href="#"><?php echo $post['title'];?></a>
							</h1>
							<div class="post-meta clearfix">
								<span class="date"><i class="fa fa-calendar-o"></i>  <?php echo $post['created_at'];?></span>
							</div><!-- end of post meta -->
							<p><?php echo $post['body'];?></p>							
				</article>
				<hr>						
				<section id="comments">
					<h3 id="comments-title">Comments</h3>
		    			<ol class="commentlist">
		    				<?php if($comments) : ?>
		    				<?php foreach ($comments as $comment): ?>	
							<li class="comment" >
								<article>
									<a href="#">
										<img alt='img' src='<?php echo base_url()?>images/profile.png'  class='avatar avatar-60 photo' height='60' width='60'/>
									</a>
									<div class="comment-meta">
										<h5 class="author">
											<cite class="fn"><a href='#' class='url'><?php echo $comment['name'];?></a></cite> 
										</h5>
										<br>
										<p class="date">
											<a href="#"><?php echo $comment['created_at'];?></a>
										</p>
									</div><!-- end .comment-meta -->
									<div class="comment-body">			
										<p><?php echo $comment['body'];?></p>	
									</div><!-- end of comment-body -->
								</article><!-- end of comment -->	
							</li><!-- #comment-## -->
							<?php endforeach; ?>
							 <?php else : ?>
				    		<h4>No Comments To Display</h4>
							<?php endif; ?>	
					    </ol>
					    <hr>
					    <div id="respond">
					    	<div id="respond" class="comment-respond">
								<h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>
								<?php echo validation_errors();?>
								<?php echo form_open('comments/create/'.$post['id']); ?>
								<form action="#" method="post" id="commentform" class="comment-form">
									<p class="comment-notes">
										<span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
									</p>

									<p class="comment-form-comment"><label for="comment">Comment</label>
										<textarea style="width:80%" id="comment" name="body" cols="45" rows="8" maxlength="65525" required="required"></textarea>
									</p>

									<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label>
										<input style="width:50%" id="author" name="name" type="text" value="" size="30" maxlength="245" required='required' />
									</p>

									<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label>
										<input style="width:50%" id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" required='required' />
									</p>
									<p class="form-submit">
										<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
										<input name="submit" type="submit" id="comment" class="btn" value="Submit Comment" />
									</p>
								</form>
							</div><!-- #respond -->
					    </div>
				</section><!-- end of comments -->
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
<!-- End of Page Container-->