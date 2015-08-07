
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">
        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">

		
        <ul class="list-group">
		<?php
                                        $q=$this->db->query("select * from downloads");
                                        $results=$q->result();
					foreach($results as $rows)
					{
        ?>                      
					<li class="list-group-item">
                   
                        <a href = "<?php echo base_url($rows->Link) ?>">
							<?php echo $rows->Title; ?>
						</a> 
								
					</li>
		<?php 
					} 
		?>
                
		</ul>


        </div>
	

