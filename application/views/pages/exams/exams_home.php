         
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">
        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">

<div class="alert alert-info" role="alert">
  We are trying our best to provide you the maximum papers that are available with us.
    
   If you have papers other than these, please mail them to us at (gbu.code@gmail.com).
</div>
		
        <ul class="list-group">
<?php		
		$q=$this->db->query("select sc_name,count(*) as row_count from exams group by sc_name");
        $results=$q->result();
     
		foreach($results as $rows)
			{
			
?>			
			<li class="list-group-item">
            <span class="badge">
            <?php
				echo $rows->row_count;
?>			
			        </span>
        
		<a href="<?php echo site_url(). 'exams/view/'. $rows->sc_name?>"><?=$rows->sc_name?></a>  

	     
		</li>
		<?php	
        }
		?>
		</div>