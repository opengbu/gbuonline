
<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            GBU Online
        </title>
        <link rel="stylesheet" href="<?=base_url().'application/views/common/'.'css/bootstrap.min.css'?>">
        <link rel="stylesheet" href="<?=base_url().'application/views/common/'.'css/varun.css'?>">
           <script type="text/javascript" src="<?=base_url().'application/views/common/'.'js/jquery-2.1.3.min.js'?>"></script>
            <script type="text/javascript" src="<?=base_url().'application/views/common/'.'js/bootstrap.min.js'?>"></script>
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
                h1 {
	font-family: Brush Script MT,cursive;
	font-size: 23px;
	font-style: normal;
	font-variant: small-caps;
	font-weight: 700;
	line-height: 23px;
}
h3 {
	font-family: Brush Script MT,cursive;
	font-size: 17px;
	font-style: normal;
	font-variant: normal;
}
p {
	font-family: Brush Script MT,cursive;
	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	line-height: 23px;
}
blockquote {
	font-family: Brush Script MT,cursive;
	font-size: 17px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	line-height: 23px;
}
pre {
	font-family: Brush Script MT,cursive;
	font-size: 11px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	line-height: 23px;
}
                    .navbar-custom {
                        <?php
                if($this->session->userdata('type')!='admin')
                echo "background-color:#00BFFF;";
                    else echo "background-color:#229922;"
                        ?>
                        
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
        <div  id="wrapper"  class="toggled">     
   
            <nav class="navbar navbar-fixed-top navbar-inverse navbar-default navbar-custom" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?=base_url()?>">Gautam Buddha University</a> 
                         <!--       <a class="navbar-brand" rel="home" href="<?=base_url()?>" title="Home">
                                      <img style="max-width:100px; margin-top: -7px;"
                                        src="<?=base_url().'application/views/common/gbu.png'?>">
                                  </a> !-->
                            
                          </div> 
                    <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                         
                        <li><a href="<?=base_url().'index.php/all_posts'?>">Posts</a></li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-th-large"></i> New
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=base_url().'index.php/new_article'?>">Post</a></li>
                                <?php if($this->session->userdata('type')=='admin'){?>
                                <li><a href="<?=base_url().'index.php/new_user'?>">User</a></li>
                                <li><a href="<?=base_url().'index.php/new_table'?>">School</a></li>
                                <?php }?>
                            </ul>
                        </li>
                     </ul>            
                                        <!--
                                           Website By Varun Garg(varun.10@live.com)
                                          !-->
     
                    <ul class="nav navbar-nav navbar-right">
                        <li> 
                                <a href="<?=base_url().'index.php/edit_user/index/'.$this->session->userdata('user_id')?>"><?=$this->session->userdata('username')?></a>
                        </li>
                        <li>
                            <a href="<?=base_url().'index.php/logout'?>">Log out</a>
                        </li>
                        </ul>
                    </div>
               </nav>


        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                    <a href="#">
                       Brand
                    </a>
                </li>
            <li ><a href="<?=base_url().'index.php/all_schools'?>">Schools</a></li>
           <?php if($this->session->userdata('type')=='admin'){?>
           <li ><a href="<?=base_url().'index.php/new_table'?>" >New School</a></li><?php } ?>
            
           
        <li ><a href="<?=base_url().'index.php/all_posts'?>">All Posts</a></li>
        <li ><a href="<?=base_url().'index.php/new_article'?>">New Post</a></li>
  
                 
            <li ><a href="<?=base_url().'index.php/all_blogs'?>">Manage Blogs</a></li>
  
            <li ><a href="<?=base_url().'index.php/all_users'?>">Users</a></li>
            <?php if($this->session->userdata('type')=='admin'){?>
            <li ><a href="<?=base_url().'index.php/new_user'?>">New user</a></li><?php } ?>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <a>dafsgf</a>
                </ul>
            
         </nav>
        
        <div id="page-content-wrapper" >
            <div class="container-fluid">
        