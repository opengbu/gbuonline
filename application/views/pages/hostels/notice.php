<div class="row">
<div class="page-header" style = "background-color: black; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
    <font color="white"  face="Georgia Bold">

            <h1>Virtual Notice Board<!--<small>Keep Calm and Write.....</small></h1>-->
			
	
	</font>
								
				<div class="dropdown" style="margin-left:970px;size:25px">
					
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="size:25px;">
						Sort By :
						<span class="caret"></span>
					</button>
					
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="<?php echo site_url('hostels/date_so')?>">Date</a></li>
						<li><a href="<?php echo site_url('hostels/department_so')?>">Department</a></li>
						<li><a href="<?php echo site_url('hostels/hostels_so')?>">Hostels</a></li>
						
					</ul>
				
				</div>      
 </div>
 </div>
<div class="jumbotron" style="padding-left:30px;">
           <!-- <h2><font face="Impact">Hostel Notice Board</font></h2><br/>-->
            <div class="row"><font face="Georgia Bold">
                    <div class="col-md-1"><b>#</b></div>
                    <div class="col-md-2"><b>Posted On</b></div>
                    <div class="col-md-3"><b>Title</b></div>
                    <div class="col-md-3"><b>Issuing Authority</b></div>
                    <div class="col-md-2"><b>Concerned Hostels</b></div></font>
            </div><hr/><hr/>
                    <?php
                        
                        $q=$this->db->get('h_notice');
                        $results=$q->result();
                        foreach ($results as $row)
                        {
                        ?>
                        <div class="row">
                        <div class="col-md-1">
                        <?php
                            echo $row->id;
                        ?>
                        </div>
                        <div class="col-md-2">
                        <?php
                            echo $row->date;    
                        ?>
                        </div>
                        <div class="col-md-3">
                        <?php
                            echo $row->title ." ( " ?><a style="text-decoration:none;" href="<?php echo $this->cdn->res_url($row->link)?>">Open</a><?php echo " )"
                        ?>
                        </div>
                       <!--  <div class="col-md-3">
                        <a style="text-decoration:none;"href="<?php echo $this->cdn->res_url($row->link)?>">Open</a>
                        </div>-->
                         <div class="col-md-3">
                        <?php
                            echo $row->issuing_authority;    
                        ?>
                        </div>
                        <div class="col-md-2">
                        <?php
                            echo $row->concerned_hostel;    
                        ?>
                        </div>
                        </div><hr/>
                       <?php
                        }
                        ?>
        </div>