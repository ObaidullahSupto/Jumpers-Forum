<div class="container">
	 <?php echo form_open('users/login'); ?>
	<div class="row" style="border: 1px solid black;">
		<center><div class="col-sm-12 col-md-12 col-xl-12">	<br>
			<h3 class="text-center"><?php echo $title; ?></h3>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autopfocus>	
			</div>

			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder=" Enter Password" required autopfocus>
			</div>

			<div class="form-group">
	            <button type="submit" class="btn btn-primary">
	                Login
	            </button>    
	        </div><br>
		</div></center> 
	</div>
	<?php echo form_close();?>
</div>
	<br><br><br><br><br><br><br><br><br><br>
			
		

