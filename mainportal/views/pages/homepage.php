<!-- GOOGLE ANALYTICS SCRIPT -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66646747-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- ANALYTICS ENDS -->
<!-- script for loading-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<!--loading end -->
<script>
		$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
<style>
		<!-- loading--> .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;
}
 </style>


<?php
require 'common/link.php';
require 'common/header.php';
?>
<br>
<!--row2 for heading-->
  
<?php
require 'slider.php';
require 'row4.php';
require 'common/footer.php';
?>

<!-- *********************** Website Traffic Analysis (for home page )************************* -->
<?php

$date = date('Y-m-d '); 
$time = date('H:i:s');

$storehits=$this->db->query("insert into analysis(date,time) values ('$date','$time')");

?>            