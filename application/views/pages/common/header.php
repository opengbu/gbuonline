<div class = "row"><!--row1 for header-->
    
   
<nav class="navbar navbar-inverse navbar navbar-fixed-top" >
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        
        <a class="navbar-brand" href="<?php echo site_url('main/homepage')?>">GBU Online
           
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
         <a href="http://gbuonline.in/timetables"  target="_blank">
             <font size="2"> <span class="glyphicon glyphicon-file" aria-hidden="true"></span> Time Tables</font>
         </a>
         <!--
         Note by Amit K Awasthi
         I am removing the following links as these are not required. 
         The user is going to timetable home page directly. There he has already links to all direction.
         This is important because we can put announcements/messages regarding  timetable there.
         Also links of application are not fixed. Linking page to page is not safe.
         Link application to application.
         -->
         <!--
            <ul class="dropdown-menu" role="menu">
             <li><a href="http://172.25.5.15/timetables/view/?s=SOE&y=2015&t=o">SOE</a></li>
            <li><a href="0http://172.25.5.15/timetables/view/?s=SOLJ&y=2015&t=o">SOM</a></li>
            <li><a href="http://172.25.5.15/timetables/view/?s=SOBT&y=2015&t=o">SOBT</a></li>
            <li><a href="http://172.25.5.15/timetables/view/?s=SOICT&y=2015&t=o">SOICT</a></li>
            <li><a href="http://172.25.5.15/timetables/view/?s=SOLJ&y=2015&t=o">SOLJG</a></li>
            <li><a href="http://172.25.5.15/timetables/view/?s=SOBSC&y=2015&t=o">SOBSC</a></li>
            <li><a href="http://172.25.5.15/timetables/view/?s=SOHSS&y=2015&t=o">SOHSS</a></li>
            <li><a href="http://172.25.5.15/timetables/view/?s=SOVSAS&y=2015&t=o">SOVSAS</a></li>
         </ul>-->
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font size="2">
              <span class="glyphicon glyphicon-education" aria-hidden="true"></span>&nbsp;Schools</font><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('schools/soe')?>">SOE</a></li>
              <li><a href="<?php echo site_url('schools/som')?>">SOM</a></li>
              <li><a href="<?php echo site_url('schools/sobt')?>">SOBT</a></li>
              <li><a href="<?php echo site_url('schools/soict')?>">SOICT</a></li>
              <li><a href="<?php echo site_url('schools/soljg')?>">SOLJG</a></li>
              <li><a href="<?php echo site_url('schools/sobsc')?>">SOBSC</a></li>
              <li><a href="<?php echo site_url('schools/sohss')?>">SOHSS</a></li>
              <li><a href="<?php echo site_url('schools/sovsas')?>">SOVSAS</a></li>
          </ul>
        </li>
        <!--
        <li>
            <a href="<?php echo base_url('resources/images/ac-15-16.jpg')?>"><font size="2"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;Academic Calendar</font></a>
          
        </li>-->

		<li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font size="2">
              <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Hostels</font><span class="caret"></span></a>
   		  <ul class="dropdown-menu" role="menu">
             <li><a href="<?php echo site_url('hostels/home')?>">Home</a></li>
             <li><a href="<?php echo site_url('hostels/info')?>">Hostel Details</a></li>
               <li><a href="<?php echo site_url('hostels/studentinfo')?>">Student Info</a></li>
             <li><a href="<?php echo site_url('hostels/notice')?>">Hostel Notices</a></li>
             <li><a href="<?php echo site_url('hostels/wardens')?>">Wardens List</a></li>
			 
              <li role="separator" class="divider"></li>
			 
			  <li><a href="<?php echo site_url('hostels/specific#go3')?>">Hostel Allotment List</a></li>
			  
              <li role="separator" class="divider"></li>
			 <li>
			 <a href="<?php echo site_url('hostels/rc')?>"style="text-decoration:none;">Room Change Request</a>	
			 </li>
			 
			 <li role="separator" class="divider"></li>
			 <li>
			 <a href="<?php echo base_url('resources/hostel_allocation/mess.jpg')?>"style="text-decoration:none;">Mess Menu</a>	
			 </li>
          </ul>
        </li>
		
		<li>
            <a href="<?php echo site_url('blogs/recent_blogs')?>"><font size="2"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;Blogs</font></a>
          
        </li>
		
		
		
                <li>
            <a href="<?php echo site_url('feat/vnb')?>"><font size="2"><span class="glyphicon glyphicon-bookmark " aria-hidden="true"></span>&nbsp;Notice Board</font></a>
          
        </li> 
        <!--
        <li>
            <a href="<?php echo site_url('feat/exams')?>"><font size="2"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>&nbsp;Exams</font></a>
        </li>-->
        <li>
            <a href="<?php echo site_url('feat/events')?>"><font size="2"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span>&nbsp;Events</font></a>
          
        </li>
        <?php
        /*
            
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font size="2">
              <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbsp;Placements</font><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url('resources/placements/p2015.pdf')?>">Placement 2015</a></li>
            <li><a href="<?php echo base_url('resources/placements/p2014.pdf')?>">Placement 2014</a></li>
            <li><a href="<?php echo base_url('resources/placements/p2013.pdf')?>">Placement 2013</a></li>
            <li><a href="<?php echo base_url('resources/placements/p2012.pdf')?>">Placement 2012</a></li>
            <li><a href="<?php echo base_url('resources/placements/p2011.pdf')?>">Placement 2011</a></li>
            <li><a href="<?php echo base_url('resources/placements/p2010.pdf')?>">Placement 2010</a></li>
          </ul>
        </li>-->
        <!--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font size="2">
              <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbsp;Downloads</font><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li align="center"><b><center>Mobile Apps</center></b></li>
              <li class="divider"></li>
            <li><a href="#">Time Table (Android)</a></li>
            <li><a href="#">Time Table (Windows)</a></li>
            <li><a href="#">Abhivyanjana</a></li>
            <li><a href="#">Attendance</a></li>
            <li class="divider"></li>
            <li align="center"><b><center>Utility Softwares</center></b></li>
             <li class="divider"></li>
            <li><a href="#">Proxifier</a></li>
            <li><a href="#">IDM</a></li>
            <li><a href="#">C-Cleaner</a></li>
            <li><a href="#">Ultra-surf</a></li>
          
          </ul>
        </li> 
        */
        ?>
        <li>
            <a href="https://gbuonline.wordpress.com" target="_blank"><font size="2"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Reviews</font></a>
      </ul>
        <ul class="nav navbar-nav  pull-right">
		
		<li>
			<form action="<?=site_url('feat/search_results/')?>" method="get">
			<div class="input-group input-group-sm" style="padding-top:10px; margin-bottom:-10px;">
				<input type="text" class="form-control" name="q" placeholder="Search for..." style="width: 125px;">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>				
					</span>
			</div>
			</form>
				 
		</li>
		
        <li>
            <?php 
             if($this->session->userdata('loggedin') != 1)
             {
            ?>
                 <a href="<?php echo base_url('users')?>"><font size="2">&nbsp;&nbsp;<span class="glyphicon glyphicon-user " aria-hidden="true"></span>&nbsp;Login</font></a>
            <?php
             }
             else
             {
                 ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-th-large"></i> Welcome <?php print_r($_SESSION['full_name']); ?>!
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li> 
                                    <a href="<?= base_url() . 'users/edit_user/index/' . $this->session->userdata('user_id') ?>">Manage Profile</a>
                                </li>
                                <li><a href="<?= base_url() . 'users/new_event' ?>">New Event</a></li>
                                <?php if ($this->session->userdata('type') == 'admin') { ?>
                                    <li><a href="<?= base_url() . 'users/new_user' ?>">New User</a></li>
                                    <li><a href="<?= base_url() . 'users/new_school' ?>">New School</a></li>
                                <?php } ?>
                                <li>
                                    <a href="<?= base_url() . 'users/logout?redirect=' ?>">Log out</a>
                                </li>
                            </ul>
                        </li>
                 <?php
             }
             ?>
        </li> 
          </ul>
     </div>
    </nav>
    </div><!--row1 for header-->

