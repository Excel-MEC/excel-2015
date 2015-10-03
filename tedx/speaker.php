<?php echo '<!DOCTYPE html>
<html manifest="ted15.appcache">
	<head>';
		 include "headers.php";
		echo '<title>TEDxMEC SPEAKERS</title>
		
	</head>
	<body>';
		 include "navbar.php";

			echo '<div class="container" id="speaker_det">
				<div class="row row_speaker_det">
					<div class="col-md-8 middleh_abs">
						<div class="circle middleh">';
							
							$fn = $_POST["name"];
							$i = preg_split("/[\ ]+/",$fn);
							$sn = strtolower($i[0]);
							echo '<img class="img-responsive middleh middlev" style="border-radius:50%;" src="images/speakers/'.$sn.'.jpg">';
							
							 

						
						 echo '</div><h4 id="name" class="text-center imp" style="font-weight:300;">'.$fn.'</h4>';
						
						echo '<p class="details"></p>
					</div>
					
				</div>
				
			</div>';
		 include "footer.php"; 
		echo '<script type="text/javascript" src="js/tedx.js"></script>
		
	</body>
</html>'; 

?>