 
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;">
     <div class="row">
    
	<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">        
 
<div class="row">
    <?php
    $r=$this->db->query("select * from exams where sc_name='som'");
    $results=$r->result();
    foreach ($results as $rows)
    {
        
    ?>
    
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
        <img src="#" alt=""><b><?php echo $rows->paper_name; ?></b>
    </a>
  </div>
    <?php
    
    }
          ?>
 
    
</div>




  <ul class="pager">
      <li><a href="<?php echo site_url('exams/exams_home')?>">Back</a></li>
    
  </ul>
</div>

   
            
            
               