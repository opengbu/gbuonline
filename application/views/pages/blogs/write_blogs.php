
   
             
<form action="<?php echo base_url();?>Blogs/save" method="post">
            <div class="well well-sm">
				<div class="btn-group btn-group-justified" role="group" aria-label="...">
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default" onclick="recentBlogs()">Recent Blogs</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-primary" onclick="writeBlogs()">Write Blogs</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default" onclick="bestBlogs()">Best Blogs</button>
					</div>
				</div>
            </div>
			
			
    
			<li class="list-group-item list-group-item-warning">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true">  </span>
                <b> &nbsp;&nbsp;Please Log-In to submit your Blog. &nbsp;It will be displayed on the website once it is approved by the admin.</b>
			</li>

<br>
            

<div class="row">
<div class="col-md-12">
    <div class="form-group">
        <label for="Blog">Start Your Blog :&nbsp;&nbsp;</label><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
        <div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Title</span>
                        <input name="title" type="text" class="form-control" placeholder="Title of your Blog" aria-describedby="basic-addon3">
		</div>
        <br>
		<label>Blog Content :</label>
        <textarea name="description" class="form-control" rows="15" id="comment"></textarea>
        <br>
                
   <center>
         <button type="submit" class="btn btn-success" onclick="window.alert('Your Blog has been submitted succesfully. It will be displayed on website once it is reviewed by the admin.')">Submit</button>
   </center>
                <br>
    </div>  
</div>
</div>
</form>
    





 
             






