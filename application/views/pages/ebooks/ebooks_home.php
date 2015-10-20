
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">
        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">
		
        <ul class="list-group">
<?php		
		$q=$this->db->query("select sc_name,count(*) as row_count from ebooks group by sc_name");
        $results=$q->result();
     
		foreach($results as $rows)
			{
			
?>			
			<div class="well well-sm">
			<li class="list-group-item">
            <span class="badge">
            <?php
				echo $rows->row_count;
?>			
			        </span>
        
		<a href="<?php echo site_url(). 'ebooks/view/'. $rows->sc_name?>"><?=$rows->sc_name?></a>  

	     
		</li>
		</div>
		<?php	
        }
		?>
		</div>