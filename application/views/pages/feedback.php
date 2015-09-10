<?php
$this->load->library('form_validation');
?>

<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >    


    <div class="row">

        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">        
		
          <div class="container">
<div class="row">
  
  <form role="form" action="<?php echo site_url('feat/save_feedback'); ?>" method="POST" >
    <div class="col-lg-6">
      <div class="form-group">
        <label for="InputName">Your Name</label>
        <div class="input-group">
          <input type="text" value="<?php echo set_value('name'); ?>" class="form-control" name="name" id="InputName" placeholder="Enter Name" required>
          <span class="input-group-addon"></span></div>
      </div>
      <div class="form-group">
        <label for="InputEmail">Your Email</label>
        <div class="input-group">
          <input type="email" value="<?php echo set_value('email'); ?>" class="form-control" id="InputEmail" name="email" placeholder="Enter Email" required  >
          <span class="input-group-addon"></span></div>
      </div>
	  <div class="form-group">
        <label for="InputMessage">Subject</label>
        <div class="input-group">
		<input type="text" value="<?php echo set_value('subject'); ?>" class="form-control" name="subject" id="InputName" placeholder="Enter Subject" required>
          <span class="input-group-addon"></span></div>
      </div>
	  <div class="form-group">
        <label for="InputMessage">Category</label>
        <div class="input-group">
		<select name="category">
		<option value="abuse"  <?php echo set_select('cat', 'abuse'); ?>>Abuse</option>
		<option value="bug"   <?php echo set_select('cat', 'bug');?> >Bug Report</option>
		<option value="feed" <?php echo set_select('cat', 'feed');?> >Feedback</option>
		<option value="gen" <?php echo set_select('cat', 'gen');?> >General</option>
		<option value="other" <?php echo set_select('cat', 'other');?> >Other</option>
		</select>
          <span class=""></span></div>
      </div>
      <div class="form-group">
        <label for="InputMessage">Message</label>
        <div class="input-group">
		<textarea name="message" value="<?php echo set_value('message'); ?>"  id="InputMessage" class="form-control" rows="5" placeholder="Enter Message" required></textarea>
          <span class="input-group-addon"></span></div>
      </div>
	  <br>
      <div  style="margin-left:px;" >
     <input style="width:100px;" type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">
	  </div>
    </div>
  </form>
  <hr class="featurette-divider hidden-lg">
  <div class="col-lg-5 col-md-push-1">
    
  </div>
</div>

</div>

        </div> 
<?php
echo $this->session->flashdata('fb_msg');
?>