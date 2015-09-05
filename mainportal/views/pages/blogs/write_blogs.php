
<script src="<?php echo base_url('resources/texteditor/ckeditor/ckeditor.js')?>"></script>

<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
	<div class="row">
		<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;" id="myDiv">
			
				<div class="well well-sm">
					<div class="btn-group btn-group-justified" role="group" aria-label="...">
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default" onclick="location.href='<?php echo site_url('blogs/recent_blogs')?>'">Recent Blogs</button>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url('blogs/write_blogs')?>'">Write Blogs</button>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default" onclick="location.href='<?php echo site_url('blogs/best_blogs')?>'">Best Blogs</button>
						</div>
					</div>
				</div>
    
			<li class="list-group-item list-group-item-warning">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true">  </span>
                <b> &nbsp;&nbsp;The Blog will be published on the website once it is approved by the admin.</b>
			</li>

			<br>
            
			<div class="row">
				<div class="col-md-12">
				<form action="<?php echo base_url();?>Blogs/save" method="post">
					<div class="form-group">
						<label for="Blog">Start Your Blog :&nbsp;&nbsp;</label><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">Title</span>
                                                        <input name="title" type="text" class="form-control" placeholder="Title of your Blog" aria-describedby="basic-addon3" required="required">
						</div>
						<br>
						<label>Blog Content :</label>
						<textarea name="description" class="form-control" id="editor1" rows="15" required="required"></textarea>
						<br>
                
						<center>
                                                    <button type="submit" class="btn btn-success" <!--onclick="window.alert('Your Blog has been submitted succesfully. It will be displayed on website once it is reviewed by the admin.' -->)">Submit</button>
						</center>
						<br>
					</div>
				</form>
				</div>
			</div>
    
</div>

<!--row ends in extras-->
<!--container ends in extras-->

<script>
 CKEDITOR.replace( 'editor1', {
    height: '500',
}); 
</script>



