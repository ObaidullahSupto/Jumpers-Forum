
<footer id='footer-wrapper' style="margin-top: 50px;">
<!-- Footer Bottom -->
<div id="footer-bottom-wrapper">
	<div id="footer-bottom" class="container">
		<div class="row">
			<div class="span6">
				<p class="copyright" style="color: #b6e0ff"> &copy Copyright 2018. All Rights Reserved | Developed by <a href="http://bimee.com.bd/" target="_blank" style="color: #b6e0ff"> BiMee.</a></p>
			</div>
			<div class="span6">
				<!-- Social Navigation -->
				<ul class="social-nav clearfix" >
					<li class="linkedin"><a target="_blank" href="#"></a></li>
					<li class="skype"><a target="_blank" href="#"></a></li>
					<li class="twitter"><a target="_blank" href="#"></a></li>
					<li class="facebook"><a target="_blank" href="#"></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End of Footer Bottom -->
</footer>
<!-- End of Footer -->
<a href="#top" id="scroll-top"></a>
<script type='text/javascript' src='<?php echo base_url();?>/js/editor.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>/js/prettyPhoto.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>/js/easing.1.3.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>/js/validate.min.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>/js/form.min.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>/js/liveSearch.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>/js/custom.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>/js/comment-reply.min.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>/js/twitter-widgets.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>/js/wp-embed.min.js'></script>
<script>//slider script for home slider
		var myIndex = 0;
		carousel();

		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("mySlides");
		    for (i = 0; i < x.length; i++) {
		       x[i].style.display = "none";  
		    }
		    myIndex++;
		    if (myIndex > x.length) {myIndex = 1}    
		    x[myIndex-1].style.display = "block";  
		    setTimeout(carousel, 5000); // Change image every 5 seconds
		}
	</script>
</body>
</html>