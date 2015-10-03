<!DOCTYPE html>
<html>
<head>
	<?php include "headers.php" ?>
	<title>TEDxMEC HOME</title>
</head>
<body>
<div id="page-cont">

	<div id="pages" data-0="transform:translate(0%,0%)" data-150p="transform:translate(-50%,0%)" data-200p=""   data-300p="transform:translate(-50%,-50%)"  data-350p=""   data-450p="transform:translate(0%,-50%)">




	<nav class="navbar navbar-inverse" role="navigation" id="navbar_cont" style="width:50%;padding:0.6%;" data-0p="top:0%;left:0%;" data-120p="top:0%;left:80%;" data-150p="top:0%;left:50%;" data-200p="top:0%;left:50%" data-250p="top:80%;left:50%" data-300p="top:50%;left:50%"data-350p="top:50%;left:50%" data-400p="top:50%;left:35%" data-450p="top:50%;left:0%">
	
	        <div class="navbar-header">
				<button type="button" id="nav_but" class="navbar-toggle " data-toggle="collapse" data-target="#navbar-main">
				    <span class="sr-only">Toggle navigation</span>
				    <span id="ib1" class="icon-bar"></span>
				    <span id="ib2" class="icon-bar"></span>
				    <span id="ib3" class="icon-bar"></span>
				 </button>
		    </div>
	                   

	        <div class="collapse navbar-collapse " id="navbar-main">
	            <ul class="nav  nav-justified" id= "nav-parent" style="position:relative" >


					<li ><a href="ted.php" target="_self"  id="home">HOME</a>
					</li>
					<li><a href="about.php" target="_self"  id="about"> ABOUT</a>
					</li>
					<li><a href="speakers.php" target="_self"  id="speakers">SPEAKERS</a>
					</li>
					<li><a href="venue.php" target="_self"  id="venue">VENUE</a>
					</li>
					<li><a href="gallery.php" target="_self"  id="gallery">GALLERY</a>
					</li>
					<li><a href="teen_speaker.php" target="_self"  id="teen_speaker">TEEN SPEAKER</a>
					</li>
					<li><a href="register.php" target="_self"  id="register">REGISTER</a>
					</li>
					<li><a href="contact.php" target="_self"  id="contact">CONTACT</a>
					</li>
					<li><a href="http://www.ted.com/tedx"   target="_blank"  id="ted" style="">TED<sup>x</sup></a>
					</li>

					

					
				</ul>
			</div>
	</nav>		

		<!--<div style="width:42%;position:absolute;padding-left:5%;top:-3%" data-0p="top:-3%;left:0%;" data-5p="top:-1%;left:2%" data-120p="top:-1%;left:50%;" data-150p="left:40%;">
				<img  src="eins/rope.png" style="position:relative;z-index:60000;"  class="img-responsive">
		</div>-->

		<!--<div id="einstein" style="width:20%;position:absolute;top:27%;padding-left:6%;" data-0p="left:0%;" data-120p="left:50%;" data-150p="left:40%;">

			<img  src="images/eins/leg.png" style="position:relative;z-index:50000;" data-0p="transform:rotate(0deg)" data-5p="transform:rotate(3deg)" class="img-responsive">

			<img  id="ein_hand"   src="images/eins/hand.png" data-0p="transform:translateY(-100%) rotate(0deg)" data-5p="transform:translateY(-100%) rotate(20deg)" style="z-index:50000;position:relative;" class="img-responsive">

			<img  id="ein_body" src="images/eins/body.png" data-0p="transform:translateY(-200%) rotate(0deg)" data-5p="transform:translateY(-200%) rotate(5deg)" style="z-index:50000;position:relative;" class="img-responsive">

			<img id="ein_head" src="images/eins/head.png" data-0p="transform:translateY(-300%) rotate(0deg)" data-5p="transform:translateY(-297%) rotate(45deg)" style="z-index:70000;position:relative;" class="img-responsive">

			<img id="ein_eye" src="images/eins/eyes.png"  data-0p="transform:translateY(-400%) rotate(0deg)" data-5p="transform:translateY(-398%) rotate(48deg)" style="z-index:80000;position:relative;" class="img-responsive">

		</div>
		-->



		<div id="page1" style="position:absolute;z-index:0"class="page" data-0p="transform:translate(0%,0%)" data-150p="transform:translate(30%,0%)">
			<div id="overlaym" class="overlay">
			</div>
			
			
			<div class="container" style="z-index:1000;position:relative;top:50%;transform:translateY(-50%);opacity:1">
				<div class="row">
					<div style="width:40%;" class="center-block">
							<img src="images/logo.png" class="img-responsive">
					</div>
				</div>
			</div>
				
		</div>

		<div id="page2" style="position:absolute;z-index:1000" class="page" data-200p="transform:translate(100%,0%)" data-300p="transform:translate(100%,30%)">
			
		</div>

		<div id="page3" style="position:absolute;z-index:2000" class="page" data-350p="transform:translate(100%,100%)" data-450p="transform:translate(30%,100%)">
			
		</div>

		<div id="page4" style="position:absolute;z-index:3000" class="page" >
		
			<div  class="container" id="cont_4" style="position:relative;padding:5%;overflow-y:auto;">
				<div class="row" id="tedxpg4">
					<div class="col-md-12 " style="text-align:justify">
						
						<p><h5 class="imp">TED<sup>x</sup></h5></p>
						<p>In the spirit of ideas worth spreading, TED has created a program called TED<sup>x</sup>. TED<sup>x</sup> is a program of local, self-organized events that bring people together to share a TED-like experience. Our event is called TED<sup>x</sup>MEC, where x = independently organized TED event. At our TED<sup>x</sup>MEC event, TEDTalks video and live speakers will combine to spark deep discussion and connection in a small group. The TED Conference provides general guidance for the TED<sup>x</sup> program, but individual TED<sup>x</sup> events, including ours, are self-organized.</p>
					</div>
					
				</div>
			</div>

			<?php include "footer.php" ?>

		</div>
	</div>
</div>

<div id="helper">
	<div class="marker"></div>
	<div class="marker"></div>
	<div class="marker"></div>
	<div class="marker"></div>
</div>

<script  type="text/javascript" src="js/skrollr.min.js"></script>
<script type="text/javascript" src="js/tedx.js"></script>
</body>
</html>




