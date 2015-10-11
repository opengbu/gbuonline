<!--

**** Student info depending upon user type
**** Authentic information of "girls" yet to be included

-->
<div class="row">

<div class="page-header" style = "background-color: black; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
		<font color="white"  face="Georgia Bold">
          &nbsp; <h1>Student Information</br>
		</font>
</div>

</div>

<div>
<?php                                                                                  //**** Admin Search Section Starts
    if ($this->session->level >= 3) {
?>
    <form action="#" method="POST">
        <label class="col-sm-2" style="font-size:20px;">Student Roll No :</label>
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Eg: yr/branch/roll_num" name="sname">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Search</button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </form>
    <div class="jumbotron">
<?php                                                                                  //**** Search Results
   
    $rollnum = $this->session->userdata('roll_number');
    if(empty($_POST['sname'])){echo 'Nothing Selected';}
        else{
    $sname=$_POST['sname'];
    $query=$this->db->query("select * from stuinfo where roll_number= ?",array($sname));
    $results=$query->result();
            
    foreach($results as $rows)
    {
?>
    <p style="font-size:15px;"> 
        <b><?php echo $rows->roll_number ?></b>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <?php 
        $roll=base64_encode($rows->roll_number);
        echo '<a href="'.site_url('hostels/stuspecific').'?roll=' . $roll . '">view page</a>' ?>
    </p>
    </div>
<?php
    }
	}
}

else
    {                                  //**** Student Info Section
        $rollnum = $this->session->userdata('roll_number');
        $query=$this->db->query("select stuinfo.* from stuinfo where UPPER('$rollnum') = UPPER(stuinfo.roll_number)");
        if($query->num_rows()>0)
        {
        $results=$query->result();
        foreach($results as $rows)
        {
?>
        
        <div class="jumbotron">
            <p>
                <label class="col-sm-4">Name : </label><?php  echo $rows->stu_name ?>
            </p>
            <p>
                <label class="col-sm-4">Course : </label><?php  echo $rows->roll_number ?>
            </p>
            <p>
                <label class="col-sm-4">Contact Details : </label><?php  echo $rows->room_no . "," .$rows->stu_hname ?>
            </p>
        </div>
        <hr/>
        <div class="container-fluid">
            <form action="#" method="POST">
                <h3>Complaint regarding incorrect info.</h3>
                <label>Correction in</label>
                <input type="text" class="form-control"  value="" name="title" placeholder="Field name" ><br>
                <label>Corrected Value</label>
                <input type="text" class="form-control"  value="" name="title" placeholder="Correct Info"><br>
                <center>
                    <input type="submit" value="Save" class="btn btn-primary" style="text-align:center;width:150px;">
                </center>
                <br/><hr/>
            </form>
        </div>
<?php 
        }
}
    else{
?>      <p>
            <center><b>Update your profile with a valid "rollnumber" or Contact us for more info. !! </b></center><br/>
        </p>
<?php
    }
   }
?>
</div>