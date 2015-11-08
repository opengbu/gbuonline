<?php
/*
 *  Created on :Sep 11, 2015, 6:20:16 AM
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
<?php
if ($this->session->userdata('loggedin') != 1) {
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
            <link rel="shortcut icon" href="<?php echo dirname(base_url()) . '/resources/images/favicon.ico' ?>">

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


                <?php
            }
            ?>
            <div class="col-sm-6 col-md-6">
                <div class="alert alert-danger centered-form">

                    <span class="glyphicon glyphicon-alert"></span> <strong>Sorry</strong>
                    <hr class="message-inner-separator">
                    <p>
                        <?php echo $errors; ?> <br />
                        <?php
                        if ($this->session->userdata('loggedin') != 1) {
                            ?>

                            <br />                   
                            <a href = "<?= base_url() ?>" > Login </a>

                            <?php
                        }
                        ?>
                    </p>
                </div>
            </div>

            <?php
            if ($this->session->userdata('loggedin') != 1) {
                ?>

            </div>  
        </body>
    </html>

    <?php
}
?>