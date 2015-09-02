<style>

hr {
  height:0; 
  border:0; 
  border-top:1px solid #083972; 
}


.event .panel-body {
  background: #BBDEFB;
  border: 1px solid #448AFF;
  padding:0;
  margin:0;
  height:86px;
}
.event .panel-body > div {
  padding: 0 10px;
}
.event .panel-body .rsvp {
  border-left: none;
  padding: 0;
  text-align: center;
  position: relative;
  background: #64B5F6;
  color: white;
  height: 100%;
}

.event .rsvp > div {
  font-size: 12px;
  position: absolute;
  bottom: 0;
  background: #42A5F5;
  width: 100%;
}

.event .rsvp i {
  font-size: 2em;
  display: block;
  position:relative;
  top:17%;
  margin-bottom:5px;
}
.event .rsvp i:last-of-type{
    font-size:1.5em;
    margin-top:-23px;
}

.event .rsvp span {
  cursor: pointer;
  padding: 0 5px;
  margin: 5px 0;
  width:45%;
}
.event .rsvp span:first-of-type{
  border-right: 1px solid white;
}
.event .rsvp span:hover{
  color: #1565C0;
}

.event .info{
  font-size: 28px;
}

.event .info > div, .event .info > ul{
  font-size: 12px;
}

.event .author .profile-image {
  position: absolute;
  background: white;
  padding: 3px;
  width: 5em;
  border-radius: 50%;
  border: 1px solid #CCC;
  box-sizing: content-box;
  z-index: 1;
  top:4px;
}

.event .author img {
    width:100%;
    border-radius:50%;
}

/* Overwrites */
.nav-tabs a {
  background: #90CAF9;
  color: white;
}
.info .nav-tabs li.active a {
  background-color: #448AFF;
  color: white;
}
.info .nav-tabs li:hover a, .info .nav-tabs li.active:hover a {
  background: #00BCD4;
  color: white;
}
.tab-content {
  background: white;
  border-radius: 0 10px;
  padding: 10px;
}

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) { 
    .event .panel-body {
        height:158px;
    }
    
    .event .rsvp {
        min-height:100%;
    }
    
    .event .rsvp i {
        font-size:4em;
        top:5%;
    }
    
    .event .panel-body .author {
      position: relative;
      color: #2196F3;
      padding:10px;
      height:100%;
    }
    .event .profile {
      position: relative;
      z-index: 0;
      border-left: 2px solid white;
      top: -5px;
      padding-left: 55px;
      height: 100%;
      left: 10%;
    }
    .event .profile strong {
      display: block;
      color: white;
      font:20px bold 'Fredoka One', serif;
      -webkit-text-stroke-width: .6px;
      -webkit-text-stroke-color: #448AFF;
      margin-bottom: 5px;
    }
    .event .author .profile i {
      color:  #448AFF;
      padding-left: 0;
    }
    .event .profile .links {
      position: absolute;
      bottom: 0;
    }
    .event .profile article {
        padding:0 41px 0 0;
    }
    .event .author .profile i:hover{
      color:  #00BCD4;
    }
    .event .author .profile-image {
      position: absolute;
      background: white;
      padding: 3px;
      width: 30%;
      border-radius: 50%;
      border: 1px solid #CCC;
      box-sizing: content-box;
      z-index: 1;
      top:13px;
    }
    .event .author img {
      width: 100%;
      border-radius: 50%;
    }
}


</style>


<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">
	
	<div class="well well-sm">
		<ul class="nav nav-pills nav-justified">
