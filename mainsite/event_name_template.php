<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/hk_eventdetails.css">
<!--link rel="stylesheet" type="text/css" href="css/yourcss.css"-->
<title>Excel 2015</title>
<?php include "navcontent.php" ?>
<main>


    <div  data-bg_color="#E75710" class="title_block">
        <p class="title_block_text center-align">EVENT NAME</p>
    </div>

    <div id="hk_eventdetailscontainer" class="container">
        <ul class="collapsible popout" data-collapsible="accordion">
            <li>
                <div class="collapsible-header active"><span class="bigger-font bold">EVENT NAME</span></div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><span class="bigger-font">EVENT FORMAT</span></div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><span class="bigger-font">RULES</span></div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><span class="bigger-font">CONTACTS</span></div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
        </ul>
    </div>


    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>


    <!--login + profile button needed for all pages except profile page-->
    <div id="fabout" class="fixed-action-btn tooltipped" data-position="left" data-delay="60" data-tooltip="Register" style="bottom:35px; right: 35px;">
        <a id="profile_fab" href="profile.php" class="btn-floating btn-large waves-effect waves-light btn-large red">
            <i class="material-icons" style="font-size:2rem;">account_circle</i>
        </a>
    </div>

    <div style="position:fixed; bottom:35px; left: 35px;">
        <a href="dept_events_template.php" data-position="right" data-delay="60" data-tooltip="Back" class="tooltipped btn-floating btn-large waves-effect waves-light btn-large red">
            <i class="material-icons" style="font-size:2rem;">skip_previous</i>
        </a>
    </div>

</main>

<footer>
</footer>

</body>
<?php include "scripts.php" ?>
<script type="text/javascript" src="js/hk_event_name.js"></script>
<script type="text/javascript">

    // Initialize collapse button
    $(".button-collapse").sideNav();
    //  $('.button-collapse').sideNav('show');
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
</script>
</html>