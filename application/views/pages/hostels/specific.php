<link rel="stylesheet" href="<?php echo base_url() . 'users/application/views/common/' . 'css/bootstrap-select.min.css' ?>">
<script type="text/javascript" src="<?php echo base_url() . 'users/application/views/common/' . 'js/bootstrap-select.min.js' ?>"></script>

<div class="row">
	<div class="page-header" style = "background-color: black; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
		<font color="white" face="Georgia Bold">
          &nbsp; <h1>Hostel Page </h1>
          <h2><small>Select your desired hostel</small></h2>
		</font>
            <p style="font-face:Geneva,Tahoma,Verdana,sans-serif;font-size=15px">
    
    <div class="form-group">     
        <form action="#" method="post">
					  <select name="hostel_name" class="selectpicker" multiple data-max-options="1" data-width="30%">
						                  <?php
                                                $r=$this->db->query("select * from warden");
                                                $results=$r->result();
                                                foreach ($results as $rows)
                                                {
                                            ?>
                                              <option name="<php $rows->hostel_name; ?>">
                                                  <?php echo $rows->hostel_name;  ?>
                                              </option>
                                                <?php
                                                }?>
                                               <a href="#" class="btn btn-info" role="button">Link Button</a>
                                               <button type="button" class="btn btn-info">Button</button>
                                               <input type="submit" class="btn btn-info" value="Go!">
                    </select>
            </form>	
    </div>
    </div><!-- /.row -->
		</p>      
	</div> 
</div>

<!--

 

--><div class = "container">


<a name="go1" style="text-decoration:none;"><div class="jumbotron" style="padding-left:30px">			
			<h2>BASIC INFORMATION</h2>
                        <?php
                        if(empty($_POST['hostel_name']))
                        {
                            echo "<b>NO HOSTEL SELECTED</b>";
                            ?></div><?php
                            
                        }
                        else
                        {
                        
                        $hostel_name = $_POST['hostel_name'];
                        $x=$this->db->query("select * from warden where hostel_name='$hostel_name'");
                        $result=$x->result();
                        foreach ($result as $rows)
                        {
                         ?>
            <p>Warden Name : <?php echo $rows->warden_name; ?></p>
            <p>Warden Office: <?php echo $rows->warden_office; ?></p>
            <p>Office Assistant's Contact Number:<?php echo $rows->hostel_contact; ?> </p>			
            </div></a>
    <?php
                        }
                        }
    ?>
			
        <a name="go3" style="text-decoration:none;">
			<div class="jumbotron"  >
				<h2>Hostel Updates</h2><br>

                <!-- HOSTEL NOTICE AND ALLOCATION LIST MODEL  
                    ** IN WORKING STATE
                -->
                <div>
                    <ul class="list-group">
                    <li class="list-group-item"class="dropdown" style="list-style-type:none;text-decoration:none;">
 
		<button type="button" class="btn btn-block" style="text-align:left"data-toggle="modal" data-target=".bs-example-modal-lg-51">Hostel Notices</button>
                    </li>
                    </ul>
                    
                <?php
                if(empty($_POST['hostel_name']))
                {?>
                    <div class="modal fade bs-example-modal-lg-51" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="move">
			             <div class="modal-dialog modal-lg">
				            <div class="modal-content" >  
                                <p style="padding-left:15px;padding-top:10px;">No Hostel Selected</p>
                                </div>
                             </div>
                        </div>
                <?php
                }
                else
                {
                
                $q=$this->db->query("select * from h_notice where concerned_hostel= ? or concerned_hostel= ? ",array("All",$hostel_name));    
                ?>
                    <div class="modal fade bs-example-modal-lg-51" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="move">
			<div class="modal-dialog modal-lg">
				<div class="modal-content" >
               
					<ul>
						<i>
						<center>
						<div class="row"><font face="Georgia Bold">
                    <div class="col-md-1"><b>#</b></div>
                    <div class="col-md-2"><b>Posted On</b></div>
                    <div class="col-md-3"><b>Title</b></div>
                    <div class="col-md-3"><b>Issuing Authority</b></div>
            </div><hr/><hr/>
                <?php
                
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
                       
                         <div class="col-md-3">
                        <?php
                            echo $row->issuing_authority;    
                        ?>
                        </div>
                        </div><hr/>
                       <?php
                        }
                       ?>
                         </font>
                        </center>
                        </i>
                    </ul>
                </div>
            </div>

               </div>     
                        <?php
                        }
                        ?>
                                              
                </div>
            
            
            
				<ul class="list-group">
					<p>				
						<li class="list-group-item" class="dropdown" style="list-style-type:none;">
					
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="text-decoration:none;"><font size="4">
								&nbsp; Hostel Allocation List</font><span class="caret"></span>
							</a>
						
							<ul class="dropdown-menu" role="menu">
							<?php
				
                            if(empty($_POST['hostel_name']))
                            {
                            ?>
                    
                            <li><a href="#">Nothing Selected!</a></li>
                    
                            <?php 
                            }
                            else 
                            {
                                
                            $q=$this->db->query("select * from hostel_allocation where UPPER(hostel_name)=UPPER(?)",array($hostel_name));
                            
                            if($q->num_rows()>0)    
                            {
                            $results=$q->result();
                            foreach($results as $row)
                            {
                            ?>     
                                <li><a href="<?php echo $this->cdn->res_url($row->link)?>"><?php echo $row->hostel_name . " : " . $row->year?></a></li>
                            <?php
                            }
                            }
                            else
                            {
                            ?>
                            <li><a href="#">Sorry, Content not available!</a></li>
                            <?php
                            }
                            }
                            ?>
                            </ul>
						</li>
					</p>
				</ul>	
            
            <!-- ******************************  -->
            
				<ul class="list-group">
					<p>
						<li  class="list-group-item"class="dropdown" style="list-style-type:none;text-decoration:none;">
							<a href="<?php echo $this->cdn->res_url('resources/hostel_allocation/mess.jpg')?>"style="text-decoration:none;">
                                <font size="4">&nbsp;Mess Menu</font></a>	
						</li>
						
					</p>
				</ul>
            </div>
        </a>
        
        <a name="go4" style="text-decoration:none;"><div class="jumbotron" >
            <h2>COMPLAINT COUNTER</h2>
            <h4 style="color:#999999">(Any complaints related to your hostel in general or <br>the information displayed on this site about your hostel.)</h4>
            <ul class="list-group">
                <font color="#141466">
                    <form action="#" method="POST">
                    <div class="form-group">
                        <label>
                            Name
                        </label>
          
                            
                            <h4 style="color:#191919">
                            <?php 
                                echo $this->session->userdata('full_name');
                            ?>
                            </h4>
                            <br/>
                        <label>
                            Complaint
                        </label>
                           
                        <textarea class="form-control"  value="" name="description" rows="10"></textarea><br>
                        <input type="submit" class="btn btn-default" value="Save" />
                            
                            <?php
                        if(empty($_POST['description']))
                        {
                            
                            
                        }
                        else
                        {
                       
                                $description=$_POST['description'];
                                $roll=$this->session->userdata('roll_number');
                                $q=$this->db->query("insert into h_complaint(roll_number,complaint) values('$roll','$description')");
                                echo "Saved successfully!!";
                                
                            
                           
                        }
                         ?>
                            
                    </div>
                    </form></font>
            </ul>


            </div></a></div>
