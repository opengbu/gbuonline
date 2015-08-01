
   

 
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;">
     <div class="row">
    
	<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">        

<div class="alert alert-info" role="alert">
  We are trying our best to provide you the maximum papers that are available with us.
    
   If you have papers other than these, please mail them to us at (gbu.code@gmail.com).
</div>

            <ul class="list-group">
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from exams where sc_name='soict'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('exams/soict')?>">  SOICT </a>  
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from exams where sc_name='som'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('exams/som')?>"> SOM </a>  
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from exams where sc_name='sobt'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('exams/sobt')?>">SOBT </a>  
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from exams where sc_name='sovsas'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('exams/sovsas')?>"> SOVSAS</a>
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from exams where sc_name='soe'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('exams/soe')?>"> SOE </a>  
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from exams where sc_name='sobsc'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('exams/sobsc')?>"> SOBSC </a>  
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from exams where sc_name='sohss'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('exams/sohss')?>">SOHSS </a>  
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from exams where sc_name='soljg'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('exams/soljg')?>">SOLJG </a>  
                </li>
</ul>


<br>
<br>
<br>

       </div>             
            
               