<?php

//print_r($_POST);

$name= $_POST[name];
$emailid= $_POST[emailid];
$phone= $_POST[phone];
$ismec= $_POST[ismec];
$college= $_POST[college];
$classy= $_POST[classy];
$dept= $_POST[dept];


//**************************SQLInjection Check needs to be done here
//****************************Also check if any of these vlaues are not present. IF not present, redirect back to register.php




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
else
{
	//echo "worked";
} 


//**************************SQLInjection Check needs to be done here
//****************************Also check if any of these vlaues are not present. IF not present, redirect back to register.php

$name=stripslashes($name);
$name=mysqli_real_escape_string($conn,$name);

$emailid=stripslashes($emailid);
$emailid=mysqli_real_escape_string($conn,$emailid);

$phone=stripslashes($phone);
$phone=mysqli_real_escape_string($conn,$phone);

$ismec=stripslashes($ismec);
$ismec=mysqli_real_escape_string($conn,$ismec);

$college=stripslashes($college);
$college=mysqli_real_escape_string($conn,$college);

$classy=stripslashes($classy);
$classy=mysqli_real_escape_string($conn,$classy);

$dept=stripslashes($dept);
$dept=mysqli_real_escape_string($conn,$dept);






if ($ismec=="1") {
	# code...
	$college="Model Engineering College";
}

else
{
	$classy="Not Available";
}

if(strlen($name)<3||strlen(emailid)<5||strlen($phone)<10||strlen($ismec)<1||strlen($college)<=3||strlen($classy)<=3||strlen($dept)<=3){
	echo "NOPE";
} else {

$sql= "SELECT * FROM  `regUsers` where `emailid`='$email'";

$result = $conn->query($sql);
$num_rows = $result->num_rows;

if($num_rows>0){

	echo "YUP";

} else {

//$sql = "INSERT INTO 'regUsers' ('name', 'emailid', 'phone', 'college', 'class', 'dept') VALUES ('name', 'emailid', 'phone', 'ollege', 'clas//////??sy', 'dept')";

$sql= "INSERT INTO  `regUsers` (  `name` ,  `emailid` ,  `phone` ,  `college` ,  `class` ,  `dept` ) VALUES ('$name','$emailid','$phone','$college','$classy','$dept')";

if ($conn->query($sql) === TRUE) {
    echo "YUP";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

}


?>