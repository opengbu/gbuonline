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
								Type
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">ALL</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Competition</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Workshop</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Conference</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Lecture</a></li>
							</ul>
						</div>	
					</div>
  
				</div><!--a row inside another row-->

			</div><!--bootstrap well ends-->
			
			<!--code for FILTER menu ends-->
			
			<!--page content starts-->
	
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Upcoming Events</h3>
				</div>
				<div class="panel-body">
				
					<div class="col-md-4" >
						<div class="thumbnail">
							<img src="<?php echo base_url('resources/images/poster.png')?>" alt="code-in-gbu">
							<div class="caption">
								<h3><center><b>Code-In-GBU</b></center></h3>
								<h5><b>Date:</b> 28 - 01 - 2015</h5>
								<h5><b>Time:</b> 18:30 - 20:00</h5>
								<h5><b>Venue:</b> SOICT</h5>
								<p></p>
								<!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
							</div>
						</div>
					</div>

					<div class="col-md-4" >
						<div class="thumbnail">
							<img src="<?php echo base_url('resources/images/poster.png')?>" alt="code-in-gbu">
							<div class="caption">
								<h3><center><b>Code-In-GBU</b></center></h3>
								<h5><b>Date:</b> 28 - 01 - 2015</h5>
								<h5><b>Time:</b> 18:30 - 20:00</h5>
								<h5><b>Venue:</b> SOICT</h5>
								<p></p>
								<!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
							</div>
						</div>
					</div>

					<div class="col-md-4" >
						<div class="thumbnail">
							<img src="<?php echo base_url('resources/images/poster.png')?>" alt="code-in-gbu">
							<div class="caption">
								<h3><center><b>Code-In-GBU</b></center></h3>
								<h5><b>Date:</b> 28 - 01 - 2015</h5>
								<h5><b>Time:</b> 18:30 - 20:00</h5>
								<h5><b>Venue:</b> SOICT</h5>
								<p></p>
								<!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Past Events</h3>
				</div>
				<div class="panel-body">
					
					<div class="col-md-4" >
						<div class="thumbnail">
							<img src="<?php echo base_url('resources/images/ic.jpg')?>" alt="code-in-gbu">
							<div class="caption">
								<h3><center><b>Imagine Cup</b></center></h3>
								<h5><b>Date:</b> 28 - 01 - 2015</h5>
								<h5><b>Time:</b> 18:30 - 20:00</h5>
								<h5><b>Venue:</b> SOICT</h5>
								<p></p>
								<!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
							</div>
						</div>
					</div>

                    <div class="col-md-4" >
						<div class="thumbnail">
							<img src="<?php echo base_url('resources/images/ic.jpg')?>" alt="code-in-gbu">
							<div class="caption">
								<h3><center><b>Imagine Cup</b></center></h3>
								<h5><b>Date:</b> 28 - 01 - 2015</h5>
								<h5><b>Time:</b> 18:30 - 20:00</h5>
								<h5><b>Venue:</b> SOICT</h5>
								<p></p>
								<!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
							</div>
						</div>
					</div>

                    <div class="col-md-4" >
						<div class="thumbnail">
							<img src="<?php echo base_url('resources/images/ic.jpg')?>" alt="code-in-gbu">
							<div class="caption">
								<h3><center><b>Imagine Cup</b></center></h3>
								<h5><b>Date:</b> 28 - 01 - 2015</h5>
								<h5><b>Time:</b> 18:30 - 20:00</h5>
								<h5><b>Venue:</b> SOICT</h5>
								<p></p>
								<!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
							</div>
						</div>
					</div>

				</div>
			</div>
			
        </div><!--for colmd9-->
				
	<!--row ends in extras file-->
<!--container ends in extras file-->