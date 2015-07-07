<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" href="<?php echo base_url('resources/images/favicon.ico') ?>">
        <script src="<?php echo base_url('resources/jquery-2.1.4.min.js') ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('resources/css/bootstrap.min.css') ?>">
        <script src="<?php echo base_url('resources/js/bootstrap.js') ?>"></script>
        <script src="<?php echo base_url('resources/sss/sss.min.js') ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('resources/sss/sss.css') ?>" type="text/css" media="all">
        <script>
            jQuery(function ($) {
                $('.slider').sss();
            });
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
            body { padding-top: 25px; }

            .divr {
                -webkit-animation: myfirst 7s; /* Chrome, Safari, Opera */
                animation: myfirst 7s;
            }


            @keyframes myfirst {
                from {background: pink;}
                to {background: purple;}
            }


        </style>

    </head>
    <body background="<?php echo base_url('resources/images/home_new.jpg') ?>" style="background-attachment: fixed; background-repeat: repeat;">
        <div class="container-fluid">





