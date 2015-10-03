//pass email via ajax 
//check if in DB

var emailid="";


function checkregistered (emailid) {
	// body...
$.post( "checkDBforReg.php", { email: emailid},function (resp) {
	// body...
	
	console.log(resp);

	if (resp=="YEP")//not there in DB
	 {
	 	window.location.replace("profile.php");
	 }
} );
}
