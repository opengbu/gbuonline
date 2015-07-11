<!--script to display the selected option-->
<script>

$(function(){

     $(".dropdown-menu").on('click', 'li a', function(){
        $(this).parent().parent().siblings(".btn:first-child").html($(this).text()+' <span class="caret"></span>');
        $(this).parent().parent().siblings(".btn:first-child").val($(this).text());
    });

});

</script>



<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
     <div class="row">
		<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">   
			
			<!--code for FILTER menu begins-->
			
			<div class="well well-sm"><!--bootstrap well begins-->
			
				<div class = "row"><!--a row inside another row-->
				
					<div class = "col-md-2" style="margin-top: 3px; font-size: 120%;">
						<code><b>FILTER BY : </b></code>
					</div>
					
					<div class = "col-md-3" style="">
						<div class="dropdown" >
							<button style="width: 78%;" class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
								School
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">ALL</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">SOE</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">SOM</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">SOBT</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">SOICT</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">SOLJG</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">SOBSC</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">SOHSS</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">SOVSAS</a></li>
							</ul>
						</div>
					</div>
  
					<div class = "col-md-3" style="">	
						<div class="dropdown">
							<button style="width: 78%;" class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" >
								Club
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">ALL</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Art</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Debating</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Literary</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Robotics</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Adventure</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Dramatics</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Photography</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Programming</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Social Service</a></li>
							</ul>
						</div>
					</div>
  
					<div class = "col-md-3" style=" ">
						<div class="dropdown">
							<button style="width: 78%;" class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
								Audience
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">ALL</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Students</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Teachers</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Staff</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Others</a></li>
							</ul>
						</div>	
					</div>
  
				</div><!--a row inside another row-->

			</div><!--bootstrap well ends-->
			
			<!--code for FILTER menu ends-->
			
			<!--page content starts-->


			<!--Virtual Notice Board-->
       
			<div class="list-group">
				
				<!--Loop Starts-->
				
				<?php
					for($x=0;$x<8;$x++)
					{
				?>
							<a href="#" class="list-group-item">
								<div class="row">
									<div class="col-md-8">
										<h4 class="list-group-item-heading">Change in the Grading scheme</h4>
										<p class="list-group-item-text"><b>Posted By:</b> Dr. Vishal Sharma</p>
									</div>
									<div class="col-md-4" style="padding-top: 10px;">
										<center>
											<span class="badge" > 25 - 05 - 2015 </span>    
										</center>
									</div>
								</div>
							</a>
							<br>
				<?php
					}
				?>
				
				<!--Loop Ends-->
 
			</div>
		
		</div><!--for colmd9--> 
		
	<!--row ends in extras file-->
<!--container ends in extras file-->
