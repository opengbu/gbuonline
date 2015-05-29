<?php require 'common/header.php';
?>
<link type="text/css" rel="stylesheet" href="input/jquery-te-1.4.0.css">
<script type="text/javascript" src="input/jquery-te-1.4.0.min.js" charset="utf-8"></script>
             <p></p>
<textarea name="textarea" class="jqte-test" hieght="10000">

</textarea>


             
<script>
	$('.jqte-test').jqte();
	
	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
		jqteStatus = jqteStatus ? false : true;
		$('.jqte-test').jqte({"status" : jqteStatus})
	});
</script>

    <?php require 'common/footer.php';
?>