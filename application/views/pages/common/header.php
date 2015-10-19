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

            <a class="navbar-brand" href="<?php echo site_url('main/homepage') ?>">GBU Online

            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="http://gbuonline.in/timetables"  target="_blank">
                        <font size="2"> <span class="glyphicon glyphicon-file" aria-hidden="true"></span> Time Tables</font>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font size="2">
                        <span class="glyphicon glyphicon-education" aria-hidden="true"></span>&nbsp;Schools</font><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
						<?php
						$schools = $this->db->query("select sc_name from schools order by CHAR_LENGTH(sc_name)");
						foreach ($schools->result() as $row)
						{
						?>
							<li><a href="<?php echo site_url().'schools/view/'.$row->sc_name ?>"><?=strtoupper($row->sc_name)?></a></li>
						<?php
						}
						?>
                    </ul>
                </li>
                <!--
                <li>
                    <a href="<?php echo $this->cdn->res_url('resources/images/ac-15-16.jpg') ?>"><font size="2"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;Academic Calendar</font></a>
                  
                </li>-->

                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font size="2">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Hostels</font><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo site_url('hostels/home') ?>">Home</a></li>
                        <li><a href="<?php echo site_url('hostels/info') ?>">Hostel Details</a></li>
                        <li><a href="<?php echo site_url('hostels/studentinfo') ?>">Student Info</a></li>
                        <li><a href="<?php echo site_url('hostels/notice') ?>">Hostel Notices</a></li>
                        <li><a href="<?php echo site_url('hostels/wardens') ?>">Wardens List</a></li>

                        <li role="separator" class="divider"></li>

                        <li><a href="<?php echo site_url('hostels/specific#go3') ?>">Hostel Allotment List</a></li>

                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="<?php echo site_url('hostels/rc') ?>"style="text-decoration:none;">Room Change Request</a>	
                        </li>

                        <li role="separator" class="divider"></li>
                        <!--<li>
                            <a href="<?php echo $this->cdn->res_url('resources/hostel_allocation/mess.jpg') ?>" style="text-decoration:none;">Mess Menu</a>	
                        </li>-->
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('alumni') ?>"style="text-decoration:none;"><font size="2"> <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbsp;Alumni</font></a>	
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font size="2">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;More</font><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo site_url('feat/vnb') ?>"><font size="2"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>&nbsp;&nbsp;Notices</font></a></li>
                        <li><a href="<?php echo site_url('feat/events') ?>"><font size="2"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span>&nbsp;&nbsp;Events</font></a></li>
                        <li><a href="https://gbuonline.wordpress.com" target="_blank"><font size="2"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Reviews</font></a></li>
                        <li><a href="<?php echo site_url('blogs/recent_blogs') ?>"><font size="2"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>&nbsp;&nbsp;Blogs</font></a></li>

                    </ul>
                </li>
            </ul>
			
            <ul class="nav navbar-nav  pull-right">

                <li>
                    <form action="<?= site_url('feat/search_results/') ?>" method="get">
                        <div class="search" style="padding-top:10px; margin-bottom:-10px;">
                            <input type="text" class="form-control input-sm" name="q" maxlength="64" placeholder="Search" />
                            <button type="submit" class="bt btn btn-primary btn-sm"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Search</button>
                        </div>
                    </form>

                </li>

                <li>
                    <?php
                    if ($this->session->userdata('loggedin') != 1) {
                        ?>
                        <a href="<?php echo base_url('users') ?>"><font size="2"><span class="glyphicon glyphicon-user " aria-hidden="true"></span>&nbsp;Login</font></a>
                        <?php
                    } else {
                        ?>
                    <li class="dropdown">

                        <a href="<?= base_url() . 'users/User_controls/CreateOrUpdate?user_id=' . $this->session->userdata('user_id') ?>" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-th-large"></i> Welcome <?php echo $this->session->userdata('full_name'); ?>!
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li> 
                                <a href="<?= base_url() . 'users/User_controls/CreateOrUpdate?user_id=' . $this->session->userdata('user_id') ?>">Manage Profile</a>
                            </li>
                            <li><a href="<?= base_url() . 'users/events/CreateOrUpdate' ?>">New Event</a></li>
                            <?php if ($this->session->userdata('level') >= 4) { ?>
                                <li><a href="<?= base_url() . 'users/User_controls/CreateOrUpdate' ?>">New User</a></li>
                                <?php
                            }
                            if ($this->session->userdata('level') >= 2) {
                                ?>

                                <li><a href="<?= base_url() . 'users/schools/CreateOrUpdate' ?>">New School</a></li>
                                <li><a href="<?= base_url() . 'users/clubs/CreateOrUpdate' ?>">New Club</a></li>
                                <li><a href="<?= base_url() . 'users/notices/CreateOrUpdate' ?>">New Notice</a></li>
                                <li><a href="<?= base_url() . 'users/ebooks/CreateOrUpdate' ?>">New Ebook</a></li>
                                <li><a href="<?= base_url() . 'users/exams/CreateOrUpdate' ?>">New Exam</a></li>



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

<style>
    #search {
        float: right;
        margin-top: 9px;
        width: 250px;
    }

    .search {
        padding: 5px 0;
        margin-right: 10px;
        width: 230px;
        height: 30px;
        position: relative;
        left: 10px;
        float: left;
        line-height: 22px;
    }

    .search input {
        position: absolute;
        width: 0px;
        float: Left;
        margin-left: 210px;
        -webkit-transition: all 0.4s ease-in-out;
        -moz-transition: all 0.4s ease-in-out;
        -o-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
        height: 30px;
        line-height: 18px;
        padding: 0 2px 0 2px;
        border-radius:1px;
    }

    .search:hover input, .search input:focus {
        width: 200px;
        margin-left: 0px;
    }


    .bt {
        height: 30px;
        position: absolute;
        right: 0;
        top: 10px;
        margin-bottom:-10px;
        border-radius:1px;
    }

</style>