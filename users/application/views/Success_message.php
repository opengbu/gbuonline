<?php
/*
 *  Created on :Jul 15, 2015, 10:44:48 PM
 *  Author        :Varun Garg <varun.10@live.com>
 
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