
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
<center>
		<form action = "<?php echo site_url('Feat/downloads') ?>" method = "get">
		<div class="col-lg-3 col-md-offset-3">
			<div class="input-group">
				<input type="text" class="form-control" name = "query" placeholder="Search ...">
					<span class="input-group-btn">
						<button type = "submit" class="btn btn-default" type="button">Go!</button>
					</span>
			</div>
		</div>
		</form>
</center>
    <div class="row">
        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">
		
		</br>
        <ul class="list-group">
		<?php
                                        $q=$this->db->query("select * from downloads WHERE Title LIKE '%$query%' order by Title");
										if($q->num_rows() ==0)
										{
											echo "<h4>Sorry, No Results Found!!</h4>";
										}
                                        $results=$q->result();
					foreach($results as $rows)
					{
        ?>                      
					<li class="list-group-item">
                   
                        <a href = "<?php echo $rows->Link ?>" target = "_blank">
							<?php 
							$string = highlight_phrase($rows->Title, $query, '<span style="color:#990000">', '</span>');
							echo $string; ?>
						</a> 
								
					</li>
		<?php 
					} 
		?>
                
		</ul>


        </div>
	