<li role="presentation"><a href="<?= site_url('alumni');?>">Home</a></li>
  <li role="presentation"><a href="<?= site_url('alumni/distinguished');?>">Distinguished Alumni</a></li>
  <li role="presentation"><a href="<?= site_url('alumni/alumniList');?>">Alumni List</a></li>
  <li role="presentation" class="active"><a href="<?= site_url('alumni/events');?>">Events</a></li>
  <li role="presentation"><a href="<?= site_url('alumni/gallery');?>">Gallery</a></li>
  <li role="presentation"><a href="<?= site_url('alumni_profile');?>">Alumni Profiles</a></li>
		</ul>
	</div>
		<br> 
		
		<!--your content-->
		<div style="margin-left:4px;" class="row">
		
		<img  src="<?php echo base_url('resources/images/12.jpg')?>" height="300px" width="1300px"/>
		<div class=" col-md-10">
			
			 <h1 style="font-family:'Oswald', sans-serif ;"> <b><u> EVENTS</u></b> </h1>
			 
				<font color="#5e746b">
				 <p>
				 <h4>With over 1000 worldwide events a year, you have a wealth of alumni networking opportunities.
				 You’re invited to BU sports events, concerts, conferences, volunteer days, as well as professional development meetings</h4>
				 </p></font>
			 <h3 style="font-family:'Oswald', sans-serif ;"> <b><u>SOMETHING FOR EVERY SEASON</u></b> </h3>
			 <font color="#5e746b">
				 <p>
				<h4> Year round, Terriers like you get together to learn, help, and play. 
				 Fall’s Alumni Weekend offers great personal and career connections. 
				 Winter offers a full season of celebration with holiday festivities, sporting events, and more for you and your fellow alumni. 
				 Check out the events calendar so you won’t miss a thing.</h4>
				 </p></font>
		</div>
		<div  class=" col-md-2">
		
			<h3><span class="label label-default">QUICK LINKS</span></h3><hr />

		
			
			<u><a style="color: #0c0d49" href="">Educational Programs</a></u><br><br>
			<u><a style="color: #0c0d49" href="">Global Days of Service</a> </u><br><br>
			<u><a style="color: #0c0d49" href="">Alumni Weekend</a></u> 
		
			
		
		
		</div>
		</div><!--for row-->
		<br><br><br>
		<div  style="margin-left:12px;"   class="row">
		<h3><span class="label label-primary">UPCOMING EVENTS</span></h3><hr />
		<br>
		
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
		<div class="panel panel-default event">
  <div class="panel-body">
    <div class="rsvp col-xs-2 col-sm-2">
      <i>8</i>
      <i>SEP</i>
      <div class="hidden-xs">
        <span class="fa fa-thumbs-up fa-2x"></span>
        <span class="fa fa-thumbs-down fa-2x"></span>
      </div>
    </div>
    <div class="info col-xs-8 col-sm-7">
      <b style="color:white">Terriers @ Work: ESPN</b>
      <div class="visible-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elitero..</div>
      <div class="hidden-xs">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#location" aria-controls="location" role="tab" data-toggle="tab">Location</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="location">GAUTAM BUDDHA UNIVERSITY</div>
            <div role="tabpanel" class="tab-pane" id="profile">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis feugiat sem, eu sagittis libero. Duis non odio ut nibh volutpat tempus eget interdum elit. 
            </div>
          </div>
        </div>
    </div>
    <div class="author col-xs-2 col-sm-3">
        <div class="profile-image">
            <img src="http://api.randomuser.me/portraits/med/men/71.jpg"/>
        </div>
        <div class="profile hidden-xs">
            <strong style="padding-left:20px">Robert White</strong>
            <article style="padding-left:20px">Event leader and founder of this group</article>
            <div class="links hidden-sm">
              <i class="fa fa-github-square fa-2x col-xs-3"></i>
              <i class="fa fa-google-plus-square fa-2x col-xs-3"></i>
              <i class="fa fa-facebook-square fa-2x col-xs-3"></i>
              <i class="fa fa-linkedin-square  fa-2x col-xs-3"></i>
            </div>
        </div>
        
    </div>
  </div>
  </div>
  <br>
		
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
		<div class="panel panel-default event">
  <div class="panel-body">
    <div class="rsvp col-xs-2 col-sm-2">
      <i>11</i>
      <i>SEP</i>
      <div class="hidden-xs">
        <span class="fa fa-thumbs-up fa-2x"></span>
        <span class="fa fa-thumbs-down fa-2x"></span>
      </div>
    </div>
    <div class="info col-xs-8 col-sm-7">
     <b style="color:white;">Kick off the Season: Steelers vs Patriots Watch Party</b>
      <div class="visible-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elitero..</div>
      <div class="hidden-xs">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#location1" aria-controls="location" role="tab" data-toggle="tab">Location</a></li>
            <li role="presentation"><a href="#profile1" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="location1">GAUTAM BUDDHA UNIVERSITY</div>
            <div role="tabpanel" class="tab-pane" id="profile1">
    Lorem ipsum dolor sit amet, consectetur adipiscing1 elit. Nulla mattis feugiat sem, eu sagittis libero. Duis non odio ut nibh volutpat tempus eget interdum elit. 
            </div>
          </div>
        </div>
    </div>
    <div class="author col-xs-2 col-sm-3">
        <div class="profile-image">
            <img src="http://api.randomuser.me/portraits/med/men/71.jpg"/>
        </div>
        <div  class="profile hidden-xs">
            <strong style="padding-left:20px;">Robert White</strong>
            <article style="padding-left:20px">Event leader and founder of this group</article>
            <div class="links hidden-sm">
              <i class="fa fa-github-square fa-2x col-xs-3"></i>
              <i class="fa fa-google-plus-square fa-2x col-xs-3"></i>
              <i class="fa fa-facebook-square fa-2x col-xs-3"></i>
              <i class="fa fa-linkedin-square  fa-2x col-xs-3"></i>
            </div>
        </div>
        
    </div>
  </div>
  
  
  
		
		
		
		
		
		
	
</div>