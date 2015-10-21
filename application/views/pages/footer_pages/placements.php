
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">
        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">
			<h2>About Us</h2>
			<div class = "well">
			<p><b>
				In this competitive world, managerial leadership requires both excellent 
                functional skills and exceptional outlook. The CRC helps students in finding 
                appropriate summer projects and final placements. The CRC involves students 
                strategically for summer and final placements. GBUSM placement process aims to 
                match the requirement of the recruiters and the aspirations of the students.
				</b></p>
			</div>
        <ul class="list-group">
		<?php
                                        $q=$this->db->query("select * from placements");
                                        $results=$q->result();
					foreach($results as $rows)
					{
        ?>                      
					<li class="list-group-item">
                   
                        <a href = "<?php echo base_url($rows->Link) ?>" target = "_blank">
							<?php echo $rows->Title; ?>
						</a> 
								
					</li>
					</br>
		<?php 
					} 
			
		?>
                
		</ul>
		<div class = "row">
		<h2>Past Recruiters</h2>
		 <div>
                <marquee scrollamount='8' onmouseover='this.stop();' onmouseout='this.start();' top='0' left='0'>
				<img src = "<?php echo $this->cdn->res_url('resources/images/companies.jpg') ?>" style="height:120px;width:990px;border-width:0px;">
				</marquee>
         </div>
		</div>
        </div>
	

