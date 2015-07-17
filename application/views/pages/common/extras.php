<script>
$(window).scroll(function(){
  var sticky = $('.stic'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixd');

  else sticky.removeClass('fixd');
});
</script>

<style>
.fixd {
    position: fixed;
    top:70; left:999;
	width: 325;
     }
#h {
	background-color: pink;
}
#t {
	color: black;
  }
</style>



<div class="col-md-3 stic" style="padding-left:30px; ">


    
       <div class="divr" style="  background-color:purple; padding-top:10px; padding-bottom:10px; border-radius: 7px;">


	   
               <font size="5" color="white"><center>Extras</center></font>   
           </div>
        <br>


		<!--code for extras begins-->
		
		<?php require '/../master_extras.php';?>
		
		<!--code for extras ends-->

       
        
    </div>

</div>

</div> 	
    

    
    
    
    
