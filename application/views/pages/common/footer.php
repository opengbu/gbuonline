	</div> <!--for container fluid opened in link.php-->

    <style>

        footer {
            margin: 0px;
            padding-left: 270px; 
            width : 100%;
			position: absolute; 
			z-index: 100; 
			background-color: black;
			height: 200px; <!--to solve footer issue--><!--if you edit this, then also edit 'padding-bottom' in body tag, with the same amount-->
        }
    </style>


    <footer class="footer container-fluid"  role="contentinfo">
        <br>

        <div class="wrapper" id="getFooterLen">

            <div class="row" >
			
                <div class="col-md-2 col-md-offset-1">
						

						<a type="button" class="btn btn-block" data-toggle="modal" data-target=".bs-example-modal-lg-1"><font color = "white"><b>Team</b></font></a>
						
                    <div class="modal fade bs-example-modal-lg-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <center> 
                                    <hr>
                                    We are a group of 6 students working under guidance of <br><b>Dr. Amit K. Awasthi.</b> <hr>
                                </center>
                                <center>     
                                    <ul>
                                        <i>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <img src="<?php echo base_url('resources/images/varun.jpg') ?>" height ="120" width="120"><br><b>VARUN GARG </b>(Admin/User Panel)
                                                </div>
                                                <div class="col-sm-4">
                                                    <img src="<?php echo base_url('resources/images/shobhit.jpg') ?>" height ="120" width="120"><br><b>SHOBHIT SHARMA</b> (Hostel Management System)
                                                </div>

                                                <div class="col-sm-4">
                                                    <img src="<?php echo base_url('resources/images/bhawesh.jpg') ?>" height ="120" width="120"><br><b>BHAWESH CHANDOLA</b> (Front End Database Connectivity)

                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <img src="<?php echo base_url('resources/images/sarthak.jpg') ?>" height ="120" width="120"><br><b>SARTHAK GARG</b> (Front End Designer)<br>
                                                </div>
                                                <div class="col-sm-4">
                                                    <img src="<?php echo base_url('resources/images/rajat.jpg') ?>" height ="120" width="120"><br><b>RAJAT SAXENA</b> (Front End Designer)<br>
                                                </div>
                                                <div class="col-sm-4">
                                                    <img src="<?php echo base_url('resources/images/shrey.jpg') ?>" height ="120" width="120"><br><b>SHREY KAPOOR</b> (Site Ambassador/Marketting Head)<br>
                                                </div>
                                            </div>


                                        </i>      

                                    </ul>
                                    <hr>
                                </center>
                            </div>
                        </div>
                    </div>

                    
                    
                    <a type="button" class="btn btn-block" data-toggle="modal" data-target=".bs-example-modal-lg-2"><font color = "white"><b>Vision</b></font></a>

                    <div class="modal fade bs-example-modal-lg-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <center> 
                                    <hr/>
                                    &nbsp;GBU Online is built with the vision
                                    of helping students and teachers to get all information about the university on a 
                                    single platform. Now there's no need to rush over the whole  511 acre campus for any information. All you need is an internet connection
                                    and everything is at your device's screen. Be it exam papers, information regarding any event or your hostel/mess related activities, GBU Online is Packed with everything.
                                    <hr/>
                                </center>

                            </div>
                        </div>
                    </div>
				<a type="button" class="btn btn-block" data-toggle="modal" data-target=".bs-example-modal-lg-5"><font color = "white"><b>Connect With Us</b></font></a>

                    <div class="modal fade bs-example-modal-lg-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <center>
                                    <h2>Team : kNight_Coders</h2>
                                </center>
								<div class="media">
                                    <div class="media-left">

                                        <img class="media-object" src="<?php echo base_url('resources/images/amitsir.jpg') ?>" height="90" width="90">

                                    </div>
											<div class="media-body">
                                        <h4 class="media-heading">Amit K. Awasthi</h4>
                                        <h6>LinkedIn Profile: <a href = "https://in.linkedin.com/in/amitkawasthi">https://in.linkedin.com/in/amitkawasthi</a></h6>
                                        <h6>Email: amitkawasthi@gbu.ac.in</h6>
                                        <h6>Phone No: +919650366665</h6>

                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">

                                        <img class="media-object" src="<?php echo base_url('resources/images/varun.jpg') ?>" height="90" width="90">

                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Varun Garg</h4>
                                        <h6>Stack Overflow Profile: <a href = "https://careers.stackoverflow.com/varun-garg">https://careers.stackoverflow.com/varun-garg</a></h6>
                                        <h6>Email: varun.10@live.com</h6>
                                        <h6>Phone No: +919868176400</h6>

                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-left media-middle">

                                        <img class="media-object" src="<?php echo base_url('resources/images/rajat.jpg') ?>" height="90" width="90">

                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Rajat Saxena</h4>
                                        <h6>LinkedIn Profile: <a href="https://in.linkedin.com/in/rajat24">https://in.linkedin.com/in/rajat24</a></h6>
                                        <h6>Email: rajat.saxena035@gmail.com</h6>
                                        <h6>Phone No: +919013211136</h6>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle">

                                        <img class="media-object" src="<?php echo base_url('resources/images/sarthak.jpg') ?>" height="90" width="90">

                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Sarthak Garg</h4>
                                        <h6>LinkedIn Profile: <a href="https://in.linkedin.com/in/gargsarthak">https://in.linkedin.com/in/gargsarthak</a></h6>
                                        <h6>Email: garg_sarthak@yahoo.com</h6>
                                        <h6>Phone No: +919999981051</h6>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle">

                                        <img class="media-object" src="<?php echo base_url('resources/images/shobhit.jpg') ?>" height="90" width="90">

                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Shobhit Sharma</h4>
                                        <h6>LinkedIn Profile: <a href="https://in.linkedin.com/pub/shobhit-sharma/7b/776/467">https://in.linkedin.com/pub/shobhit-sharma/7b/776/467</a></h6>
                                        <h6>Email: shobhit95sharma@gmail.com</h6>
                                        <h6>Phone No: +919953282606</h6>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle">

                                        <img class="media-object" src="<?php echo base_url('resources/images/bhawesh.jpg') ?>" height="90" width="90">

                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Bhawesh Chandola</h4>
                                        <h6>LinkedIn Profile: <a href = "https://in.linkedin.com/pub/bhawesh-chandola/7b/894/bba">https://in.linkedin.com/pub/bhawesh-chandola/7b/894/bba</a></h6>
                                        <h6>Email: bhawesh.chandola@gmail.com</h6>
                                        <h6>Phone No: +918860132317</h6>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
             <a type="button" class="btn btn-block" onclick="location.href='<?php echo site_url('feat/opportunities')?>'"><font color = "white"><b>Opportunities</b></font></a>
                
            </div>
			<div class = "col-md-1">
			</div>
			<!--<div class="col-md-3">
			<h4><b><font color = "white">GOOGLE GROUPS</font></b></h4>
			
											<li><a href="https://groups.google.com/forum/#!forum/ict_softb" ><font color="black"><b>Computer Science 2011-16</b></font></a></li>
                                        &nbsp;  <li><a href="https://groups.google.com/forum/#!forum/gbucs2012" ><font color="black"><b>Computer Science 2012-17</b></font></a></li>
                                        &nbsp;  <li><a href="https://groups.google.com/forum/#!forum/gbu-cs-102-2013" ><font color="black"><b>Computer Science 2013-18</b></font></a></li>
                                        &nbsp;  <li><a href="https://groups.google.com/forum/#!forum/gbuec2013" ><font color="black"><b>Electronics 2013-18</b></font></a></li>
                                        &nbsp;  <li><a href="https://groups.google.com/forum/#!forum/gbu-cs-2014" ><font color="black"><b>Computer Science 2014-19</b></font></a></li>
                                        &nbsp;  <li><a href="https://groups.google.com/forum/#!forum/gbu-ec-2014-19" ><font color="black"><b>Electronics 2014-19</b></font></a></li>
                                        &nbsp;  <li><a href="https://groups.google.com/forum/#!forum/civil-2014-gbu" ><font color="black"><b>Civil 2014-19</b></font></a></li>
                                        &nbsp;  <li><a href="https://groups.google.com/forum/#!forum/gbu-mba-2014" ><font color="black"><b>MBA 2014</b></font></a></li>
