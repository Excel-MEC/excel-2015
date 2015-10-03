
<!DOCTYPE html>
<html >
	<head>
		<?php include "headers.php" ?>
		<title>TEDxMEC GALLERY</title>
		
	</head>
	<body>
		<?php include "navbar.php" ?>
		<div id="overlay" class="overlay">
			<div class="over_icons close_h" id="close">
				<span class="fa fa-close"></span>
			</div>
			
			<img class="middle_abs" src="">

			<div class="over_icons middlev_abs lft_rt left_btp" id="l">
				<span class="fa fa-chevron-left"></span>
			</div>

			<div class="over_icons middlev_abs lft_rt right" id="r">
				<span class="fa fa-chevron-right"></span>
			</div>
		</div>
			<div id="carousal">
				<div id="carousel-example-generic" class="carousel slide img-responsive" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  
				  </ol>
				  <div class="carousel-inner">
				    <div class="item active">
					    <img src="images/gallery/4.jpg" class="img-responsive pull-left" >
					    <img src="images/gallery/2.jpg"  class="img-responsive pull-right">
				    </div>
				    <div class="item ">
					    <img src="images/gallery/3.jpg" class="img-responsive pull-left" >
					    <img src="images/gallery/6.jpg"  class="img-responsive pull-right">
				    </div>
				    <div class="item ">
					    <img src="images/gallery/7.jpg" class="img-responsive pull-left" >
					    <img src="images/gallery/8.jpg"  class="img-responsive pull-right">
				    </div>
				     
				  </div>
				  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				    <span class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				    <span class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>


			</div>


				<?php 
				$img_num = 12;	//total img num
				$each = $row =  4;	//numeber of imgs in each row
				$id="gal_det";	
				$md = intval(12/$each);
				$sm = intval(12/($each-2));

				$row_eh = $img_num/$each;
				$left = $img_num%$each;
				$n = $left>0?1:0;
				
				echo '<div class="container" id="gal_thumbs">';
					for ($i=1; $i <= intval($row_eh+$n); $i++) { 
							echo '<div class="row '.$id.'" >';

							if($i==(intval($row_eh+$n)))
							{
								if($left!=0)
								$each = $left;

							}
							
							for ($j=1; $j <= $each; $j++) { 
								echo '<div class="thumb col-md-'.$md.' col-sm-'.$sm.' col-xs-'.$sm.'">
									<div class="holder"><img class=" img-responsive" src="images/gallery/'.(($i-1)*$row+$j).'_t.jpg"></div>
								</div>';
							}
							echo '</div>';
							$id="gal_nxt";


					}

				echo '</div>';
	
				 ?>

				 <div class="container" id="gal_thumbs">
				 	<div class="row">
				 		<div class="col-md-12">
							<div id="you_vid">
								<div class="over_icons middlev_abs lvid" id="lvid">
									<span class="fa fa-chevron-left"></span>
								</div>

								<div class="over_icons middlev_abs rvid" id="rvid">
									<span class="fa fa-chevron-right"></span>
								</div>

								<div id="t_2014" class="talk">
									
									<iframe class="center-block" width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLsRNoUx8w3rNRPrOxeIaEpG4-54UItr49" frameborder="0" allowfullscreen></iframe>
									<h4  class="text-center" style="color:white" >2014</h4>
								</div>
								
								<div id="t_2012" class="talk">
									
									<iframe class="center-block" width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLsRNoUx8w3rMlSDpOTDzwMPvHUio2EJNQ" frameborder="0" allowfullscreen></iframe>
									<h4  class="text-center" style="color:white" >2012</h4>
								</div>
								<div id="t_2013" class="talk">
									
								    <iframe class="center-block" width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLsRNoUx8w3rOHFwJkbUb1ms4wdKOU9Ez0" frameborder="0" allowfullscreen></iframe>
								    <h4  class="text-center" style="color:white" >2013</h4>
								</div>  
								<div id="t_2009" class="talk">
									
								    <iframe class="center-block" width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL8AC4EF20E40394BA" frameborder="0" allowfullscreen></iframe>
								    <h4  class="text-center" style="color:white" >2009</h4>
								</div>
								<div id="t_2011" class="talk">
									
								    <iframe class="center-block" width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLAE93D4084A6CBD6F" frameborder="0" allowfullscreen></iframe>
								    <h4  class="text-center" style="color:white" >2011</h4>
								</div>

							
							</div>
						</div>
					</div>

				</div>
		<?php include "footer.php" ?>
		<script type="text/javascript" src="js/tedx.js"></script>
		
	</body>
</html>