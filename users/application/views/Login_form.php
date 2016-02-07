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
<html>
    <head>
        <title>Login to GBU Online</title>
        <link rel="shortcut icon" href="<?php echo $this->cdn->base() . '/resources/images/favicon.ico' ?>">
        <link rel="stylesheet" href="<?php echo $this->cdn->users() . 'application/views/common/' . 'css/bootstrap.min.css' ?>">
        <link rel="stylesheet" href="<?php echo $this->cdn->users() . 'application/views/common/' . 'css/varun.css' ?>">
        <script type="text/javascript" src="<?php echo $this->cdn->users() . 'application/views/common/' . 'js/jquery-2.1.3.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo $this->cdn->users() . 'application/views/common/' . 'js/bootstrap.min.js' ?>"></script>
        <style>
            .centered-form{
                margin-top: 60px;
            }
            .centered-form .panel{
                background: rgba(255, 255, 255, 0.8);
                box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
            }
            body{
                background-image: url('<?php echo $this->cdn->users() . 'application/views/common/' . 'color-splash.jpg' ?>');

            }
        </style>
    </head>
    <body>
        <div id="fullscreen_bg" class="fullscreen_bg"/>
        <div class="container">

            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3 class="panel-title"><div class="text-center"> Sign in to GBU Online</div></h3>
                        </div>
                        <div class="panel-body">
                            <center>
                                <img width="50%" src ="<?php echo $this->cdn->base() . '/resources/images/' . '200x200.bmp' ?>" >
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
                                <input type="text" name="username" class="form-control" placeholder="username or email" value="<?php echo set_value('username'); ?>" required autofocus>        
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" value="" class="form-control" placeholder="password" required />
                            </div>

                            <div><input type="submit" value="Login" class="btn btn-lg btn-primary btn-block"/></div>

                            </form>
                            <a class="btn btn-success btn-lg btn-block" href="<?= base_url('register') ?>" > Sign Up </a>
                            <br />
                            <a class="btn btn-warning btn-lg btn-block" href="<?= base_url('Reset_password') ?>" >Account Recovery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>