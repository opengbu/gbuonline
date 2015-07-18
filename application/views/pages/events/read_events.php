<?php
/*
 * Note by Varun...
 * I am connecting (Front End) events with db on my own
 * because of too much delay
 */

$id = $this->input->get('id');
$event = $this->db->query("select * from events where id = '$id'");
$row = $event->row();
?>
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
	<div class="row">
		<div class="col-md-7" style="padding-right:10px;" id="myDiv">
			
                    <img src="<?php echo base_url($row->image_path)?>" alt="code-in-gbu" width="100%">
			<hr>
		</div>
		<div class="col-md-5">
			
			<h2><span class="label label-default"><?=$row->article_name?></span></h2>
			<br>
			
			<?=$row->article ?>
			<hr>
			
			<!--
                        <h2><span class="label label-default">Date : </span></h2>
			<br>
			<?=$row->publishing_date ?>
			<hr>
                         -->
			
		</div>
					

		</div ><!--for colmd9-->
	<!--row ends in extras.php-->
<!--container ends in extras.php-->

</div>
</div>
