<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

if ($detect->isMobile() && !$detect->isTablet()) {
    header('Location: index_mobile.php');
    exit;
}
?>
<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/sp_excel.css">
<title>Excel 2015</title>
<?php include "navcontent.php" ?>

<div id="screencover" style="z-index:30;background:#FFFFFF;position:fixed;top:0;left:0;height:100%;width:100%">

    <div class="preloader-wrapper big active" style="top:45%;left:48%">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>

        <div class="spinner-layer spinner-red">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>

        <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>

        <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>

</div>

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
            <div  data-sp-slide-title="HOME" style="text-align:center;overflow: hidden" class="sp_slide brown lighten-5 z-depth-2 " >
                <object id="home_svg" data="images/svgs/home.svg" style="width:100%;" type="image/svg+xml">

                </object>

            </div>
            <div  data-sp-slide-title="COMPETITIONS" class="sp_slide brown lighten-5 z-depth-2" style="overflow: hidden">
                <object id="events_svg" data="images/svgs/events.svg" style="width:100%;" class="sp_horz_middle" type="image/svg+xml">

                </object>
            </div>
            <div  data-sp-slide-title="LECTURES&nbsp;&nbsp;TALKS&nbsp;&nbsp;WORKSHOPS" class="sp_slide brown lighten-5 z-depth-2" style="overflow: hidden">
                <object id="talks_svg" data="images/svgs/talks.svg" style="width:100%;" class="sp_horz_middle" type="image/svg+xml">

                </object>
            </div>
            <div  data-sp-slide-title="CONCERT" class="sp_slide brown lighten-5 z-depth-2 " style="overflow: hidden">
                <object id="proshow_svg" data="images/svgs/proshow.svg" style="width: 100%" class="sp_horz_middle" type="image/svg+xml">

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

    <!-- fb like button-->
    <div id="fabout" style="z-index:12; position:fixed; bottom:10px; left: 40px;">
        <div class="fb-like social_img" data-href="https://facebook.com/excelmec" data-layout="box_count" data-action="like"></div>
    </div>

    <!--sponsor circle animation-->
    <div style="opacity:0" class="sp_spons_container">	
        <div class="z-depth-1 sp_spons_slide sp_round teal">

        </div>
        <div class="z-depth-1 sp_spons_slide sp_round red">

        </div>
        <div class="z-depth-1 sp_spons_slide sp_round green">

        </div>
    </div>

    <!--parallax image-->

    <div class="parallax-container">
        <div class="parallax">
            <img src="images/graphic.png">
        </div>
    </div>

    <!--about-us container-->
    <div style="height:400px;padding:3% 0 3% 0;"class="sp_abtus_cont">
        <div class="container ">
            <div class="row">
                <div class="col s12 center-align">
                    <h3>ABOUT US</h3>
                    <p id="about_text" class="flow-text">
                        Excel, the nation’s second and South India’s first ever fest of its kind started in 2001 by the students of Govt. Model Engineering College with a motto, Inspire, Innovate, Engineer. Over the years, Excel has grown exponentially, consistently playing host to some of the most talented students, the most illustrious speakers and the most reputed companies. Now gearing towards its 16th edition, Excel continues to excite the participants with its wide array of technical and non-technical events and with a promise to live upto its motto.
                    </p>
                </div>
            </div>
        </div>	
    </div>




    <div class="container ">
        <div class="row">
            <div class="col s12 center-align">
                <h4><span class="jslink textlink" data-link="partners.php">OUR PARTNERS</span></h4>

            </div>
        </div>

        <!--div class="row">
            <div class="col s12 m8 offset-m2 l4 offset-l4">
                <img class="hoverable" src="images/user_pic.png" width="100%">
            </div>
        </div-->

        <div class="row">
            <?php
            $sponsors = array();

            $sponsors[] = array(//add more like these, one for each sponsor.. the html will be auto generated
                'url' => "http://clubfm.in/", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "clubfm", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );
            
            $sponsors[] = array(//add more like these, one for each sponsor.. the html will be auto generated
                'url' => "http://www.yamaha.com/", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "yamaha", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );
            
            
            $sponsors[] = array(//add more like these, one for each sponsor.. the html will be auto generated
                'url' => "http://www.syndicatebank.in/english/home.aspx", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "syndicatebank", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );
            
	    $sponsors[] = array(//add more like these, one for each sponsor.. the html will be auto generated
                'url' => "https://www.sbtonline.in/", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "sbt", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );
            
            $sponsors[] = array(//add more like these, one for each sponsor.. the html will be auto generated
                'url' => "https://nationalinsuranceindia.nic.co.in", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "nationalInsurance", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );
            
            $sponsors[] = array(//add more like these, one for each sponsor.. the html will be auto generated
                'url' => "https://mistlayer.com/", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "mistlayer", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );
            
            $sponsors[] = array(//add more like these, one for each sponsor.. the html will be auto generated
                'url' => "http://www.lenskart.com/", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "lenskart", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );
            
            $sponsors[] = array(//add more like these, one for each sponsor.. the html will be auto generated
                'url' => "http://www.chickingindia.in/", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "chicking", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );



            



            foreach ($sponsors as $sponsor) {
                ?>
                
                
                <div class="col s5 offset-s1 m3 l2">
                <a href="<?php echo $sponsor['url']; ?>" target="_blank"><img class="hoverable" src="images/sponsors/<?php echo $sponsor['img']; ?>.png" width="100%"></a>
            </div>
                
              
                <?php
            }
            ?>
            
            
            
            <div class="col s12 center-align">
                <h5><span class="jslink textlink" data-link="partners.php">And more...</span></h5>
            </div>
            
            

        </div>
    </div>	

    <!--prev-excel container-->
    <div style="width:100%;" class="sp_prev_cont">
        <div class="row">
            <h5 class="center">The Evolution</h5><br>
            <div class="col s4 center-align" >
                <a target="_blank" href="http://www.excelmec.org/excel2012_files"><img src="images/excel12.png" style="width:90px;height:90px" class="tooltipped hoverable sp_round " data-position="bottom" data-delay="60" data-tooltip="excel 2012"></a>
            </div>
            <div class="col s4 center-align" >
                <a target="_blank" href="http://www.excelmec.org/excel2013"><img src="images/excel13.png" style="width:90px;height:90px" class="tooltipped hoverable sp_round" data-position="bottom" data-delay="60" data-tooltip="excel 2013"></a>
            </div>
            <div class="col s4 center-align" >
                <a target="_blank" href="http://www.excelmec.org/excel2014"><img src="images/excel14.png" style="width:90px;height:90px" class="tooltipped hoverable sp_round" data-position="bottom" data-delay="60" data-tooltip="excel 2014"></a>
            </div>	
        </div>
    </div>



    <!--social icons-->
    <!--    <div style="width:100%;height:50px;">
        
        </div>-->

    <!--map-->
    <!--<div  class="hoverable">
        <div>	
            <iframe  style="width:100%;height:400px" id ="map" scrolling="no" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Model+Engineering+College,+Thrikkakara,+South+Kalamassery,+Ernakulam,+Kerala&amp;aq=0&amp;sll=21.125498,81.914063&amp;sspn=43.111881,78.046875&amp;ie=UTF8&amp;hq=Model+Engineering+College,&amp;hnear=Thrikkakara,+South+Kalamassery,+Ernakulam,+Kerala&amp;ll=10.032415,76.328545&amp;spn=0.042259,0.078878&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" ></iframe>
        </div>
    </div>-->

