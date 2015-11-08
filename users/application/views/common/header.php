<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 
	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. 

 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>
            <?php
            echo ucfirst(str_replace('_', ' ', $this->router->fetch_class()));
            ?>
            | GBU Online
        </title>
        <link rel="shortcut icon" href="<?php echo $this->cdn->base() . '/resources/images/favicon.ico' ?>">

        <link rel="stylesheet" href="<?php echo $this->cdn->users() . 'application/views/common/' . 'css/bootstrap-select.min.css' ?>">
        <link rel="stylesheet" href="<?php echo $this->cdn->users() . 'application/views/common/' . 'css/bootstrap.min.css' ?>">
        <link rel="stylesheet" href="<?php echo $this->cdn->users() . 'application/views/common/' . 'css/font-awesome.min.css' ?>">
        <link rel="stylesheet" href="<?php echo $this->cdn->users() . 'application/views/common/' . 'css/varun.css' ?>">

        <script type="text/javascript" src="<?php echo $this->cdn->users() . 'application/views/common/' . 'js/jquery-2.1.3.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo $this->cdn->users() . 'application/views/common/' . 'js/bootstrap-select.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo $this->cdn->users() . 'application/views/common/' . 'js/bootstrap.min.js' ?>"></script>
        <style>
            .navbar-nav.navbar-right:last-child {
                margin-right: 0;
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

            #getFixed {
                width: 231px;
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
            jQuery(function ($) {
                function fixDiv() {
                    var $cache = $('#getFixed');
                    var $height = $(window).scrollTop();
                    var $p_width = $(window).width();

                    if ($(this).scrollTop() >= 0 && $p_width > 978)
                        $cache.css({
                            'top': $height
                        });
                    else
                        $cache.css({
                            'top': 'auto'
                        });

                }
                $(window).scroll(fixDiv);
                fixDiv();
            });
        </script>
    </head>
    <body style="background-image: url(<?php echo $this->cdn->users('application/views/common/background.jpg') ?>); background-attachment: fixed; background-repeat: repeat;">
        <div  id="wrapper"  class="toggled">     

            <nav class="navbar navbar-fixed-top navbar-inverse navbar-default navbar-custom" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <button type="button" class="navbar-toggle collapsed pull-left" style="margin-left: 0; " data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="<?= dirname(base_url()) ?>">GBU Online</a>

                </div> 
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-th-large"></i> New
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url() . 'events/CreateOrUpdate' ?>">Event</a></li>
                                <li><a href="<?= base_url() . 'schools/CreateOrUpdate' ?>">School</a></li>
                                <li><a href="<?= base_url() . 'clubs/CreateOrUpdate' ?>">Club</a></li>
                                <li><a href="<?= base_url() . 'notices/CreateOrUpdate' ?>">Notice</a></li>
                                <li><a href="<?= base_url() . 'ebooks/CreateOrUpdate' ?>">Ebook</a></li>
                                <li><a href="<?= base_url() . 'exams/CreateOrUpdate' ?>">Exam</a></li>

                                <?php if ($this->permissions->get_level() >= 4) { ?>
                                    <li><a href="<?= base_url() . 'User_controls/CreateOrUpdate' ?>">User</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li> 
                            <a href="<?= base_url() . 'User_controls/CreateOrUpdate?user_id=' . $this->session->userdata('user_id') ?>">Welcome <?= $this->session->userdata('full_name') ?>!</a>
                        </li>


                        <?php /* if (strlen($this->session->userdata('profile_picture')) > 0) {
                          ?>
                          <li>
                          <a class="navbar-brand ">
                          <img style="max-width:65px; margin-top: -8px;"
                          src="<?= dirname(base_url()) . '/' . $this->session->userdata('profile_picture') ?>">
                          </a>
                          </li>
                          <?php
                          } */
                        ?>
                        <li>
                            <a href="<?= base_url() . 'logout' ?>">Log out</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="navbar navbar-default sidebar pre-scrollable" style="overflow-y:auto; max-height:100%;" id="getFixed"  id="sidebar-wrapper" role="navigation">
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
                            <li ><a href="<?php echo base_url() . 'Schools' ?>">Schools <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-th-list fa-2x"></i></a></li>
                            <li ><a href="<?php echo base_url() . 'Schools/CreateOrUpdate' ?>" >New School<i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-plus-square fa-2x"></i></a></li>

                            <li ><a href="<?php echo base_url() . 'Clubs' ?>">Clubs <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-th-list fa-2x"></i></a></li>
                            <li ><a href="<?php echo base_url() . 'Clubs/CreateOrUpdate' ?>" >New Club<i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-plus-square fa-2x"></i></a></li>


                            <li ><a href="<?= base_url() . 'Events' ?>">All Events <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-tasks fa-2x"></i></a></li>
                            <li ><a href="<?= base_url() . 'Events/CreateOrUpdate' ?>">New Event <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-plus-square fa-2x"></i></a></li>
                            <li ><a href="<?php echo base_url() . 'featured_events' ?>">Featured Events <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-road fa-2x"></i></a></li>

                            <li ><a href="<?php echo base_url() . 'Ebooks' ?>">Ebooks <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-th-list fa-2x"></i></a></li>
                            <li ><a href="<?php echo base_url() . 'Ebooks/CreateOrUpdate' ?>" >New Ebook<i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-plus-square fa-2x"></i></a></li>

                            <li ><a href="<?php echo base_url() . 'Exams' ?>">Exams <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-th-list fa-2x"></i></a></li>
                            <li ><a href="<?php echo base_url() . 'Exams/CreateOrUpdate' ?>" >Add Exam Paper<i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-plus-square fa-2x"></i></a></li>

                            <li ><a href="<?php echo base_url() . 'Notices' ?>">Notices <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-th-list fa-2x"></i></a></li>
                            <li ><a href="<?php echo base_url() . 'Notices/CreateOrUpdate' ?>" >Add Notice<i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-plus-square fa-2x"></i></a></li>

                            <li ><a href="<?= base_url() . 'News' ?>">All News <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-tasks fa-2x"></i></a></li>
                            <li ><a href="<?= base_url() . 'News/CreateOrUpdate' ?>">Add News <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-plus-square fa-2x"></i></a></li>

                            <li ><a href="<?php echo base_url() . 'media_upload/do_upload' ?>">Upload Media <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-upload fa-2x"></i></a></li>
                            <li ><a href="<?php echo base_url() . 'manage_uploads' ?>">Manage Media <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-picture-o fa-2x"></i></a></li>

                            <li ><a href="<?= base_url() . 'all_blogs' ?>">Manage Blogs <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-tags fa-2x"></i></a></li>
                            <li ><a href="<?php echo base_url() . 'User_controls' ?>">Users <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-users fa-2x"></i></a></li>


                            <li ><a href="<?php echo base_url() . 'User_controls/CreateOrUpdate' ?>">New user <i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-user-plus fa-2x"></i></a></li>

                            <li><a href="<?php echo base_url() . 'stats' ?>">Statistics<i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-line-chart fa-2x"></i></a></li>
                            <li><a href="<?php echo base_url() . 'logs' ?>">Logs<i style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-th-list fa-2x"></i></a></li>

                        </ul>
                    </div>

                </div>
            </nav>
            <div id="page-content-wrapper" class="container-fluid" >
       