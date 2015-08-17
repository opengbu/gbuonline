

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

$hit=$this->db->query("select max(hits) as maxhit from analysis");
$results=$hit->result();
$date = date('Y-m-d '); 
$time = date('H:i:s');

foreach($results as $rows)
{
    $updatehits = $rows->maxhit;
    $updatehits+=1;
    
}

$storehits=$this->db->query("insert into analysis values ('$date','$time','$updatehits')");


?>            