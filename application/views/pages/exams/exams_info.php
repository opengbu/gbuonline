
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >    
   
   
 <div class="row">
    
	<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">   
	 <?php
						$results=$this->db->query("select distinct dept_name from exams where sc_name='$sc_name'");
						$r=$results->result();
						foreach ($r as $rows)
						{
						
						?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?=$rows->dept_name?></h3>
                </div>
                <div class="panel-body">
				
                   <?php
					$result_dept=$this->db->query("select * from exams where sc_name='$sc_name' && dept_name = '$rows->dept_name'");
						$b=$result_dept->result();
						foreach($b as $exam)
						{
						?>
				   <div class="col-md-3" >
                        <a href="<?php echo $exam->image_path?>">
						<div class="thumbnail" style="height:150px;">
                            
                            <div class="caption">
                                <h3><center><b><?php echo $exam->paper_name; ?></b></center></h3>
                            </div>
                        </div>
						</a>
                    </div>
					<?php
                    }
					echo '</div></div> ';
					
					}
                    ?>
          </div>
		