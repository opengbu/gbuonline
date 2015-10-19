<div class="row">
	<div class="page-header" style = "background-color: black; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
		<font color="white"  face="Georgia Bold">
          &nbsp; <h1>Room Change Form</br><!--<small>Keep Calm and Write.....</small></h1>-->
          <h4 style="color:#999999">(Requests will be sent to respective wardens.)</h4>
		</font>
	</div>
</div>

<?php
$this->load->library('form_validation');
?>

<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >   
    
    <font color="#141466">
        <form class="form-group" role="form" action="<?php echo site_url('Hostels/insert_request'); ?>" method="post">
        <label>
            Full Name :
        </label>
    
        <input type="text" class="form-control" value="<?php echo set_value('name'); ?>" name="name" id="rcname"><br/>
            
            <label>
                Branch :
            </label>
            <input type="textarea" class="form-control" value="<?php echo set_value('branch'); ?>" name="branch" id="rcbranch"><br/>
            
             <label>
                Current Alloted Room :
            </label>
            <input type="textarea" class="form-control" value="<?php echo set_value('alloted_room'); ?>" name="alloted_room"id="rcalloted"><br/>
            
             <label>
                Requestd Room :
            </label>
            <input type="textarea" class="form-control"  value="<?php echo set_value('requested_room'); ?>" name="requested_room" id="rcrequested"><br/>        
    
            <div class="form-group"> 
                <label class="col-md-2 control-label" for="Radios">Requested Room's Status</label>  
                    <div class="col-md-10 columns">    
             
                        <label class="radio-inline" name="radios"for="Radios_Kumquats" style="background-color:#266c8e;color:white">    
                            <input type="radio" id="Radios_Kumquats" value="Kumquats"  <?php echo set_select('rd1', 'free'); ?>>     
                                Free            
                        </label> 
                        
                        <span class="additional-info-wrap"> 
                            <label class="radio-inline" name="radios"for="Radios_Grape" style="background-color:#266c8e;color:white">     
                                <input type="radio" id="Radios_Grape" value="Grape"  <?php echo set_select('rd2', 'occ'); ?>> 
                                    Occupied                    
                            </label>                  
                            <div class="additional-info hide">  
                                <input type="text" value="<?php echo set_value('owner'); ?>" name="owner" id="RadiosNameOfGrape" placeholder="Currently alloted to (Roll_num):" class="form-control" >
                            </div>              
                        </span>              
         
                    </div>           
            </div>   
<br/><br/><br/><br/>
<!--<input type="submit" class="btn btn-default" value="Save"/>-->
    <input style="width:100px;" type="submit" name="Save" id="submit" value="Submit" class="btn btn-primary">
    </font>
</form>

</div>
<?php
echo $this->session->flashdata('rcMsg');
?>