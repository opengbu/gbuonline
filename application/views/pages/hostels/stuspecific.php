<div class="row">

<div class="page-header" style = "background-color: black; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
		<font color="white"  face="Monotype Corsiva">
          &nbsp; <h1>Student Information</br>
		</font>
</div>
</div>
<div> 
<?php
    $query=$this->db->query("select * from stuinfo where UPPER('" . $_GET['roll'] . "') = UPPER(roll_number)");
    $results=$query->result();
    foreach($results as $rows)
    {
?>
  <!--      </div>-->
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
?>
</div>