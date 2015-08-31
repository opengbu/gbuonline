 
<div class="row">
    <div class = "container-fluid">
        <div class="col-md-4" >
            <h2 align="center"><font face="Times New Roman"><b>News and Updates</b></font></h2>
            <hr>
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
        <div class="col-md-5" >
            <h2 align="center"><font face="Times New Roman"><b>Technological Updates</b></font></h2>
            <hr>

            <?php
            //$info = parse_url(base_url());
            //$host = $info['host']; //example extract gbuonline.in from http://www.gbuonline.in/sdsds
            $host = str_replace("www.", "", $_SERVER['HTTP_HOST']);
            //echo $host;
            if ($host == "gbuonline.in") {
                $xml = ("https://gbuonline.wordpress.com/feed");
                $xmlDoc = new DOMDocument();
                $xmlDoc->load($xml);

                $x = $xmlDoc->getElementsByTagName('item');
                for ($i = 0; $i <= 2; $i++) {
                    $item_title = $x->item($i)->getElementsByTagName('title')
                                    ->item(0)->childNodes->item(0)->nodeValue;
                    $item_link = $x->item($i)->getElementsByTagName('link')
                                    ->item(0)->childNodes->item(0)->nodeValue;
                    $item_desc = $x->item($i)->getElementsByTagName('description')
                                    ->item(0)->childNodes->item(0)->nodeValue;
                    //   echo ("<p><a href='" . $item_link
                    //  . "'>" . $item_title . "</a>");
                    //   echo ("<br>");
                    //   echo ($item_desc . "</p>");
                    ?>
                    <div class="list-group">
                        <a href="<?php echo $item_link ?>" class="list-group-item ">
                            <h4 class="list-group-item-heading"><b><?= $item_title ?></b></h4>
                            <p class="list-group-item-text"><?= $item_desc ?></p>
                        </a>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="list-group">
                    <a href="<?php echo base_url() ?>" class="list-group-item ">
                        <h4 class="list-group-item-heading"><b>Section Unavailable</b></h4>
                        <p class="list-group-item-text">Due to connection issues for some users, 
                            this section will only be available when domain = gbuonline.in</p>
                    </a>
                </div>

                <?php
            }
            ?>
        </div>
	
	<!--Extras-->
	
        <div class="col-md-3">
            <h2 align="center"><font face="Times New Roman"><b>Quick Links</b></font></h2>
            <hr>
						
					<div class="row">
					<div class="col-md-6">
                        <a href="<?php echo base_url('resources/images/ac-15-16.jpg') ?>" class="thumbnail" target="_blank" style="text-decoration:none;">
							<img src="<?php echo base_url('resources/images/cards/front/calendar-100-100.png') ?>"  alt="">
						</a>
					</div>
					<div class="col-md-6">
						<a href="<?php echo base_url('resources/holidays-2015.pdf') ?>" class="thumbnail" target="_blank" style="text-decoration:none;">
							<img src="<?php echo base_url('resources/images/cards/front/holiday-100-100.png') ?>"  alt="">			
						</a>
					</div>
					</div>
					<div class="row">
					<div class="col-md-6">
						<a href="http://172.25.5.15/moodle" target="_blank" class="thumbnail" style="text-decoration:none;">	
							<img src="<?php echo base_url('resources/images/cards/front/moodle-100-100.jpg') ?>"  alt="">			
						</a>
					</div>
					<div class="col-md-6">
						<a href="<?php echo site_url('exams/exams_home') ?>" class="thumbnail" style="text-decoration:none;">
							<img src="<?php echo base_url('resources/images/cards/front/exams-100-100.jpg') ?>"  alt="">			
						</a>
					</div>
					</div>
					<div class="row">
					<div class="col-md-6">
						<a href="<?php echo site_url('ebooks/ebooks_home') ?>" class="thumbnail" style="text-decoration:none;">	
							<img src="<?php echo base_url('resources/images/cards/front/ebooks-100-100.png') ?>"  alt="">			
						</a>
					</div>
					<div class="col-md-6">
						<a href="http://172.25.5.15/refbase" target="_blank" class="thumbnail" style="text-decoration:none;">	
							<img src="<?php echo base_url('resources/images/cards/front/publications-100-100.png') ?>"  alt="">			
						</a>
					</div>
					</div>

        </div>
    </div>
	</div>
