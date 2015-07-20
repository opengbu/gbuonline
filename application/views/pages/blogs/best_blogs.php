<style>

#shm {
margin-top:455px;
margin-left:145px;
outline: none;
}

</style>

<!--This page is sorted according to the "Time" of a blog-->

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
						<button type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url('blogs/best_blogs')?>'">Best Blogs</button>
					</div>
				</div>
			</div>        
			<br>
    
			<!--Loop Starts-->
			
			<?php
				for ($x = 0; $x <4; $x++)
				{
			?>
			
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title"><b><a href="<?php echo site_url('blogs/read_blogs')?>">
							<font color="black">Artificial Intelligence - The Best Blog Ever</font>
						</a></b></h3>
					</div>
					<div class="panel-body" style="text-align: justify;">
								
									 How many things do we think in a day? How many feelings do we go through? Feelings that belong to so many categories
									 - happiness, sadness, regret, guilt, jealousy, inferiority, pride, love. I have always lingered around the question. 
									 What are feelings? How can some things make us 'happy' and others 'sad' ? I have also noticed, that we love sticking
									 to the feeln only first three lines a blog to come here... <a href="<?php echo site_url('blogs/read_blogs')?>">Read More</a><br>
								    
					</div>
					<div class="panel-footer">
						<div class="row">
							<div class="col-md-4">
								<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".blogs">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> &nbsp;
									<span class="badge">15</span>
								</button>&nbsp;
								<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".share">
									<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> &nbsp;
									<span class="badge">4</span>
								</button>&nbsp;
								<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".blogs">
									<span class="glyphicon glyphicon-comment" aria-hidden="true"></span> &nbsp;
									<span class="badge"><a href="<?php echo site_url('blogs/read_blogs')?>#disqus_thread" data-disqus-identifier="first"></a></span>
								</button>
							</div>
							<div class="col-md-8" style="text-align: right;  ">
								<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".blogs"><span>Aman Verma</span> &nbsp;<span class="badge">15 . IEC . 027</span></button>
							</div>
						</div>
					</div>
				</div>		
							
			<?php	
				} 
			?>
			
			<!--Loop Ends-->
   
	</div >	
	
	<!--row ends in extras-->
	<!--container ends in extras-->
	
   <!--modal to Share-->
		
<div class="modal share" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" >
  <div class="modal-dialog modal-sm" id="shm">
    <div class="modal-content">
			<center>
			Share on Social Media:
			<hr>
		
			
    </div>
  </div>
</div>

