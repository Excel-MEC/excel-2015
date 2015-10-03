<?php



$email = $_POST['email'];



$servername = "localhost";
$username = "inexcel_webadmin";
$password = "2015webManagerDude";
$dbname = "inexcel_excel2015_reg";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	echo "failed";
    die("Connection failed: " . $conn->connect_error);
}



$sql= "SELECT * FROM  `regUsers` where `emailid`='$email'";

$result = mysqli_query( $conn, $sql);
$num_rows = mysqli_num_rows($result);

if($num_rows>0){

	echo "YEP";

} else {

	echo "NOPE";
}

?>