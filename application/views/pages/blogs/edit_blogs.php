<?php
$check = $this->db->query("select user_id from blog where id = '$id';");
$blog_user = $check->row()->user_id;
$user_id = $this->session->userdata("user_id");
if($blog_user != $user_id)
{
	redirect('', 'location');
	exit();
}
else
{
	$blog_details = $this->db->query("select title,description from blog where id = '$id' AND user_id = '$user_id' ;");
?>

<script src="<?php echo $this->cdn->res_url('resources/texteditor/ckeditor/ckeditor.js')?>"></script>

<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
	<div class="row">
		<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;" id="myDiv">
			
				<div class="well well-sm">
					<div class="btn-group btn-group-justified" role="group" aria-label="...">
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default" onclick="location.href='<?php echo site_url('blogs/recent_blogs')?>'">Recent Blogs</button>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default" onclick="location.href='<?php echo site_url('blogs/write_blogs')?>'">Write Blogs</button>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-primary" onclick="location.href = '<?php echo site_url('blogs/your_blogs') ?>'">Edit Blogs</button>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default" onclick="location.href='<?php echo site_url('blogs/best_blogs')?>'">Best Blogs</button>
						</div>
					</div>
				</div>
    
			<li class="list-group-item list-group-item-warning">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true">  </span>
                <b> &nbsp;&nbsp;The Blog will be updated on the website once it is approved by the admin.</b>
			</li>

			<br>
            
			<div class="row">
				<div class="col-md-12">
				<form action="<?php echo base_url();?>Blogs/edit" method="post">
					<div class="form-group">
						<label for="Blog">Start Your Blog :&nbsp;&nbsp;</label><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">Title</span>
                                                        <input name="title" type="text" class="form-control" value="<?=$blog_details->row()->title?>" placeholder="Title of your Blog : Maximum 100 characters " aria-describedby="basic-addon3" required="required">
						</div>
						<br>
						<label>Blog Content :</label>
						<textarea name="description" class="form-control" id="editor1" rows="15" required="required"><?=$blog_details->row()->description?></textarea>
						<br>
						<input type="hidden" name="bid" value="<?=$id?>"/>
                
						<center>
                                <button type="submit" class="btn btn-success">Update Blog</button>
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

<?php
}
?>

