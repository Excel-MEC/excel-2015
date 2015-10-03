//pass email via ajax 
//check if in DB

var emailid="";


function checkregistered (emailid) {
	// body...
$.post( "checkDBforReg.php", { email: emailid},function (resp) {
	// body...
	
	console.log(resp);

	if (resp=="NOPE")//not there in DB
	 {
	 	window.location.replace("register.php");
	 }
} );
}
