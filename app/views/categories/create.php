<br><br><br><br>
<div class="container">
    <?php echo form_open_multipart('categories/create');?>
    <div class="row" style="border: 1px solid black;">
    <center>
        <div class="col-sm-12 col-md-12 col-xl-12"> <br>
        <h3 class="text-center"><?= $title;?></h3>
        <div class="form-group">
    		<input type="text" name="name" class="form-control" placeholder="Enter Name">
    	</div>
    	<div class="form-group">
            <button type="submit" class="btn btn-primary">
                Submit
            </button>    
        </div>
        <br><br><br>
    	<?php echo validation_errors();?>
        </div>
    </center> 
    </div>
    <?php echo form_close();?>
</div> 
<br><br><br><br><br><br><br><br><br><br>