</main>
<footer style="padding-left:0">
    <div  class="row valign-wrapper" style="background:url('images/black_pat.jpg');margin-bottom:0;height:500px;padding:3%;">
        <div class="col s12 m10 offset-m1 l6" style="background:url('images/black_pat.jpg'); height:100%" >
            <div class="card" style="height:97%">   
                <iframe  style="width:100%;height:100%;" id ="map" scrolling="no" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Model+Engineering+College,+Thrikkakara,+South+Kalamassery,+Ernakulam,+Kerala&amp;aq=0&amp;sll=21.125498,81.914063&amp;sspn=43.111881,78.046875&amp;ie=UTF8&amp;hq=Model+Engineering+College,&amp;hnear=Thrikkakara,+South+Kalamassery,+Ernakulam,+Kerala&amp;ll=10.032415,76.328545&amp;spn=0.042259,0.078878&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" ></iframe>
            </div>
        </div>
        <div class="valign col s12 m12 l6 white-text no-padding"  style="background:url('images/black_pat.jpg'); position:relative;text-align:center;">

            <h4><span class="jslink textlink" data-link="contacts.php">CONTACTS</span></h4>
            <div>
                <p>Mathew T George<br>Chairman<br>+91-9400072264<br>mathewtg@excelmec.org<br></p>
                <p>Aasif Ali N S<br>Secretary<br>+91-7736668688<br>aasifali@excelmec.org<br></p>
                <p>Kevin Jacob<br>Joint Secretary<br>+91-9446265884<br>kevin@excelmec.org</p>
            </div>

        </div>
    </div>
</footer>

</body>

<?php include "scripts.php" ?>
<script type="text/javascript" src="js/sp_excel.js"></script>
<script type="text/javascript" src="js/hk_animation.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".button-collapse").sideNav();
    });
    // Initialize collapse button

    //  $('.button-collapse').sideNav('show');
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
</script>

</html>