<!--

**** Student info depending upon user type
**** Authentic information yet to be included

-->
<div class="row">

<div class="page-header" style = "background-color: black; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
		<font color="white"  face="Monotype Corsiva">
          &nbsp; <h1>Student Information</br>
		</font>
</div>

</div>

<div>
<?php                                                                                  //**** Admin Search Section Starts
    if ($this->session->userdata('type') == 'admin') {
?>
    <form action="#" method="POST">
        <label class="col-sm-2" style="font-size:20px;">Student Roll No :</label>
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter roll number..." name="sname">
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
    $query=$this->db->query("select * from stuinfo where roll_number='$sname'");
    $results=$query->result();
    foreach($results as $rows)
    {
?>
    <p style="font-size:15px;"> 
        <b><?php echo $rows->roll_number ?></b>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo '<a href="'.site_url('hostels/stuspecific').'?roll=' . $rows->roll_number . '">view page</a>' ?>
    </p>    
<?php
    }
	}
}

else
    {                                  //**** Student Info Section
        $rollnum = $this->session->userdata('roll_number');
        $query=$this->db->query("select stuinfo.* from stuinfo where UPPER('$rollnum') = UPPER(stuinfo.roll_number)");
        $results=$query->result();
        foreach($results as $rows)
        {
?>
        </div>
        <div class="jumbotron">
            <p>
                <label class="col-sm-4">Name : </label><?php  echo $rows->stu_name ?>
            </p>
            <p>
                <label class="col-sm-4">Course : </label><?php  echo $rows->stu_course ?>
            </p>
            <p>
                <label class="col-sm-4">Hostel Name : </label><?php  echo $rows->stu_hname ?>
            </p>
        </div>
<?php 
        }
   }
?>

</div>