<?php
	$emid = $_POST["name"];
	$emid = strtolower($emid);

	if(filter_var($emid,FILTER_VALIDATE_EMAIL))
	{
		$file = "emails_2015.txt";
		
		  file_put_contents($file,$emid." <br> ",FILE_APPEND|LOCK_EX);
	
		echo "got";
	}
	else
	{
		echo "nope";
	}
	
?>