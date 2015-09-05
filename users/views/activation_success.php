<?php
/*
 *  Created on :Jul 15, 2015, 10:44:48 PM
 *  Author        :Varun Garg <varun.10@live.com>
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            GBU Online
        </title>
        <link rel="stylesheet" href="<?php echo base_url() . 'views/common/' . 'css/bootstrap.min.css' ?>">

        <script type="text/javascript" src="<?php echo base_url() . 'views/common/' . 'js/jquery-2.1.3.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'views/common/' . 'js/bootstrap.min.js' ?>"></script>
        <style>
            body{
                background-color: #525252;
            }
            .centered-form{
                margin-top: 60px;
            }

            .centered-form .panel{
                background: rgba(255, 255, 255, 0.8);
                box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="col-sm-6 col-md-6">
                <div class="alert alert-success centered-form">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×</button>
                    <span class="glyphicon glyphicon-ok"></span> <strong>Success</strong>
                    <hr class="message-inner-separator">
                    <p>
                        Your account has been successfully activated. <br />
                        <a href="<?=base_url()?>" > Login </a>
                    </p>
                </div>
            </div>