
<!DOCTYPE html>
<html manifest="ted15.appcache">
	<head>
		<?php include "headers.php" ?>
		<title>TEDxMEC REGISTER</title>
		
	</head>
	<body>
	
		<?php include "navbar.php" ?>
			<div class="container" id="ted_register">
				<div class="row" id="register_det">
					<div class="col-md-12 ">
						<h3 class="imp text-center">UPDATING SOON</h3>
						<p class="text-center">we will notify you when registrations begins.<br />
						Do drop your email id below! </p>
				
						<div id="regpg_frm"class="center-block text-center">
							<div id="em_form">
								<label for="email">EMAIL</label>
								<input id="email"  placeholder="enter email id" autocomplete autofocus > 
								<button id="em_submit" type="button">Submit</button>

							</div>
						
						</div>
						<p id="alert_email" class="text-center "></p>
					</div>
				</div>
			</div>
		<?php include "footer.php" ?>
		<script type="text/javascript" src="js/tedx.js"></script>
		
	</body>
</html>