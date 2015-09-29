  
  <div id="img" style="overflow:hidden;">
	<img id="bg" src="<?php echo $this->cdn->res_url('resources/h_images/back3.jpg')?>" style="height:100%;width:100%;" alt="blurred_vission" />
		
		<div id="info" style="position:absolute;top:260px;padding:30px;width:100%;text-align:center;background:transparent !important" class="jumbotron">
		
			<center> 
			<font style="font-family:Verdana, Geneva, sans-serif">
			
				<!--<h2><b>Enter Your Login Details</b></h2><br/>
          
				<p>
					Registration Number : <input type="text" name="name" />
				</p>
            
				<p>
					Password            : <input type="text" name="pass" />
				</p>
			
			<p>
				Hostel :
				<input List="hostel" name="hostel">
					<datalist id="hostel">
						
						<option value="Tulsidas Hostel">
						<option value="Tulsighaas Hostel">
						<option value="Sant Rahim Das Hostel">
						<option value="Sant Kabir Das Hostel">
						<option value="Aryabhatta Hostel">
						<option value="BirsaMunda Hostel">
						<option value="Rani LaxmiBai Girls Hostel">
						<option value="Savitri Bai Phule Girls Hostel">
						
					</datalist>
					
			</p>-->
			
			<h2><b>Enter Your Login Details</b></h2><br/>
			<fieldset>
				<table>
					<tr>
						<td>
							<label class="label" for="regnum" style="margin-top:5px;margin-bottom:5px;padding-top:5px;padding-bottom:5px;"/>
							<font style="font-family:Verdana, Geneva, sans-serif;font-size:15px;" color="#181818" >
								Registration Number:
							</font>
						</td>
						<td>
							<input type="text" name="regnum" style="width: 450;margin-left: 170px;font-size: 15px;margin-top:5px;margin-bottom:5px;padding-top:5px;padding-bottom:5px;"/>
						</td>
					</tr>
				
					<tr>
						<td>
							<label class="label" for="pass" style="margin-top:5px;margin-bottom:5px;padding-top:5px;padding-bottom:5px;"/>
							<font style="font-family:Verdana, Geneva, sans-serif;font-size:15px;" color="#181818" >
								Password:
							</font>
						</td>
						<td>
							<input type="password" name="pass" style="width: 450;margin-left: 170px;font-size: 15px;margin-top:5px;margin-bottom:5px;padding-top:5px;padding-bottom:5px;"/>
						</td>
					</tr>
					<tr>
						<td>
							<label class="label" for="host" style="margin-top:5px;margin-bottom:5px;padding-top:5px;padding-bottom:5px;"/>
							<font style="font-family:Verdana, Geneva, sans-serif;font-size:15px;" color="#181818" >
								Hostel:
							</font>
						</td>
						<td>
						
							<input List="hostel" name="hostel" style="width: 450;margin-left: 170px;font-size: 15px;margin-top:5px;margin-bottom:5px;padding-top:5px;padding-bottom:5px;"/>
							
							<datalist id="hostel">
								<option value="Tulsidas Hostel">
								<option value="Tulsighaas Hostel">
								<option value="Sant Rahim Das Hostel">
								<option value="Sant Kabir Das Hostel">
								<option value="Aryabhatta Hostel">
								<option value="BirsaMunda Hostel">
								<option value="Rani LaxmiBai Girls Hostel">
								<option value="Savitri Bai Phule Girls Hostel">					
							</datalist>
							
						</td>
					</tr>
					<tr>
						<td><br/>
						<!--	<input type="submit" value="Login" style="width:130px; margin-left: 100px;font-size: 15px;margin-top:5px;" />-->
						<div class="btn-group" role="group" aria-label="...">
							<a href="<?php echo site_url('hostels/specific')?>">
								<button type="button" class="btn btn-default" style="width:130px; margin-left: 100px;font-size: 15px;margin-top:5px;" >
									Login
								</button>
							</a>
						</div>
						</td>
					</tr>
					
				</table>
			</fieldset>

			
			
			
			</font>
			</center>
			
		<!--	<p><input type="submit" value="Login" /></p>-->
		</div>
</div>
