<div>
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Anaheim);

*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
	box-sizing: border-box;
}
*:before,
*:after{
	box-sizing: border-box;
}

h1{
	display: table;
	margin: 5% auto 0;
	text-transform: uppercase;
	font-family: 'Anaheim', sans-serif;
	font-size: 4em;
	font-weight: 400;
	text-shadow: 0 1px white, 0 2px black;
}
.container{
	margin: 4% auto;
	width: 210px;
	height: 140px;
	position: relative;
	perspective: 1000px;
}
#carousel{
	width: 100%;
	height: 100%;
	position: absolute;
	transform-style: preserve-3d;
	animation: rotation 20s infinite linear;
}
#carousel:hover{
	animation-play-state: paused;
}
#carousel figure{
	display: block;
	position: absolute;
	width: 186px;
	height: 116px;
	left: 10px;
	top: 10px;
	background: black;
	overflow: hidden;
	border: solid 5px black;
}
#carousel figure:nth-child(1){transform: rotateY(0deg) translateZ(288px);}
#carousel figure:nth-child(2) { transform: rotateY(40deg) translateZ(288px);}
#carousel figure:nth-child(3) { transform: rotateY(80deg) translateZ(288px);}
#carousel figure:nth-child(4) { transform: rotateY(120deg) translateZ(288px);}
#carousel figure:nth-child(5) { transform: rotateY(160deg) translateZ(288px);}
#carousel figure:nth-child(6) { transform: rotateY(200deg) translateZ(288px);}
#carousel figure:nth-child(7) { transform: rotateY(240deg) translateZ(288px);}
#carousel figure:nth-child(8) { transform: rotateY(280deg) translateZ(288px);}
#carousel figure:nth-child(9) { transform: rotateY(320deg) translateZ(288px);}

img{
	-webkit-filter: grayscale(1);
	cursor: pointer;
	transition: all .5s ease;
}
img:hover{
	-webkit-filter: grayscale(0);
  transform: scale(1.2,1.2);
}

@keyframes rotation{
	from{
		transform: rotateY(0deg);
	}
	to{
		transform: rotateY(360deg);
	}
}
    </style>

    
        <!--<script src="js/prefixfree.min.js"></script>-->
        <script src="<?php echo $this->cdn->res_url('resources/prefixfree.min.js')?>"></script>
    
    <h1>Gallery</h1>
  <div class="container">
		<div id="carousel">
			<figure>
                <img src="<?php echo $this->cdn->res_url('resources/abhipics/1.jpg') ?>" alt="first">
            </figure>
			<figure>
                <img src="<?php echo $this->cdn->res_url('resources/abhipics/2.jpg') ?>" alt="sec"> 
            </figure>
			<figure>
                <img src="<?php echo $this->cdn->res_url('resources/abhipics/3.jpg') ?>" alt="">
            </figure>
			<figure>
                <img src="<?php echo $this->cdn->res_url('resources/abhipics/4.jpg') ?>" alt="">
            </figure>
			<figure>
                <img src="<?php echo $this->cdn->res_url('resources/abhipics/5.jpg') ?>" alt="">
            </figure>
			<figure>
                <img src="<?php echo $this->cdn->res_url('resources/abhipics/6.jpg') ?>" alt="">
            </figure>
		</div>
	</div>
    
        <script src="<?php echo $this->cdn->res_url('resources/index.js')?>"></script>

</div>