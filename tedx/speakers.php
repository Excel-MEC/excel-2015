<?php echo '<!DOCTYPE html>
<html >
	<head>';
		 include "headers.php";
		echo '<title>TEDxMEC SPEAKERS</title>
		
	</head>
	<body>';
		include "navbar.php";
	
			echo '<div class="container" id="ted_speakers">';
			$year = 2015; //latest year
			$dum=$year;
			$numb = array(30); //number of speakers in each year
			$ch = array();
			echo '<div class="row row_speakers" >';
			echo '<h3 class="year imp" >PREVIOUS SPEAKERS</h3>';//temporary
			foreach ($numb as $n) {
				
					if($year<$dum)
					{
						echo '<div class="row row_speakers" >';
					}
					if($year==($dum-1))
					{
						//echo '<h3 class="year" style="">PREVIOUS SPEAKERS</h3>';

					}


					if($n%3==0)
					{
						
						$len = $n/3;
						for ($i=$len;$i>=0;$i--) { 
							$ch[$i]=3;
						}
						
					}
					elseif ($n%3==1) 
					{
						$len = $n/3;
						
						for ($i=$len;$i>=0;$i--) { 
							if($i==$len || ($i==$len-1))
								$ch[$i]=2;
							else
								$ch[$i]=3;
						}
					}
					else
					{
						$len = $n/3;
						
						for ($i=$len;$i>=0;$i--) { 
							if($i==$len)
								$ch[$i]=2;
							else
								$ch[$i]=3;
						}
					}

					$md = 4;
					if(($ch[0])==2)
					{
						$md=6;
					}
				for ($i=1,$x=0,$prev=0; $i<=$n; $i++)
				{ 
					
						echo '<div class="col-md-'.$md.' col-sm-6 circle_cont">
						<div  class="middle_abs encloser">
							<p  class="text-center name middleh_abs"></p>
							<p  class="text-center det middleh_abs" style="display:none;"></p>
						</div>
						<div class="circle middle_abscircle" style="border:2px solid red;">
							<img class="img-responsive middleh middlev"  src="">
						</div>
						</div>';
						
				}
				$year--;
			}


			echo '</div></div>';//closed container and row_speakers
		include "footer.php";
		echo '<script type="text/javascript" src="js/tedx.js"></script>
		
	</body>
</html>';