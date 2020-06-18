<div class="container">
      <?php echo form_open('users/register');?>
      	<?php echo validation_errors();?>
      <div class="row" style="border: 1px solid black;">
      	<center><div class="col-sm-12 col-md-12 col-xl-12">	<br>
			<h3><?= $title;?></h3>

			<div class="form-group">
				<!-- <label>Name</label> -->
				<input type="text" name="name" class="form-control" placeholder="Enter your name">
			</div>
			<div class="form-group">
				<!-- <label>Email</label> -->
				<input type="email" name="email" class="form-control" placeholder="Enter email id">
			</div>
			<div class="form-group">
				<!-- <label>Username</label> -->
				<input type="text" name="username" class="form-control" placeholder="Enter your username">
			</div>
			<div class="form-group">
				<!-- <label>Password</label> -->
				<input type="password" name="password" class="form-control" placeholder="Enter your password">
			</div>
			<div class="form-group">
				<!-- <label>Confirm Password</label> -->
				<input type="password" name="password2" class="form-control" placeholder="Enter your password again">
			</div>
			
			<div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>    
            </div>
            <br><br><br><br><br>
			
		<?php echo form_close();?>
    </div></center>    
  </div>
</div>


		