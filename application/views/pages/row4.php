<style>
.ahr
{
	margin:auto; 
	text-decoration:none; 
	width:30%;
}
.gra
{
   background-image: url("<?= $this->cdn->res_url('resources/images/home1.jpg');?>");           
}
</style> 

<div>

            <h2 align="center"><b><span class="label label-default">Quick Links</span></b></h2>
            <br/><br/>
						
					<div class="row">
					<div class="col-md-4">
                        <a href="<?php echo $this->cdn->res_url('resources/images/ac-15-16.jpg') ?>" class="thumbnail ahr" target="_blank">
							<img src="<?php echo $this->cdn->res_url('resources/images/cards/front/calendar-100-100.png') ?>"  alt=""
								onmouseover="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/calendar_text-100-100.png') ?>'"  
								onmouseout="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/calendar-100-100.png') ?>'" >
						</a>
					</div>
					
					<div class="col-md-4">
						<a href="https://play.google.com/store/apps/details?id=com.varun.gbu_timetables" class="thumbnail ahr" target="_blank">
							<img src="<?php echo $this->cdn->res_url('resources/images/cards/front/android-100-100.png') ?>"  alt=""
								onmouseover="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/android_text-100-100.png') ?>'"  
								onmouseout="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/android-100-100.png') ?>'" >
						</a>
					</div>
					
					<div class="col-md-4">
						<a href="<?php echo site_url('exams/exams_home') ?>" class="thumbnail ahr">
							<img src="<?php echo $this->cdn->res_url('resources/images/cards/front/exams-100-100.jpg') ?>"  alt=""
								onmouseover="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/exams_text-100-100.jpg') ?>'"  
								onmouseout="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/exams-100-100.jpg') ?>'" >
						</a>
					</div>
					</div>
					
					<br/><br/>
					
					<div class="row">
					<div class="col-md-4">
						<a href="<?php echo $this->cdn->res_url('resources/holidays.pdf') ?>" class="thumbnail ahr" target="_blank">
							<img src="<?php echo $this->cdn->res_url('resources/images/cards/front/holiday-100-100.png') ?>" alt=""
								onmouseover="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/holiday_text-100-100.png') ?>'"  
								onmouseout="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/holiday-100-100.png') ?>'" >
						</a>
					</div>
					
					<div class="col-md-4">
						<a href="http://www.offroadbattle.in" class="thumbnail ahr" target="_blank">	
							<img src="<?php echo $this->cdn->res_url('resources/images/cards/front/ofb-100-100.jpg') ?>"  alt=""		
								onmouseover="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/ofb_text-100-100.png') ?>'"  
								onmouseout="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/ofb-100-100.jpg') ?>'" >
						</a>
					</div>
		
					<div class="col-md-4">
						<a href="<?php echo site_url('ebooks/ebooks_home') ?>" class="thumbnail ahr">	
							<img src="<?php echo $this->cdn->res_url('resources/images/cards/front/ebooks-100-100.png') ?>"  alt=""		
								onmouseover="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/ebooks_text-100-100.png') ?>'"  
								onmouseout="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/ebooks-100-100.png') ?>'" >
						</a>
					</div>
					</div>
					
					<br/><br/>
					
					<div class="row">
					<div class="col-md-4">
						<a href="http://172.25.5.15/refbase" target="_blank" class="thumbnail ahr">	
							<img src="<?php echo $this->cdn->res_url('resources/images/cards/front/publications-100-100.png') ?>"  alt=""		
								onmouseover="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/publications_text-100-100.png') ?>'"  
								onmouseout="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/publications-100-100.png') ?>'" >
						</a>
					</div>
		
					
					<div class="col-md-4">
						<a href="http://mail1.gbu.ac.in/gbumail/" target="_blank" class="thumbnail ahr" target="_blank">	
							<img src="<?php echo $this->cdn->res_url('resources/images/cards/front/email-100-100.png') ?>"  alt=""		
								onmouseover="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/email_text-100-100.png') ?>'"  
								onmouseout="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/email-100-100.png') ?>'" >
						</a>
					</div>
					
					<div class="col-md-4">
						<a href="http://172.25.5.15/moodle" target="_blank" class="thumbnail ahr">	
							<img src="<?php echo $this->cdn->res_url('resources/images/cards/front/moodle-100-100.jpg') ?>"  alt=""
								onmouseover="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/moodle_text-100-100.jpg') ?>'"  
								onmouseout="this.src='<?php echo $this->cdn->res_url('resources/images/cards/front/moodle-100-100.jpg') ?>'" >
						</a>
					</div>
					</div>

        
		<br/><br/><br/>
		
		<div class="row gra">
		<div class = "container">
		<br/>
		<div class="col-md-12">
            <h2 align="center"><b><span class="label label-default">News and Updates</span></b></h2>
            <br/><br/>
            <?php
            $news_q = $this->db->query("select id,title,slug from news order by id desc");
            $count = 0;
            foreach ($news_q->result() as $row) {
                $count ++;
                if ($count > 4)
                    break;
                ?>
                <div class="list-group ">
                    <a href="<?php echo site_url('News/view?id=' . $row->id) ?>" class="list-group-item">
                        <h4 class="list-group-item-heading"><b><?= $row->title ?></b></h4>
                        <p class="list-group-item-text"><?= $row->slug ?></p>
                    </a>
                </div>
                <?php
            }
            ?>
			
            <ul class="pager">
                <li><a href="<?php echo site_url('News/index') ?>"><font color="black">More</font></a></li>
            </ul>
        </div>	
    </div>
    </div>
</div>