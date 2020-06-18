<!doctype html>
<html lang="en-US">
<head>
	<!-- META TAGS -->
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>JUMPers Forum</title>
	<link rel='stylesheet' id='bbp-default-css'  href='<?php echo base_url();?>css/bbpress-2.5.14-6684.css' type='text/css' media='screen' />
 	<link rel='stylesheet' id='font-awesome-css'  href='https://mk0herothemesdek9380.kinstacdn.com/wp-content/plugins/heroic-social-widget/css/font-awesome.min.css' type='text/css' media='all' />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel='stylesheet'  href='<?php echo base_url();?>/css/bootstrap.css?' type='text/css' media='all' />
	<link rel='stylesheet'  href='<?php echo base_url();?>/css/main.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='<?php echo base_url();?>/css/responsive.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='<?php echo base_url();?>/css/prettyPhoto.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='<?php echo base_url();?>/css/style.css' type='text/css' media='all' />
	<link rel="shortcut icon" href="<?php echo base_url();?>/images/web.png">
	<script type='text/javascript' src='<?php echo base_url();?>/js/jquery.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>/js/migrate.min.js'></script>
	<style>
		table.gsc-search-box {
		    border-style: none;
		    border-width: 0;
		    border-spacing: 0 0;
		    width: 100%;
		    margin-bottom: -2px;
		}

		.gsc-input-box .gsc-input {
		    border: 1px solid #FFF !important;
		    padding: 4px 0 4px 2px !important;
		    margin-bottom: 0 !important;
		    -webkit-border-radius: 15px !important;
		    -moz-border-radius: 15px !important;
		    border-radius: 15px !important;
		}
	</style>
	<style id='ht-theme-style-inline-css' type='text/css'>
			a,a:visited,.bbp-author-name{color:#32a3cb}
			a:hover{color:#32a3cb}#site-header{background:#2e97bd}
			@media screen and (max-width:768px){#nav-primary-menu{background:#2e97bd}}
			#site-header,#site-header a,#site-header a:visited,#site-header a:hover,#nav-primary button
			{color:#fff}
			#page-header{background:#2d2320}
			#page-header,#page-header a,#page-header a:visited,#page-header a:hover,#page-header #page-header-title{color:#fff}
			#page-header #page-header-tagline{color:rgba(255,255,255,.9)}
			#ht-site-container.ht-layout-boxed{max-width:1200px;box-shadow:0 0 55px rgba(0,0,0,.15)}
			#homepage-features .hf-block i{color:#32a3cb}
			.hkb_widget_exit__btn{background:#32a3cb}
	</style>
</head>
<body class="home">
<!-- Start of Header -->
<div class="header-wrapper">
	<header>
		<div class="container">
			<div class="logo-container">
			<!-- Website Logo -->
				<a href="<?php echo base_url();?>" title="Community">								
					 <img src="<?php echo base_url();?>/images/try1.png" alt="community">
				</a>
				<span class="tag-line">JUMPers Forum - A Place For Discussion</span>
			</div>
				
			<!-- Start of Main Navigation -->
			<nav class="main-nav">
				<div class="menu-top-menu-container">
					<ul class="clearfix">
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
			</nav>

			<!-- End of Main Navigation -->
		</div>
	</header>
</div>
<!-- End of Header -->

<!-- Start of Search Wrapper -->
	<div class="search-area-wrapper">
		<div class="search-area container">
			<h3 class="search-header">Have a Question?</h3>
			<p class="search-tag-line">If you have any question you can ask below or enter what you are looking for!</p>
			<div class="container" style=" margin:10px; padding: 10px; ">
			<script>
			  (function() {
			    var cx = '003925813529638569328:zkikhyiereu';
			    var gcse = document.createElement('script');
			    gcse.type = 'text/javascript';
			    gcse.async = true;
			    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
			    var s = document.getElementsByTagName('script')[0];
			    s.parentNode.insertBefore(gcse, s);
			  })();
			</script>
				<gcse:search></gcse:search>

			</div>
			
		</div>
	</div><br>
<!-- End of Search Wrapper -->

<hr>
<div class="container">
	<!--Registration Message-->
	<?php if($this->session->flashdata('user_registered')): ?>
	<?php echo '<p class=" alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
	<?php endif; ?>
	<!--Post Creation Message -->
	<?php if($this->session->flashdata('post_created')): ?>
	<?php echo '<p class=" alert alert-success">'.$this->session->flashdata('post_created').'</p>';?>
	<?php endif; ?>
	<!--Category Creation Message -->
	<?php if($this->session->flashdata('category_created')) : ?>
	<?php echo '<p class=" alert alert-success">'.$this->session->flashdata('category_created').'</p>';?>
	<?php endif; ?>
	<!--Log in failed Message -->
	<?php if($this->session->flashdata('login_failed')) : ?>
	<?php echo '<p class=" alert alert-danger">'.$this->session->flashdata('login_failed').'</p>';?>
	<?php endif; ?>
	<!--Log in Message -->
	<?php if($this->session->flashdata('user_loggedin')) : ?>
	<?php echo '<p class=" alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
	<?php endif; ?>
	<!--Log out Message -->
	<?php if($this->session->flashdata('user_loggedout')) : ?>
	<?php echo '<p class=" alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>';?>
	<?php endif; ?>
	<!--Mail sent Message -->
	<?php if($this->session->flashdata('mail_sent')) : ?>
	<?php echo '<p class=" alert alert-success">'.$this->session->flashdata('mail_sent').'</p>';?>
	<?php endif; ?>
	<!--Mail failed Message -->
	<?php if($this->session->flashdata('mail_failed')) : ?>
	<?php echo '<p class=" alert alert-danger">'.$this->session->flashdata('mail_failed').'</p>';?>
	<?php endif; ?>
	<!--Comment Error -->
	<?php if($this->session->flashdata('comment_error')) : ?>
	<?php echo '<p class=" alert alert-danger">'.$this->session->flashdata('comment_error').'</p>';?>
	<?php endif; ?>
	<!--Comment Done-->
	<?php if($this->session->flashdata('comment_create')) : ?>
	<?php echo '<p class=" alert alert-success">'.$this->session->flashdata('comment_create').'</p>';?>
	<?php endif; ?>
</div>