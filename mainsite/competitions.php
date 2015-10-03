<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

if ($detect->isMobile()&&!$detect->isTablet()) {
    header('Location: competitions_mobile.php');
    exit;
}
?>

<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/hk_competitions.css">
<title>Excel 2015 | Competitions</title>
<?php include "navcontent.php" ?>

<main>

    <!--slide container navigation -->
    <div id="sp_secondary_nav" style="width:100%;min-height:50px;" class="waves-effect red lighten-1">

        <div id="sp_secondary_nav_title" class="sp_vert_middleabs center" style="width:100%">
            <h6  id="sp_slide_title" class="white-text"></h6>
        </div>

        <a href="#" ><i id="sp_slide_right" class="material-icons sp_vert_middleabs" style="right:2%;font-size:3.3rem;color:white;">chevron_right</i></a>
        <a href="#"  ><i id="sp_slide_left" class="material-icons sp_vert_middleabs" style="left:2%;font-size:3.3rem;color:white">chevron_left</i></a>
    </div>

    <!--slide container and slides-->
    <div id="sp_slide_container">
        <div id="sp_slides">
            <div  data-sp-slide-title="COMPUTER SCIENCE" style="text-align:center" class="sp_slide brown lighten-5 z-depth-2 ">
                <object id="cs_svg" data="images/svgs/cs.svg" style="width:100%;"  type="image/svg+xml">

                </object>
            </div>
            <div  data-sp-slide-title="ELECTRONICS" class="sp_slide brown lighten-5 z-depth-2">
                <object id="ec_svg" data="images/svgs/ec.svg" style="width:100%;" class="sp_horz_middle" type="image/svg+xml">

                </object>
            </div>
            <div  data-sp-slide-title="ELECTRICAL" class="sp_slide brown lighten-5 z-depth-2">
                <object id="eee_svg" data="images/svgs/eee.svg" style="width:100%;" class="sp_horz_middle" type="image/svg+xml">

                </object>
            </div>
            <div  data-sp-slide-title="NON TECHNICAL" class="sp_slide brown lighten-5 z-depth-2">
                <object id="nt_svg" data="images/svgs/non-tech.svg" style="width:100%;" class="sp_horz_middle" type="image/svg+xml">

                </object>
            </div>
        </div>

        <ul  class="sp_indictr_cont">
            <!--place links with this data-attribute to slide -->
            <li  class="sp_indictr sp_round" data-sp-slide-to="1"></li>
            <li  class="sp_indictr sp_round" data-sp-slide-to="2"></li>
            <li  class="sp_indictr sp_round" data-sp-slide-to="3"></li>
            <li  class="sp_indictr sp_round" data-sp-slide-to="4"></li>

        </ul>
    </div>

    <!--login button-->
    <div id="fabout" class="fixed-action-btn tooltipped" data-position="left" data-delay="60" data-tooltip="Register" style="bottom:12px; right: 35px;">
        <a id="profile_fab" href="profile.php" class="btn-floating btn-large waves-effect waves-light btn-large red">
            <i class="material-icons" style="font-size:2rem;">account_circle</i>
        </a>
    </div>

    <div style="position:fixed; bottom:12px; left: 35px;">
        <a href="index.php" data-position="right" data-delay="60" data-tooltip="Home" class="tooltipped btn-floating btn-large waves-effect waves-light btn-large red">
            <i class="material-icons" style="font-size:2rem;">skip_previous</i>
        </a>
    </div>

</main>
<footer style="padding-left:0">
</footer>

</body>

<?php include "scripts.php" ?>
<script type="text/javascript" src="js/hk_competitions.js"></script>
<script type="text/javascript" src="js/hk_animation2.js"></script>


<script type="text/javascript">

    // Initialize collapse button
    $(document).ready(function() {
        $(".button-collapse").sideNav();
    });
    //  $('.button-collapse').sideNav('show');
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
</script>

</html>