<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>

<html>
    <head>
        <title>Login to GBU Online</title>
        <link rel="stylesheet" href="<?php echo base_url() . 'application/views/common/' . 'css/bootstrap.min.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'application/views/common/' . 'css/varun.css' ?>">
        <script type="text/javascript" src="<?php echo base_url() . 'application/views/common/' . 'js/jquery-2.1.3.min.js' ?>"></script>
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
            .centered-form{
                margin-top: 60px;
            }
            .centered-form .panel{
                background: rgba(255, 255, 255, 0.8);
                box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
            }
            body{
                background-image: url('<?php echo base_url() . 'application/views/common/' . 'color-splash.jpg' ?>');

            }
        </style>
    </head>
    <body>
        <div id="fullscreen_bg" class="fullscreen_bg"/>
        <div class="container">
            <br />

               <nav class="navbar navbar-fixed-top navbar-inverse navbar-default navbar-custom" role="navigation">
                   <a class="navbar-brand" href="<?php echo dirname(base_url()) ?>"><font size="6" color="white">Sign in to GBU Online</font></a> 
               </nav> 

            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <center>
                                <img width="50%" src ="<?php echo dirname(base_url()) . '/resources/images/' . '200x200.bmp' ?>" >
                            </center>
                        
                        <br>
                  
                            <?php
                            echo '<label>' . validation_errors() . '</label>';
                            ?>
                            <?php
                            if (isset($_REQUEST['redirect']) && $_REQUEST['redirect'] != "") {
                                echo form_open("login?redirect=" . $_REQUEST['redirect']);
                            } else {
                                echo form_open("login/index/");
                            }
                            ?>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="username" required autofocus>        
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" value="" class="form-control" placeholder="password" required />
                            </div>

                            <div><input type="submit" value="Login" class="btn btn-lg btn-primary btn-block"/></div>

                            </form>
                            <a class="btn btn-success btn-lg btn-block" href="<?= base_url('register') ?>" > Sign Up </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>