<?php
/*
 * Created on : Oct 27, 2015, 8:29:51 PM
 * Author     :Varun Garg <varun.10@live.com>
 */
?>

<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Gautam Buddha University,gbu,gbuonline,gbu online,abhivyanjana,ecokart,shouryotsav">
        <link href='https://fonts.googleapis.com/css?family=Roboto|Oswald|Josefin+Sans' rel='stylesheet' type='text/css'>


        <link href='https://fonts.googleapis.com/css?family=Signika:700' rel='stylesheet' type='text/css'>
        <title><?php echo 'hello world'; ?></title>
        <link rel="shortcut icon" href="<?php echo $this->cdn->res_url('resources/images/favicon.ico') ?>">
        <script src="<?php echo $this->cdn->res_url('resources/jquery-2.1.4.min.js') ?>"></script>
        <link rel="stylesheet" href="<?php echo $this->cdn->res_url('resources/css/bootstrap.min.css') ?>">
        <script src="<?php echo $this->cdn->res_url('resources/js/bootstrap.js') ?>"></script>
        <script src="<?php echo $this->cdn->res_url('resources/sss/sss.min.js') ?>"></script>

        <link rel="stylesheet" href="<?php echo $this->cdn->res_url('resources/sss/sss.css') ?>" type="text/css" media="all">
        <style>
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
            body { 
                font-family: 'Roboto', sans-serif;
            }
            .navbar-primary .navbar { background:#333333; border-bottom:none; }
            .navbar-primary .navbar .nav > li > a {color: #d3d1d1;}
            .navbar-primary .navbar .nav > li > a:hover {color: #fff; background-color: #8e49a3;}
            .navbar-primary .navbar .nav .active > a,.navbar .nav .active > a:hover {color: #fff; background-color: #501762;}
            .navbar-primary .navbar .nav li > a .caret, .tnav .navbar .nav li > a:hover .caret {border-top-color: #fff;border-bottom-color: #fff;}
            .navbar-primary .navbar .nav > li.dropdown.open.active > a:hover {}
            .navbar-primary .navbar .nav > li.dropdown.open > a {color: #fff;background-color: #9f58b5;border-color: #fff;}
            .navbar-primary .navbar .nav > li.dropdown.open.active > a:hover .caret, .tnav .navbar .nav > li.dropdown.open > a .caret {border-top-color: #fff;}
            .navbar-primary .navbar .navbar-brand {color:#fff;}
            .navbar-primary .navbar .nav.pull-right {margin-left: 10px; margin-right: 0;}
            .navbar-xs .navbar-primary .navbar { min-height:28px; height: 28px; }
            .navbar-xs .navbar-primary .navbar .navbar-brand{ padding: 0px 12px;font-size: 16px;line-height: 28px; }
            .navbar-xs .navbar-primary .navbar .navbar-nav > li > a {  padding-top: 0px; padding-bottom: 0px; line-height: 28px; }
            .navbar-sm .navbar-primary .navbar { min-height:40px; height: 40px; }
            .navbar-sm .navbar-primary .navbar .navbar-brand{ padding: 0px 12px;font-size: 16px;line-height: 40px; }
            .navbar-sm .navbar-primary .navbar .navbar-nav > li > a {  padding-top: 0px; padding-bottom: 0px; line-height: 40px; }
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
    <body>
        <div class="container-fluid footer-problem">