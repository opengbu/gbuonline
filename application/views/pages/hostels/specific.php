
<div class="page-header" style = "background-color: darkred; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
    <font color="white"  face="Monotype Corsiva">

          &nbsp; <h1>Hostel Page </br><!--<small>Keep Calm and Write.....</small></h1>-->
	</font>      
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
				<h2>NOTICES</h2>
					<!--<ul class="nav nav-pills" role="tablist"><br/>
						<li accesskey="" role=" presentation" class="active">
							<a href="<?php echo site_url('hostels/notice')?>">
								Hostel Notices<span class="badge">24</span>
							</a>
							<br/>
						</li>                    
					</ul>-->
					<a href="<?php echo site_url('hostels/notice')?>">
						<input type="submit" class="btn btn-default" value="Hostel Notice" style="background-color:0033CC;color:white;border-radius:5px;width:180px;"/><span class="badge">24</span>
					</a>
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