<div class="page-header" style = "background-color: darkred; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
    <font color="white"  face="Monotype Corsiva">

          &nbsp; <h1>Room Change Form</br><!--<small>Keep Calm and Write.....</small></h1>-->
          <h4 style="color:#999999">(Requests will be sent to respective wardens.)</h4>
	</font>
</div>

<ul class="list-group" >
    <font color="#141466">
        <form action="" method="get">
        <div class="form-group" style="padding-left:20px;margin-left:10px;">
        <label>
            Full Name :
        </label>
    
        <input type="text" class="form-control"  value="" name="title"><br>
            
            <label>
                Branch :
            </label>
            <input type="textarea" class="form-control"  value="" name="description"><br>
            
             <label>
                Current Alloted Room :
            </label>
            <input type="textarea" class="form-control"  value="" name="description"><br>
            
             <label>
                Requestd Room :
            </label>
            <input type="textarea" class="form-control"  value="" name="description"><br>
            		
            </div>
            </form>

<form class="form-horizontal" style="padding-left:10px;margin-left:5px;">         
    
    <div class="form-group"> 
        <label class="col-md-2 control-label" for="Radios">Requested Room's Status</label>  
        <div class="col-md-10 columns">    
             
           <label class="radio-inline" for="Radios_Kumquats" style="background-color:#266c8e;color:white">    
                <input type="radio" name="Radios" id="Radios_Kumquats" value="Kumquats">     
                Free            
            </label>       
            <span class="additional-info-wrap"> 
                <label class="radio-inline" for="Radios_Grape" style="background-color:#266c8e;color:white">     
                    <input type="radio" name="Radios" id="Radios_Grape" value="Grape"> 
                    Occupied                    
                </label>                  
                <div class="additional-info hide">  
                    <input type="text" id="RadiosNameOfGrape" name="RadiosNameOfGrape" placeholder="Currently alloted to :" class="form-control" disabled="">
                </div>              
            </span>              
         
        </div>           
    </div>   
</form>
<div style="padding-left:40px;margin-left:25px;">
<!--<input type="submit" class="btn btn-default" value="Save"/>-->
    <button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off">
        Save
    </button>
</div>
    </font>
</ul>