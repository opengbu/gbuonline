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
							
								<li><a href="<?php echo base_url('resources/Birsa Munda Hostel_15July15.pdf')?>">Birsa Munda Hostel</a></li>
								<li><a href="<?php echo base_url('resources/hostel_allocation/Guru Ghasi Das Hostel_15July15.pdf')?>">Guru Ghasi Das Hostel</a></li>
							    <li><a href="<?php echo base_url('resources/Maha Maya Girls Hostel_15July15.pdf')?>">Maha Maya Girls Hostel</a></li>
                                <li><a href="<?php echo base_url('resources/Ram Saran Das Hostel_15July15.pdf')?>">Ram Saran Das Hostel</a></li>
                                <li><a href="<?php echo base_url('resources/Rani Laxmi Bai Girls Hostel_15July15.pdf')?>">Rani Laxmi Bai Girls Hostel</a></li>
                                <li><a href="<?php echo base_url('resources/Sant Kabir Das Hostel_15July2015.pdf')?>">Sant Kabir Das Hostel</a></li>
                                <li><a href="<?php echo base_url('resources/Sant Ravidas Hostel_15July2015.pdf')?>">Sant Ravidas Hostel</a></li>
                                <li><a href="<?php echo base_url('resources/Shri Chatarpati Sahu ji Maharaj Hostel_15July15.pdf')?>">Shri Chatarpati Sahu ji Maharaj Hostel</a></li>
                                <li><a href="<?php echo base_url('resources/Shri Narayan Guru Hostel-15July15.pdf')?>">Shri Narayan Guru Hostel</a></li>
                                <li><a href="<?php echo base_url('resources/Tulsidas Hostel_15July15.pdf')?>">Tulsidas Hostel</a></li>
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
                        <!--<label>
                            Registration Number
                        </label>
                        <label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php 
                                print_r($_SESSION["user"]);
                            ?>
                        </label>-->
            
                        <label>
                            Complaint
                        </label>
                        <input type="textarea" class="form-control"  value="" name="description"><br>
                        <input type="submit" class="btn btn-default" value="Save" />
                    </div>
                    </form></font>
            </ul>


            </div></a></div>