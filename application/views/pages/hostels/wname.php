<div class="row">
<div class="page-header" style = "background-color: black; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
    <font color="white"  face="Georgia Bold">

            <h1>List Of Wardens</br><!--<small>Keep Calm and Write.....</small></h1>-->
	</font>      
									
				<div class="dropdown" style="margin-left:970px;size:25px">
					
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="size:25px;">
						Sort By :
						<span class="caret"></span>
					</button>
					
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="<?php echo site_url('hostels/hname')?>">Hostel Name</a></li>
						<li><a href="<?php echo site_url('hostels/wname')?>">Warden Name</a></li>
						<li><a href="<?php echo site_url('hostels/woffice')?>">Warden Office</a></li>
					</ul>
				    
				</div>   
 </div> 
</div>
<div class="jumbotron" style="padding-left:30px;">
           <!-- <h2><font face="Impact">List Of Respective Wardens</font></h2><br/>-->
            <div class="row"><font face="Georgia Bold">
                    <div class="col-md-4"><b>Hostel Name</b></div>
                    <div class="col-md-4"><b>Warden Name</b></div>
                    <div class="col-md-4"><b>Warden's Office</b></div></font>
            </div><hr /><hr />
               
                       <?php
                        /*$this->db->where('id','1');*/
                        $q=$this->db->query("select * from warden order by warden_name");
                        $results=$q->result();
                        foreach ($results as $row)
                        {
                        ?>
                        <div class="row">
                        <div class="col-md-4">
                        <?php
                            echo $row->hostel_name;
                        ?>
                        </div>
                        <div class="col-md-4">
                        <?php
                            echo $row->warden_name;    
                        ?>
                        </div>
                        <div class="col-md-4">
                        <?php
                            echo $row->warden_office;    
                        ?>
                        </div>
                        </div><hr/>
                       <?php
                        }
                        ?>
                   
              
        </div>
        <br><br/>
        