<?php
/*
 *  Created on :Jul 15, 2015, 4:38:16 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Sign Up GBU Online
        </title>
        <link rel="stylesheet" href="<?php echo $this->cdn->users() . 'application/views/common/' . 'css/bootstrap.min.css' ?>">
        <link rel="shortcut icon" href="<?php echo $this->cdn->base() . '/resources/images/favicon.ico' ?>">

        <script type="text/javascript" src="<?php echo $this->cdn->users() . 'application/views/common/' . 'js/jquery-2.1.3.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo $this->cdn->users() . 'application/views/common/' . 'js/bootstrap.min.js' ?>"></script>
        <style>
            body{
                background-image: url('<?php echo $this->cdn->users() . 'application/views/common/' . 'color-splash.jpg' ?>');

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
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><div class="text-center"> Sign up for GBU Online</div></h3>
                        </div>
                        <div class="panel-body">
                            <?php
                            echo form_open('Register/index/');
                            ?>
                            <div class="form-group">
                                <input type="text" name="username" value="<?= set_value('username') ?>"class="form-control input-sm"  placeholder="username" required="true">
                            </div>

                            <div class="form-group">
                                <input type="text" name="full_name" value="<?= set_value('full_name') ?>" class="form-control input-sm" placeholder="Full Name" required="true">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control input-sm" placeholder="Email Address" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" name="roll_number" value="<?= set_value('roll_number') ?>" class="form-control input-sm" placeholder="Roll Number (Not Necessary)">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone_number" value="<?= set_value('phone_number') ?>" class="form-control input-sm" placeholder="Phone Number (Not Necessary)">
                            </div>


                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password"   class="form-control input-sm" placeholder="Password" required="required">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="passconf" class="form-control input-sm" placeholder="Confirm Password" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php
                                echo '<label><font color="red">' . validation_errors() . '</font></label>';
                                ?>
                            </div>
                            <input type="submit" value="Register" class="btn btn-info btn-block" />

                            </form>
                            <a href="<?= base_url() ?>" class="btn btn-info btn-block" />Already Registered?    Sign in </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>