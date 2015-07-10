
				<script>
					
					var xmlhttp;
					function loadXMLDoc(url,cfunc)
					{
						if (window.XMLHttpRequest)
						{// code for IE7+, Firefox, Chrome, Opera, Safari
							xmlhttp=new XMLHttpRequest();
						}
						else
						{// code for IE6, IE5
							xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=cfunc;
						xmlhttp.open("GET",url,true);
						xmlhttp.send();
					}
					
					function writeBlogs()
					{
						loadXMLDoc("<?php echo site_url('blogs/write_blogs') ?>",function()
						{
							if (xmlhttp.readyState==4 && xmlhttp.status==200)
							{
								document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
							}	
						});
					}
					
					function recentBlogs()
					{
						loadXMLDoc("<?php echo site_url('blogs/recent_blogs') ?>",function()
						{
							if (xmlhttp.readyState==4 && xmlhttp.status==200)
							{
								document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
							}	
						});
					}
					
					function bestBlogs()
					{
						loadXMLDoc("<?php echo site_url('blogs/best_blogs') ?>",function()
						{
							if (xmlhttp.readyState==4 && xmlhttp.status==200)
							{
								document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
							}	
						});
					}
					
					window.onload=recentBlogs;
					
				</script>
				
				
			
			<!--AJAX BEGINS-->
			
				<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
				<div class="row">
				<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;" id="myDiv">
				<!--pages come here-->
				</div >
				
		
		
			<!--AJAX ENDS-->
			
			
			
