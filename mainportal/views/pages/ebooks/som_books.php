             
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >    
   
   
 <div class="row">
    
	<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">   
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Management</h3>
                </div>
                <div class="panel-body">
                   <?php
                    $results=$this->db->query("select * from ebooks where sc_name='som' and dept_name='management'");
                    $r=$results->result();
                    foreach ($r as $rows)
                    {?>
                    <div class="col-md-3" >
                        <div class="thumbnail">
                            <a href="#"> <img src="#" alt="paper1"></a>
                            <div class="caption">
                                <h3><center><b><?php echo $rows->book_name; ?></b></center></h3>
                            </div>
                        </div>
                    </div><?php
                    }
                    ?>
                
                </div>
                </div>
            </div>
        
                
                
            