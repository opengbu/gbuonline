<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" href="<?php echo base_url('resources/images/favicon.ico') ?>">
        <script src="<?php echo base_url('resources/jquery-2.1.4.min.js') ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('resources/css/bootstrap.min.css') ?>">
        <script src="<?php echo base_url('resources/js/bootstrap.js') ?>"></script>
        <script src="<?php echo base_url('resources/sss/sss.min.js') ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('resources/sss/sss.css') ?>" type="text/css" media="all">
        <script>
            jQuery(function ($) {
                $('.slider').sss();
            });
            $(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                            $(this).toggleClass('open');
                            $('b', this).toggleClass("caret caret-up");
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                            $(this).toggleClass('open');
                            $('b', this).toggleClass("caret caret-up");
                        });
            });
            
            
            
             $(document).ready(function() {     //When checkboxes/radios checked/unchecked, toggle background color     
                $('.form-group').on('click','input[type=radio]',function() {    
                    $(this).closest('.form-group').find('.radio-inline, .radio').removeClass('checked'); 
                    $(this).closest('.radio-inline, .radio').addClass('checked');  
                });   
                 $('.form-group').on('click','input[type=checkbox]',function() {    
                     $(this).closest('.checkbox-inline, .checkbox').toggleClass('checked');   
                 }); 
                 //Show additional info text box when relevant checkbox checked     
                 
                $('.additional-info-wrap input[type=checkbox]').click(function() {     
                    if($(this).is(':checked')) {       
                        $(this).closest('.additional-info-wrap').find('.additional-info').removeClass('hide').find('input,select').removeAttr('disabled');      
                    }     
                    else {  
                        $(this).closest('.additional-info-wrap').find('.additional-info').addClass('hide').find('input,select').val('').attr('disabled','disabled');      
                    }     });    
                //Show additional info text box when relevant radio checked    
                $('input[type=radio]').click(function() { 
                    $(this).closest('.form-group').find('.additional-info-wrap .additional-info').addClass('hide').find('input,select').val('').attr('disabled','disabled');      
                    if($(this).closest('.additional-info-wrap').length > 0) {    
                        $(this).closest('.additional-info-wrap').find('.additional-info').removeClass('hide').find('input,select').removeAttr('disabled');    
                    }            
                }); });

				//footer issue 2 begins
				var count_comments = false;
				//footer issue 2 ends
				
        </script>
        <style>
            .caret-up {
                width: 0; 
                height: 0; 
                border-left: 4px solid rgba(0, 0, 0, 0);
                border-right: 4px solid rgba(0, 0, 0, 0);
                border-bottom: 4px solid;

                display: inline-block;
                margin-left: 2px;
                vertical-align: middle;
            }
            body { padding-top: 25px; }

            .divr {
                -webkit-animation: myfirst 5s; /* Chrome, Safari, Opera */
                animation: myfirst 5s;
            }


            @keyframes myfirst {
                from {background: pink;}
                to {background: purple;}
            }
			
			.footer-problem {
				min-height:100%; 
				position:relative;
            }

            
            label.radio-inline, label.checkbox-inline {   background-color: #dcdfd4;   cursor: pointer;   font-weight: 400;   margin-bottom: 10px !important;   margin-right: 2%;   margin-left:0;   padding: 10px 10px 10px 30px; } label.radio-inline.checked, label.checkbox-inline.checked {   background-color: #266c8e;   color: #fff !important;   text-shadow: 1px 1px 2px #000 !important; } .checkbox-inline + .checkbox-inline, .radio-inline + .radio-inline {   margin-left: 0; } .columns label.radio-inline, .columns label.checkbox-inline {   min-width: 190px;   vertical-align: top;   width: 30%; } .additional-info-wrap {   display: inline-block;   margin: 0 2% 0 0;   min-width: 190px;   position: relative;   vertical-align: top;   width: 30%; } .additional-info-wrap label.checkbox-inline, .additional-info-wrap label.radio-inline {   width: 100% !important; } .additional-info-wrap .additional-info {   background-color: #266c8e;   clear: both;   color: #fff !important;   margin-top: -10px;   padding: 0 10px 10px;   text-shadow: 1px 1px 2px #000 !important;   width: 100%; }
        </style>

    </head>
    <body background="<?php echo base_url('resources/images/home1.jpg') ?>" style="background-attachment: fixed; background-repeat: padding-bottom: 420px; repeat; height:100%;">
        <div class="container-fluid footer-problem"><!--this div ends in footer.php-->





