<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/hk_eventdetails.css">
<!--link rel="stylesheet" type="text/css" href="css/yourcss.css"-->
<title>Excel 2015</title>
<?php include "navcontent.php" ?>
<main>


    <div  data-bg_color="#E75710" class="title_block">
        <p class="title_block_text center-align">FUNZONE</p>
    </div>

    <div id="hk_eventdetailscontainer" class="container">
        <ul class="collapsible popout" data-collapsible="accordion">
            <li>
                <div class="collapsible-header active"><span class="bigger-font bold">FUNZONE</span></div>
                <div class="collapsible-body"><p>Let your hair down and take a break from the rigours of life with the funzone. Chill out, share a few laughs and soak in the ambience of Excel while having the time of your life.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><span class="bigger-font">EVENT FORMAT</span></div>
                <div class="collapsible-body"><p>
                    No Formats ;) 
                    <br>Just have fun
                    </p></div>
            </li>
            <li>
                <div class="collapsible-header"><span class="bigger-font">RULES</span></div>
                        <div class="collapsible-body"><p>
                    
                                No Rules ;) 
                    <br>Just have fun
                                
                    </p></div>
            </li>
            <li>
                <div class="collapsible-header"><span class="bigger-font">CONTACTS</span></div>
                <div class="collapsible-body"><p class="center-align"><b>Neelanjana J</b><br>neelanjana@excelmec.org<br>+91-8089575550</p></div>
            </li>
        </ul>
    </div>




    <!--login + profile button needed for all pages except profile page-->
    <div id="fabout" class="fixed-action-btn tooltipped" data-position="left" data-delay="60" data-tooltip="Register" style="bottom:35px; right: 35px;">
        <a id="profile_fab" href="profile.php" class="btn-floating btn-large waves-effect waves-light btn-large red">
            <i class="material-icons" style="font-size:2rem;">account_circle</i>
        </a>
    </div>

    <div style="position:fixed; bottom:35px; left: 35px;">
        <a href="non-tech.php" data-position="right" data-delay="60" data-tooltip="Back" class="tooltipped btn-floating btn-large waves-effect waves-light btn-large red">
            <i class="material-icons" style="font-size:2rem;">skip_previous</i>
        </a>
    </div>

</main>

<footer>
</footer>

</body>
<?php include "scripts.php" ?>
<!--script type="text/javascript" src="js/yourscripts.js"></script-->
<script type="text/javascript">

    // Initialize collapse button
    $(".button-collapse").sideNav();
    //  $('.button-collapse').sideNav('show');
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
</script>
</html>