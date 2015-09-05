<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >    
   
   
 <div class="row">
    
	<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">   
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Applied Mathematics</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $results=$this->db->query("select * from ebooks where sc_name='sovsas' and dept_name='applied_mathematics'");
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
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Applied Chemistry</h3>
                </div>
                <div class="panel-body">
                   <?php
                    $results=$this->db->query("select * from ebooks where sc_name='sovsas' and dept_name='applied_chemistry'");
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

         
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Applied Physics</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $results=$this->db->query("select * from ebooks where sc_name='sovsas' and dept_name='applied_physics'");
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


				<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Environmental Sciences</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $results=$this->db->query("select * from ebooks where sc_name='sovsas' and dept_name='envionmental_sciences'");
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


				<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Vocational Studies</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $results=$this->db->query("select * from ebooks where sc_name='sovsas' and dept_name='vocational_studies'");
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


				<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Food Processing & Technology</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $results=$this->db->query("select * from ebooks where sc_name='sovsas' and dept_name='food_processing'");
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
            
            
            
            
               
        
                
                
            