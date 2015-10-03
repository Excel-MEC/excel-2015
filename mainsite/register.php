<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/hk_eventdetails.css">
<!--link rel="stylesheet" type="text/css" href="css/yourcss.css"-->
<title>Excel 2015 | Registration</title>
<?php include "navcontent.php" ?>
<main>


    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>








    <div id="ExcelFormOuter" class="container">

        
            <form class="col s12 card" action="form_submit.php" method="post" id="formId">
            <div class="section"></div>
    <div class="section"></div>

<H3 id="ExcelForm" style="text-align:center;">Excel Registration form</H3>

    <div class="section"></div>



      <div class="row" style="margin-top:15px;">
        <div class="input-field col s6 offset-s3">
          <input id="form_name" type="text" class="validate" name="name" >
          <label id="form_name-label" for="form_name">Name</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s6 offset-s3">
          <input id="form_email" type="email" class="validate" name="emailid" >
          <label id="form_email-label" for="form_email">Email</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s6 offset-s3">
          <input id="form_number" type="text" name="phone">
          <label id="form_number-label" for="form_number">Mobile no</label>
        </div>
      </div>


      <div class="row">
        
          <div class="input-field col s6 offset-s3">
    <select id="mecothr" name="mecothr">
      <!--option value="0" disabled selected>Select your college</option-->
      <option value="1">Model Engineering college</option>
      <option value="2">Others</option>
    </select>
    <label id="form_collOption-label" >Pick College</label>
  </div>

      </div>


      <div class="row" style="display:none;" id="othercollege">
        <div class="input-field col s6 offset-s3">
          <input id="form_college" type="text" name="college" value="Model Engineering College">
          <label id="form_college-label" for="form_college">College Name</label>
        </div>
      </div>

      <div class="row" id="classes" >
        <div class="input-field col s6 offset-s3">
        	<select id="class" name="class" class="browser-default">
      			<option value="CS1A" selected>CS1A</option>
      			<option value="CS1B" >CS1B</option>
      			<option value="CS3A" >CS3A</option>
      			<option value="CS3B" >CS3B</option>
      			<option value="CS5A" >CS5A</option>
      			<option value="CS5B" >CS5B</option>
      			<option value="CS7A" >CS7A</option>
      			<option value="CS7B" >CS7B</option>
      			
      			<option value="EC1A" >EC1A</option>
      			<option value="EC1B" >EC1B</option>
      			<option value="EC3A" >EC3A</option>
      			<option value="EC3B" >EC3B</option>
      			<option value="EC5A" >EC5A</option>
      			<option value="EC5B" >EC5B</option>
      			<option value="EC7A" >EC7A</option>
      			<option value="EC7B" >EC7B</option>
      			
      			<option value="EE1A" >EE1</option>
      			
      			<option value="EE3A" >EE3</option>
      			
      			<option value="EE5A" >EE5</option>
      			
      			<option value="EE7A" >EE7</option>
      			
      			
      			<option value="BM1A" >BM1</option>
      			
      			<option value="BM3A" >BM3</option>
      			
      			<option value="BM5A" >BM5</option>
      			
      			<option value="BM7A" >BM7</option>
      			
      			
      			<option value="M.Tech">M.Tech</option>
      			
    		</select>
        
          
          <!--label id="class-label" for="class">Class</label-->
        </div>
      </div>


      <div class="row">
        <div class="input-field col s6 offset-s3">
          <input id="dept" type="text" name="dept">
          <label class="" id="dept-label" for="dept">Department&nbsp;(Eg:&nbsp;Electronics)</label>
        </div>
      </div>

      <div class="row">
        <div class="col s4 offset-s4 l4 offset-l5">
              <a class="waves-effect waves-light btn-large" style="background:#F44336" onclick="subform()">Submit</a>
        </div>
      </div>


    </form>
     </div>
    

    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>





    <!--login + profile button needed for all pages except profile page-->
    <div id="fabout" class="fixed-action-btn tooltipped" data-position="left" data-delay="60" data-tooltip="Profile" style="bottom:35px; right: 35px;">
        <a id="profile_fab" href="profile.php" class="btn-floating btn-large waves-effect waves-light btn-large red">
            <i class="material-icons" style="font-size:2rem;">account_circle</i>
        </a>
    </div>

    

</main>

<footer>
</footer>

</body>
<?php include "scripts.php" ?>
<script type="text/javascript" src="js/ak_redirect-from-register.js"></script>
<script type="text/javascript">

    // Initialize collapse button
    $(".button-collapse").sideNav();
    //  $('.button-collapse').sideNav('show');
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    $(document).ready(function() {
    $('select').material_select(5);
  });
            
</script>


<script type="text/javascript">
$('#mecothr').on('change', function() {
  //alert( this.value ); // or $(this).val()
    if (this.value==2) {
      $("#othercollege").css("display","block");
            $("#classes").css("display","none");
            $("#form_college").val("");

    };

    if (this.value==1) {
      $("#othercollege").css("display","none");
      $("#classes").css("display","block");
       $("#form_college").val("Model Engineering College");

    };

});



function subform () {
    // body...
    //document.getElementById("formId").submit();
    $("#form_name-label").html("Name");
    $("#form_email-label").html("Email");
    $("#form_number-label").html("Mobile no");
    $("#form_collOption-label").html("Pick College");
    $("#form_college-label").html("College Name");
    $("#class-label").html("Class (Eg: CS7B)");
    $("#dept-label").html("Department (Eg: Electronics)");
    
    var checks="TRUE";
    
    
    if($("#form_name").val().length<3){
    
    $("#form_name-label").html("Enter valid Name");
    location.hash = "";
    location.hash = "#ExcelForm";
    checks="FALSE";
    
    }
    
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    
    if(!re.test($("#form_email").val())){
    
    $("#form_email-label").html("Enter valid Email");
    location.hash = "";
    location.hash = "#ExcelForm";
    checks="FALSE";
    
    }
    
    
     if($("#form_number").val().length<10){
    
    $("#form_number-label").html("Enter valid Mobile no");
    location.hash = "";
    location.hash = "#ExcelForm";
    checks="FALSE";
    
    }
    
    console.log($("#mecothr").val());
     if($("#mecothr").val()==null){
    
    $("#form_collOption-label").html("Pick a valid option");
    location.hash = "";
    location.hash = "#ExcelForm";
    checks="FALSE";
    
    }
    
    
    if($("#form_college").val().length<=3||$("#class").val().length<=3){
    
    $("#form_college-label").html("Give a valid College name");
    $("#class-label").html("Give a valid Class name (Eg: EC7B)");
    location.hash = "";
    location.hash = "#ExcelForm";
    checks="FALSE";
    
    }
    
    if($("#dept").val().length<=3){
    
    $("#dept-label").html("Give a valid department name (Eg: Electronics)");
    location.hash = "";
    location.hash = "#ExcelForm";
    checks="FALSE";
    
    }
    

    if(checks=="TRUE"){
    
    $("#ExcelFormOuter").css({display:"none"});
    
    $.post( "form_submit.php", {name:$("#form_name").val(),
    				emailid:$("#form_email").val(),
    				phone:$("#form_number").val(),
    				ismec:$("#mecothr").val(),
    				college:$("#form_college").val(),
    				classy:$("#class").val(),
    				dept:$("#dept").val()
    				 },function (resp) {
    				 
    				 console.log(resp);
	// body...
	if(resp=="YUP")
	{
	//alert("ypu");
		window.location.replace("profile.php");
	} else {
	window.location.replace("register.php");
	}
	

	} );
     }
    
}
  
    
    
  

</script>


</html>