</div>
-->
<div class = "col-md-3">
<a href = "http://math.gbuonline.in"><font color = "white"><b>Maths Site</b></font></a><br><br>
<a href = "http://gbu.ac.in"><font color = "white"><b>Official Website</b></font></a><br><br>
<a href = ""><font color = "white"><b>Google Groups</b></font></a><br><br>
<a href = "http://www.google.com/+GAUTAMBUDDHAUNIVERSITYGREATERNOIDA"><font color = "white"><b>Gbu.code</b></font></a>
</div>
        
        
        
		<div class = "col-md-3">
		<a href = "http://math.gbuonline.in"><font color = "white"><b>Terms of use</b></font></a><br><br>
<a href = "http://gbu.ac.in"><font color = "white"><b>Development</b></font></a><br><br>
<a href = "" ><font color = "white"><b>Feedback</b></font></a><br><br>
<a href = ""><font color = "white"><b>Advertise</b></font></a>
		
		
		
		
		
		</div>
		<div class = "col-md-10"></div>
		<div class = "col-md-2">
		<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
</div>
<!-- AddToAny END -->
		</div>
		</div>
<div class="row" style = "padding-bottom:5px;">
            <div class="col-md-12 text-center">
                <br>
                    <b>&copy; kNight_Coders, Inc.</b>
                <br/>

            </div>

       </div>
        

    </footer>


<!--disqus code for counting comments begins-->
<script type="text/javascript">
        
        
	if(count_comments==true)
	{
		/* * * CONFIGURATION VARIABLES * * */
		var disqus_shortname = 'gbuonline';
	//	var disqus_identifier = 'blog_7';
	
		/* * * DON'T EDIT BELOW THIS LINE * * */
		(function () {
			var s = document.createElement('script'); s.async = true;
			s.type = 'text/javascript';
			s.src = '//' + disqus_shortname + '.disqus.com/count.js';
			(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
		}());
	}
</script>
<!--disqus code for counting comments ends-->
	
	
</body>
</html>
