<?php
/*
 *  Created on :Oct 1, 2015, 6:36:37 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Password Reset |  GBU Online
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
                            <h3 class="panel-title"><div class="text-center">Account Recovery</div></h3>
                        </div>
                        <div class="panel-body">
                            <?php
                            echo form_open(current_url());
                            ?>
                            <div class="form-group">
                                <input type="password" name="password"   class="form-control input-sm" placeholder="Password" required="required">
                            </div>

                            <div class="form-group">
                                <input type="password" name="passconf" class="form-control input-sm" placeholder="Confirm Password" required="required">
                            </div>

                            <div class="form-group">
                                <?php
                                echo '<label><font color="red">' . validation_errors() . '</font></label>';
                                ?>
                            </div>
                            <input type="submit" value="Reset" class="btn btn-info btn-block" />

                            </form>
                            <a href="<?= base_url() ?>" class="btn btn-info btn-block" />Sign in </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
