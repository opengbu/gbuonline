
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;">
     <div class="row">
    
	<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">        

            <ul class="list-group">
                    <?php
						/*
                        * Fully Dynamic clubs
						* This can be implemented in schools, and ebooks section
						*/
						$clubs = $this->db->query("select c_name, c_full_name from clubs order by c_full_name");
						$club_count = 0;
						foreach ($clubs->result() as $row)
						{
					?>
					
			        <li class="list-group-item">
				    
					<?php
						$club_count++;
                        echo $club_count.'. <a href="' . site_url() . 'clubs/view/' . $row->c_name. '">';
                        echo strtoupper($row->c_full_name) . '</a>';
                    ?>
							  
					</li>
							 
					<?php
					}
					?>
				    
			</ul>
			<br>
			<br>
			<br>
	</div>             
            
               