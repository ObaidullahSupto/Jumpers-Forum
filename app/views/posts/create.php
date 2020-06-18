 <div class="container">
    <?php echo form_open('posts/create');?>
    <div class="row" style="border: 1px solid black;">
        <center>
            <div class="col-sm-12 col-md-12 col-xl-12"> <br>
            <h1><?= $title; ?></h1>
            <p class="intro">Facing problem? Need discussion? Post here your problem for discussion.</p>

            <div class="form-group">
                <input type="text" style="width:50%" name="title" class="form-control" placeholder="Add Title" size="30" maxlength="245" required='required'>
            </div>
            
            <div class="form-group">
                <textarea style="width:50%" id="comment" name="body" cols="45" rows="8" maxlength="65525" required="required" rows="5"  class="form-control" name="body" placeholder="Write here your post details"></textarea>
            </div>

            <div class="form-group">
                <select name="category_id"  class="form-control" required="required">
                     <option value="">Select Category</option>
                    <?php foreach($categories as $category):?>
                        <option value="<?php echo $category['id']; ?>"><?php echo $category['name'];?></option>>
                    <?php endforeach;?>
                </select>
                <p class="intro">If you didn't find your category then go and create your category first.</p>
            </div> 

            <?php echo validation_errors();?>  
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Create
                </button>   
            </div><br><br>
        </div>
    </center>
</div>
<?php echo form_close();?>
</div>


