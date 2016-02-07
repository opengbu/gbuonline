<center>
	<div style = "position:absolute;">
		<img src="<?php echo $this->cdn->res_url('resources/images/abhi_title.png')?>" style=" opacity:1; z-index:1;" height= "700" />
	</div>
</center>

<div class="btn-group-vertical" role="group" style = " position:absolute; z-index:1; padding-top:130px; padding-left:10px">
	<a href = "<?php echo site_url('feat/events?mega_event_id=1')?>">
		<button type="button" class="btn btn-default col-md-4 glyphicon glyphicon-calendar" style= "width:220px; height:57px; border-radius:15px">
			<b>&nbsp;EVENTS</b>
		</button>
	</a><br/>
    <br/>
	<a href = "<?php echo site_url('Abhivyanjana/gallery')?>">
		<button type="button" class="btn btn-default col-md-4 glyphicon glyphicon-camera" style= "width:220px; height:57px; border-radius:15px">
			<b>&nbsp;GALLERY</b>
		</button><br/>
    </a>
	<br/>
	<a href = "<?php echo site_url('Abhivyanjana/contact')?>">
		<button type="button" class="btn btn-default col-md-4 glyphicon glyphicon-phone glyphicon glyphicon-search" style= "width:220px; height:57px;border-radius:15px">
			<b>&nbsp;CONTACT</b>
		</button>
	</a>
	<br/><br/>
	<a href = "<?php echo site_url('Abhivyanjana/devep')?>">
		<button type="button" class="btn btn-default col-md-4 glyphicon glyphicon-king" style= "width:220px; height:57px;border-radius:15px">
			<b>&nbsp;DEVELOPERS</b>
		</button>
	</a>
	<br/>
</div>

<div style = "overflow:hidden;">
	<video id="bg" src="<?php echo $this->cdn->res_url('resources/abhi_video/abhi1.mp4')?>" autoplay="true" loop="true" muted = "false" style="opacity:0.6; width:100%;margin:0px;"></video>
</div>

