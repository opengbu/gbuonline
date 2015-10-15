<center> 
    <hr>
    We are a group of students working under guidance of <br><b>Dr. Amit K. Awasthi.</b> <hr>
</center>
<center>   

    <h3>Technical Team</h3>				
    <hr>				
    <ul>
        <i>
            <div class="row">
                 <div class="col-sm-4">
                    <img src="<?php echo $this->cdn->res_url('resources/images/bhawesh.jpg') ?>"  style="max-height: 170px;" width="120"><br><b>BHAWESH CHANDOLA</b><br/> (Front End Database Connectivity)
                </div>
                <div class="col-sm-4">
                    <img src="<?php echo $this->cdn->res_url('resources/images/rajat.jpg') ?>" style="max-height: 170px;" width="120"><br><b>RAJAT SAXENA</b> <br/>(Front End Developer)<br>
                </div>
                <div class="col-sm-4">
                    <img src="<?php echo $this->cdn->res_url('resources/images/rishabh.jpg') ?>" style="max-height: 170px;" width="120"><br><b>RISHABH AHUJA</b><br/>(Front End Developer)
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo $this->cdn->res_url('resources/images/sarthak.jpg') ?>" style="max-height: 170px;" width="120"><br><b>SARTHAK GARG</b><br/> (Front End Developer)<br>
                </div>
                <div class="col-sm-4">
                    <img src="<?php echo $this->cdn->res_url('resources/images/shobhit.jpg') ?>"  style="max-height: 170px;" width="120"><br><b>SHOBHIT SHARMA</b><br/> (Hostel Management System)
                </div>
               <?php
               { /*
               NOTE, I am removing my name form this list only. It doesnot mean I have left this project
                <div class="col-sm-4">
                    <img src="<?php echo $this->cdn->res_url('resources/images/varun.jpg') ?>" width="120">
                    <br><b>VARUN GARG </b><br/>(Admin/User Panel)<br />(Technical Head)
                </div>
                */ 
               }
               ?>
            </div>
        </i>      

    </ul>
</center>
<hr>
<center>
    <h3>Content Team</h3>
</center>
<hr>
<?php
$content = $this->db->query("SELECT * FROM users WHERE type='cw' OR type = 'cm' ORDER BY type");
foreach ($content->result() as $row) {
    ?>
    <div class="col-sm-4">
        <center>
            <img src="<?php echo base_url($row->profile_picture) ?>"  width="120" style="height: 150px;"/><br><b><?= $row->full_name ?></b>
			<?php if($row->type=='cm')
			{
				echo "<br/>(Content Head)";
			}
			else 
			{
				echo "<br/>(Content Writer)";
			}
			?>
            <br/><br/><br/>
        </center>
    </div>

    <?php
}
?>
<br/><br/>
<hr>


