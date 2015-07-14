   
       
    <div class="page-header" style = "background-color: darkred; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
            <font color="white" face="Monotype Corsiva">

            <h1> School of Humanities and Social Sciences</br><small>Where HomoSapiens are transformed to Humane Beings!!!</small></h1>
            </font>
    </div>
        
       <div class="container-fluid" style=" margin-right: 25px; margin-left: 25px;" >              
   
   
    <div class="row">
    
	<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">        
       
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">About</h3>
			</div>
			<div class="panel-body">
				<?php
        foreach($result as $row)
        {
           echo $row->about_us;
            
            
        }?>
			</div>
		</div>
 

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Courses</h3>
			</div>
			<div class="panel-body">
				<?php
        foreach($result as $row)
        {
           echo $row->course_structure;
            
            
        }?>
				</div>
		</div>
 

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Faculty</h3>
			</div>
			<div class="panel-body">
				<?php
        foreach($result as $row)
        {
           echo $row->faculty;
            
            
        }?>
			</div>
		</div>
 

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Events</h3>
			</div>
			<div class="panel-body">
				<?php
        foreach($result as $row)
        {
           echo $row->about_us;
            
            
        }?>
			</div>
		</div>
 

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Placements</h3>
			</div>
			<div class="panel-body">
				<?php
        foreach($result as $row)
        {
           echo $row->placements;
            
            
        }?>
			</div>
		</div>
 
<br>

 
           </div> 

                  