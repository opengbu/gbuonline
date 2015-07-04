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
            body {
            padding-top: 120px;
            padding-bottom: 40px;
            background-color: #eee;

            }
            .btn 
            {
            outline:0;
            border:none;
            border-top:none;
            border-bottom:none;
            border-left:none;
            border-right:none;
            box-shadow:inset 2px -3px rgba(0,0,0,0.15);
            }
            .btn:focus
            {
            outline:0;
            -webkit-outline:0;
            -moz-outline:0;
            }
            .fullscreen_bg {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-size: cover;
            background-position: 50% 50%;
            background-image: url('<?php echo base_url() . 'application/views/common/' . 'color-splash.jpg' ?>');
            background-repeat:repeat;
            }
            .form-signin {
            max-width: 280px;
            padding: 15px;
            margin: 0 auto;
            margin-top:50px;
            }
            .form-signin .form-signin-heading, .form-signin {
            margin-bottom: 10px;
            }
            .form-signin .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            }
            .form-signin .form-control:focus {
            z-index: 2;
            }
            .form-signin input[type='text'] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-top-style: solid;
            border-right-style: solid;
            border-bottom-style: none;
            border-left-style: solid;
            border-color: #000;
            }
            .form-signin input[type='password'] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-top-style: none;
            border-right-style: solid;
            border-bottom-style: solid;
            border-left-style: solid;
            border-color: rgb(0,0,0);
            border-top:1px solid rgba(0,0,0,0.08);
            }
            .form-signin-heading {
            color: #fff;
            text-align: center;
            text-shadow: 0 2px 2px rgba(0,0,0,0.5);


            .navbar-custom {
            background-color:#229922;
            color:#ffffff;
            border-radius:0;
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
        </style>
    </head>
    <body>
        <div id="fullscreen_bg" class="fullscreen_bg"/>
<?php // echo  validation_errors();  ?>
        <div class="container">
            <br />

            <nav class="navbar navbar-fixed-top navbar-inverse navbar-default navbar-custom" role="navigation">
                <a class="navbar-brand" href="<?php echo dirname(base_url()) ?>"><font size="6" color="white">Sign in to GBU Online</font></a> 
            </nav>

            <div class="form-signin">

                <br /><br />
                <?php
                $ctype = $this->session->userdata('ctype');
                echo form_open("login/index/$ctype");
                ?>
                <input type="text" name="username" class="form-control" placeholder="username" required autofocus>        
                <input type="hidden" value="<?php echo $ctype ?>" />        
                <input type="password" name="password" value="" class="form-control" placeholder="password" required />

                <?php
                echo '<label>' . validation_errors() . '</label>';
                ?>
                <div><input type="submit" value="Login" class="btn btn-lg btn-primary btn-block"/></div>

                </form>
            </div>
        </div>
    </body>
</html>