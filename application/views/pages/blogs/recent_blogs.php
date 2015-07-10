
<!--This page is sorted according to the "Time" of a blog-->
   
		        
			<div class="well well-sm"> 
				<div class="btn-group btn-group-justified" role="group" aria-label="...">
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-primary" onclick="recentBlogs()">Recent Blogs</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default" onclick="writeBlogs()">Write Blogs</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default" onclick="bestBlogs()">Best Blogs</button>
					</div>
				</div>
			</div>        
			<br>
    
			<!--Loop Starts-->
			
			<?php
				for ($x = 0; $x <4; $x++)
				{
			?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><b>Artificial Intelligence - The next step towards human destruction</b></h3>
							</div>
							<div class="panel-body">
								<p align="justify">
									Artificial Intelligence is one of the hot topics of the current decade. All 
									the major research nowadays is on AI. The computer scientists all over the world are
									inventing new algorithms that would help robots take its own decisions and learn from its past.
									But a little is paid towards the destruction it would cause once its actually implemented.
									What if the Robots defeat iti only first three lines of a blog to come here... <a href="#">Read More</a><br>
								</p>    
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-md-4">
										<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".blogs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> &nbsp;<span class="badge">15</span></button>&nbsp;
										<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".blogs"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> &nbsp;<span class="badge">4</span></button>&nbsp;
										<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".blogs"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> &nbsp;<span class="badge">9</span></button>
									</div>
									<div class="col-md-8" style="text-align: right;  padding-top: 5px;">
										<b>Aman Verma - 14/ICS/005</b>
									</div>
								</div>
							</div>
						</div>
			<?php	
				} 
			?>
			
			<!--Loop Ends-->
   

		


 