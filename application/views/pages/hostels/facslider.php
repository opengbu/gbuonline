<!--<div class="row">
<div class="slider">
     <img src="<?php echo base_url('resources/h_images/h2.jpg')?>" height="500"/>
     <img src="<?php echo base_url('resources/h_images/h3.jpg')?>" height="500"/>
	 <img src="<?php echo base_url('resources/h_images/h4.jpg')?>" height="500"/>
	 <img src="<?php echo base_url('resources/h_images/h1.jpg')?>" height="500"/>
                                 
 </div>    
</div>-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo $this->cdn->res_url('resources/h_images/h2.jpg')?>" alt="..." style="width:1200px;height:500px;">

    </div>
    <div class="item">
      <img src="<?php echo $this->cdn->res_url('resources/h_images/h3.jpg')?>" alt="..." style="width:1200px;height:500px;">

    </div>
       <div class="item">
      <img src="<?php echo $this->cdn->res_url('resources/h_images/h4.jpg')?>" alt="..." style="width:1200px;height:500px;">

    </div>
     <div class="item">
      <img src="<?php echo $this->cdn->res_url('resources/h_images/h1.jpg')?>" alt="..." style="width:1200px;height:500px;">

    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 