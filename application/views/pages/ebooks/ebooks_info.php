
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >    
   
   
 <div class="row">
    
	<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">   
	<?php
						$results=$this->db->query("select distinct dept_name from ebooks where sc_name='$sc_name'");
						$r=$results->result();
						foreach ($r as $rows)
						{
						
	?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?=$rows->dept_name?></h3>
                </div>
                <ul class="list-group">
                   <?php
					$result_dept=$this->db->query("select * from ebooks where sc_name='$sc_name' && dept_name = '$rows->dept_name'");
						$a=$result_dept->result();
						foreach($a as $book)
						{
						?>
	                     <li class="list-group-item">
                            <a href="<?php echo base_url($book->book_link)?>">
                                <h5><b><?php echo $book->book_name; ?> </b></h5><div class = "badge"><?php echo $book->Author; ?></div>
							</a>
						</li>
   					<?php
                    }
					?>
					</ul></div>
					<?php
					}
                    ?>
          		</div>