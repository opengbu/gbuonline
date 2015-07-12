<div class="row">
	<div class="page-header" style = "background-color: darkred; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
		<font color="white"  face="Monotype Corsiva">
          &nbsp; <h1>Hostel Page </br><!--<small>Keep Calm and Write.....</small></h1>-->
		</font>      
	</div> 
</div>
<div style="padding-left:10px">
<a name="go1" style="text-decoration:none;"><div class="jumbotron">
            <h2>BASIC INFORMATION</h2>
            <p>Warden Name : </p>
            <p>Warden Office:</p>
            <p>Hostel Contact Number: </p>
            </div></a>
			
        <a name="go3" style="text-decoration:none;">
			<div class="jumbotron">
				<h2>Hostel Updates</h2><br>

				<ul class="list-group">
					<p>
						<li  class="list-group-item"class="dropdown" style="list-style-type:none;text-decoration:none;">
							<a href="<?php echo site_url('hostels/notice')?>"style="text-decoration:none;"><font size="4">&nbsp;Hostel Notice</font></a>	
						</li>
						
					</p>
				</ul>
				<ul class="list-group">
					<p>				
						<li class="list-group-item" class="dropdown" style="list-style-type:none;">
					
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="text-decoration:none;"><font size="4">
								&nbsp; Hostel Allocation List</font><span class="caret"></span>
							</a>
						
							<ul class="dropdown-menu" role="menu">
							
								<li><a href="<?php echo base_url('resources/hostel_allocation/p2014.pdf')?>">List-1 (Boys)</a></li>
								<li><a href="<?php echo base_url('resources/hostel_allocation/p2013.pdf')?>">List-2 (Girls)</a></li>
							
							</ul>
						</li>
					</p>
				</ul>	

				<ul class="list-group">
					<p>
						<li  class="list-group-item"class="dropdown" style="list-style-type:none;text-decoration:none;">
							<a href="<?php echo base_url('resources/hostel_allocation/mess.jpg')?>"style="text-decoration:none;">
                                <font size="4">&nbsp;Mess Menu</font></a>	
						</li>
						
					</p>
				</ul>
            </div>
        </a>
        
        <a name="go4" style="text-decoration:none;"><div class="jumbotron">
            <h2>COMPLAINT COUNTER</h2>
            <h4 style="color:#999999">(Any complaints related to your hostel in general or <br>the information displayed on this site about your hostel.)</h4>
            <ul class="list-group">
                <font color="#141466">
                    <form action="saveproduct.php" method="get">
                    <div class="form-group">
                        <label>
                            Registration Number
                        </label>
                        <input type="text" class="form-control"  value="" name="title"><br>
            
                        <label>
                            Complaint
                        </label>
                        <input type="textarea" class="form-control"  value="" name="description"><br>
                        <input type="submit" class="btn btn-default" value="Save" />
                    </div>
                    </form></font>
            </ul>


            </div></a></div>