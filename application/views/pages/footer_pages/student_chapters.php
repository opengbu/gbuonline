
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">
        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">

		

		<?php
                                        $q=$this->db->query("select * from stu_chapters");
                                        $results=$q->result();
					foreach($results as $rows)
					{
        ?>                      
					        <div class="thumbnail">
								<img src="<?php echo $this->cdn->res_url($rows->Image) ?>">
								<center>
									<div class="caption">
										<h3><?php echo $rows->Title; ?></h3>
										<p><i><?php echo $rows->Description; ?></i></p>
									</div>
								</center>
							</div>
		
		
		
		<?php 
					} 
		?>
        </div>
	

