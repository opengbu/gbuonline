<div class="row">

<div class="page-header" style = "background-color: black; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
		<font color="white"  face="Georgia Bold">
          &nbsp; <h1>Student Information</br>
		</font>
</div>
</div>
<div> 
<?php
    $query=$this->db->query("select * from stuinfo where UPPER('" . base64_decode($_GET['roll']) . "') = UPPER(roll_number)");
    $results=$query->result();
    foreach($results as $rows)
    {
?>
        <div class="jumbotron">
            <p>
                <label class="col-sm-4">Name : </label><?php  echo $rows->stu_name ?>
            </p>
            <p>
                <label class="col-sm-4">Registration Number : </label><?php  echo $rows->roll_number ?>
            </p>
            <p>
                <label class="col-sm-4">Contact Details : </label><?php  echo $rows->room_no . "," .$rows->stu_hname ?>
            </p>
        </div>
<?php
    }
?>
</div>