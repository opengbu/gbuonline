<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            GBU Online
        </title>
        <link rel="stylesheet" href="<?php echo base_url() . 'application/views/common/' . 'dist/css/bootstrap-select.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'application/views/common/' . 'css/bootstrap.min.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'application/views/common/' . 'css/font-awesome.min.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'application/views/common/' . 'css/varun.css' ?>">

        <script type="text/javascript" src="<?php echo base_url() . 'application/views/common/' . 'js/jquery-2.1.3.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'application/views/common/' . 'dist/js/bootstrap-select.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'application/views/common/' . 'js/bootstrap.min.js' ?>"></script>
        <style>
            .navbar-nav.navbar-right:last-child {
                margin-right: 0;
            }
            .navbar-brand
            {
                position: absolute;
                width: 100%;
                left: 0;
                text-align: center;
                margin: auto;
            }
            .navbar-custom .navbar-nav > li > a {
                color:#fff;
            }
            .navbar-custom .navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
                color: #ffffff;
                background-color:transparent;
            }
            .navbar-custom .navbar-brand {
                color:#eeeeee;
            }
            .caret-up {
                width: 0; 
                height: 0; 
                border-left: 4px solid rgba(0, 0, 0, 0);
                border-right: 4px solid rgba(0, 0, 0, 0);
                border-bottom: 4px solid;

                display: inline-block;
                margin-left: 2px;
                vertical-align: middle;
            }
        </style>
        <script>
            $(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                            $(this).toggleClass('open');
                            $('b', this).toggleClass("caret caret-up");
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                            $(this).toggleClass('open');
                            $('b', this).toggleClass("caret caret-up");
                        });
            });
        </script>
    </head>
    <body background="<?php echo base_url('application/views/common/background.jpg') ?>" style="background-attachment: fixed; background-repeat: repeat;">
        <div  id="wrapper"  class="toggled">     

            <nav class="navbar navbar-fixed-top navbar-inverse navbar-default navbar-custom" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= dirname(base_url()) ?>"><font size="6"><b>Gautam Buddha University</b></font></a> 

                </div> 
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                        <li><a href="<?= base_url() . 'all_events' ?>">All Events</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-th-large"></i> New
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url() . 'new_event' ?>">Event</a></li>
                                <?php if ($this->session->userdata('type') == 'admin') { ?>
                                    <li><a href="<?= base_url() . 'new_user' ?>">User</a></li>
                                    <li><a href="<?= base_url() . 'new_school' ?>">School</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>            

                    <ul class="nav navbar-nav navbar-right">
                        <li> 
                            <a href="<?= base_url() . 'edit_user/index/' . $this->session->userdata('user_id') ?>">Welcome <?= $this->session->userdata('full_name') ?>!</a>
                        </li>
                        <li>
                            <a href="<?= base_url() . 'logout' ?>">Log out</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="navbar navbar-default sidebar" id="sidebar-wrapper" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>      
                    </div>
                    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li ><a href="<?php echo base_url() . 'all_schools' ?>">Schools <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-th-list fa-2x"></i></a></li>
                            <?php if ($this->session->userdata('type') == 'admin') { ?>
                                <li ><a href="<?php echo base_url() . 'new_school' ?>" >New School<i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-plus-square fa-2x"></i></a></li><?php } ?>


                            <li ><a href="<?= base_url() . 'all_events' ?>">All Events <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-tasks fa-2x"></i></a></li>
                            <li ><a href="<?= base_url() . 'new_event' ?>">New Event <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-plus-square fa-2x"></i></a></li>
                            <li ><a href="<?php echo base_url() . 'manage_upcoming' ?>">Manage Upcoming Events <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-road fa-2x"></i></a></li>
                            <li ><a href="<?php echo base_url() . 'image_upload' ?>">Upload Image <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-upload fa-2x"></i></a></li>
                            <li ><a href="<?php echo base_url() . 'manage_uploads' ?>">Manage Gallary <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-picture-o fa-2x"></i></a></li>

                            <li ><a href="<?= base_url() . 'all_blogs' ?>">Manage Blogs <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-tags fa-2x"></i></a></li>
                            <li ><a href="<?php echo base_url() . 'all_users' ?>">Users <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-users fa-2x"></i></a></li>

                            <?php if ($this->session->userdata('type') == 'admin') { ?>

                                <li ><a href="<?php echo base_url() . 'new_user' ?>">New user <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-user-plus fa-2x"></i></a></li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
            </nav>
            <div id="page-content-wrapper" >
                <div class="container-fluid">
