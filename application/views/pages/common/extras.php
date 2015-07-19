<style>
    #h {
        background-color: pink;
    }
    #t {
        color: black;
    }
    #getFixed
    {

    }
</style>


<script>
    jQuery(function ($) {
        function fixDiv() {
            var $cache = $('#getFixed');
            var $height = $(window).scrollTop();
            var $h_of_footer = $("#getFooterLen").outerHeight();
            var $h_of_extras = $("#getFixed").outerHeight();
            var $h_of_window = $(document).height();
            var $p_width = $(document).width();
            var $sum = $height + $h_of_extras + $h_of_footer + 150;
            if ($(this).scrollTop() >= 100 && $sum<$h_of_window && $p_width >978)
                $cache.css({
                    'top': $height - 100
                });
            else if ($(this).scrollTop() >= 100 )
                ;
            else
                $cache.css({
                    'top': 'auto'
                });


        }
        $(window).scroll(fixDiv);
        fixDiv();
    });
</script>


<div class="col-md-3 stic" id="getFixed" style="padding-left:30px; ">



    <div class="divr"  style="  background-color:purple; padding-top:10px; padding-bottom:10px; border-radius: 7px;">



        <font size="5" color="white"><center>Extras</center></font>   
    </div>
    <br>


    <!--code for extras begins-->

    <?php // require '/../master_extras.php';?>
    <?php $this->load->view('pages/master_extras'); ?>
    <!--code for extras ends-->



</div>

</div>

</div> 	






