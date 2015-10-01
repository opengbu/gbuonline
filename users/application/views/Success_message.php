<?php
/*
 *  Created on :Jul 15, 2015, 10:44:48 PM
 *  Author        :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            GBU Online
        </title>
        <link rel="stylesheet" href="<?php echo base_url() . 'application/views/common/' . 'css/bootstrap.min.css' ?>">

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

                    <span class="glyphicon glyphicon-ok"></span> <strong>Success</strong>
                    <hr class="message-inner-separator">
                    <p>
                        <?= $message ?> <br />
                        <a href = "<?= base_url() ?>" > Login </a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>