 
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
            $host = $_SERVER['HTTP_HOST'];
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

        <div class="col-md-3">
            <h2 align="center"><font face="Times New Roman"><b>Extras</b></font></h2>
            <hr>

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
          <a class="collapsed" onclick="window.scroll(,)" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Clubs
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
          
        <a href="<?php echo site_url('clubs/robotics')?>">1. ROBOTICS CLUB</a><br><br>
        <a href="<?php echo site_url('clubs/programming')?>">2. PROGRAMMING CLUB</a><br><br>
        <a href="<?php echo site_url('clubs/debating')?>">3. DEBATING CLUB</a><br><br>
        <a href="<?php echo site_url('clubs/art')?>">4. ART CLUB</a><br><br>
        <a href="<?php echo site_url('clubs/ss')?>">5. SOCIAL SERVICE CLUB</a><br><br>
        <a href="<?php echo site_url('clubs/dramatics')?>">6. DRAMATICS CLUB</a><br><br>
        <a href="<?php echo site_url('clubs/adventure')?>">7. ADVENTURE CLUB</a><br><br>
        <a href="<?php echo site_url('clubs/literary')?>">8. LITERARY CLUB</a><br><br>
        <a href="<?php echo site_url('clubs/photography')?>">9. PHOTOGRAPHY CLUB</a>
      </div>
    </div>
  </div>
    
         <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Downloads
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <ul>
		
              <b><center>Mobile Apps</center></b><br>
             
            <li><a href="#">Time Table (Android)</a></li>
            <li><a href="#">Time Table (Windows)</a></li>
            <li><a href="#">Abhivyanjana</a></li>
            <li><a href="#">Attendance</a></li>
			<br>
            
            <b><center>Utility Softwares</center></b><br>
             
            <li><a href="#">Proxifier</a></li>
            <li><a href="#">IDM</a></li>
            <li><a href="#">C-Cleaner</a></li>
            <li><a href="#">Ultra-surf</a></li>
          
          </ul>
      </div>
    </div>
  </div>
       <div class="panel panel-default">
            
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" onclick="window.scroll(,)" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Student Chapters
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
          The world's largest professional association for the advancement of technology.<br>
          <a href='http://www.ieeegbu.weebly.com'>IEEE-GBU Student Branch</a><hr>
          Codechef is a global programming community.To promote competitive programming we have a 
          Codechef-GBU Chapter.<br>
          <a href="http://www.codechef.com/campus_chapter/CodeChef-GBU">Codechef-GBU Chapter</a><hr>
          HackerEarth is a coding platform allowing students to participate in programming challenges.
          GBU conducts its own challenges under the series "Code-In-GBU".<br>
          <a href="https://www.hackerearth.com/code-in-gbu/">Code-In-GBU</a>
        
      </div>
    </div>
  </div>
        <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Major Events
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
          
          <a href="#">ABHIVYANJANA</a><hr>
          <a href="#">SHOURYOTSAV</a><hr>
          <a href="#">ECOKART</a>   
      </div>
    </div>
  </div>
        
        <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Placements
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
         
         <ul>
            <li><a href="<?php echo base_url('resources/placements/p2015.pdf')?>">Placement 2015</a></li><hr>
            <li><a href="<?php echo base_url('resources/placements/p2014.pdf')?>">Placement 2014</a></li><hr>
            <li><a href="<?php echo base_url('resources/placements/p2013.pdf')?>">Placement 2013</a></li><hr>
            <li><a href="<?php echo base_url('resources/placements/p2012.pdf')?>">Placement 2012</a></li><hr>
            <li><a href="<?php echo base_url('resources/placements/p2011.pdf')?>">Placement 2011</a></li><hr>
            <li><a href="<?php echo base_url('resources/placements/p2010.pdf')?>">Placement 2010</a></li>
          </ul>          
        
      </div>
    </div>
  </div>
        
        <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          List Of Holidays
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
           
          <a href="#">View</a>
          
        
      </div>
    </div>
  </div>
        
        <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          E-Books
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
          A collection of books available online for free.<br>
          <a href="#">Enter here</a>
          
        
      </div>
    </div>
  </div>
        
        <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEight">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          Official GBU Website
        </a>
      </h4>
    </div>
    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
      <div class="panel-body">
          
          <a href="http://www.gbu.ac.in">Enter here</a>
          
        
      </div>
    </div>
  </div>
        
  
        </div>

        </div>
    </div>
	</div>
