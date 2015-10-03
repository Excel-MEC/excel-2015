<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/ak_dept_events.css">
<link rel="stylesheet" type="text/css" href="css/ak_mobile.css">
<title>Excel 2015</title>
<?php include "navcontent.php" ?>
<main>

    <div class="back-color-home"></div>



    <div class="container">
        <div class="col s12 m12 l12">
            <div class="card white darken-1 hoverable">
                <div class="card-content black-text">
                    <span class="card-title"><p class="center-align black-text">Excel 2015</p></span>
                    <p>Excel, the nation’s second and South India’s first ever fest of its kind started in 2001 by the students of Govt. Model Engineering College with a motto, Inspire, Innovate, Engineer. Over the years, Excel has grown exponentially, consistently playing host to some of the most talented students, the most illustrious speakers and the most reputed companies. Now gearing towards its 16th edition, Excel continues to excite the participants with its wide array of technical and non-technical events and with a promise to live upto its motto.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section"></div>
    <div class="section"></div>

    <h3 class="center-align">Competitions</h3>
    <div class="back-color-events"></div>

    <div class="container">
        <div class="col l4 m6 s12">
            <div class="collection hoverable">
                <ul class="no-margin">
                    <li data-link="cs-events.php" class=" jslink collection-item avatar">
                        <img src="images/events/Techgeek.png" alt="" class="circle image-collection">
                        <span class="title padding-collection bold">Computer Science</span>
<!--                        <p class="padding-collection">< ?php echo $dept_event['description']; ?></p>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col l4 m6 s12">
            <div class="collection hoverable">
                <ul class="no-margin">
                    <li data-link="electronics.php" class=" jslink collection-item avatar">
                        <img src="images/events/Extrinsicity.png" alt="" class="circle image-collection">
                        <span class="title padding-collection bold">Electronics</span>
<!--                        <p class="padding-collection">< ?php echo $dept_event['description']; ?></p>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col l4 m6 s12">
            <div class="collection hoverable">
                <ul class="no-margin">
                    <li data-link="electrical.php" class=" jslink collection-item avatar">
                        <img src="images/events/Extundo-prodigo.png" alt="" class="circle image-collection">
                        <span class="title padding-collection bold">Electrical</span>
<!--                        <p class="padding-collection">< ?php echo $dept_event['description']; ?></p>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="col l4 m6 s12">
            <div class="collection hoverable">
                <ul class="no-margin">
                    <li data-link="biomedical.php" class=" jslink collection-item avatar">
                        <img src="images/events/lifelime.png" alt="" class="circle image-collection">
                        <span class="title padding-collection bold">Biomedical</span>
<!--                        <p class="padding-collection">< ?php echo $dept_event['description']; ?></p>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="col l4 m6 s12">
            <div class="collection hoverable">
                <ul class="no-margin">
                    <li data-link="non-tech.php" class=" jslink collection-item avatar">
                        <img src="images/events/Funzone.png" alt="" class="circle image-collection">
                        <span class="title padding-collection bold">Non Technical</span>
<!--                        <p class="padding-collection">< ?php echo $dept_event['description']; ?></p>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="section"></div>
    <div class="section"></div>

    <div class="back-color-talks"></div>

    <div class="container">
        <div class="col l4 m6 s12">
            <div class="collection hoverable">
                <ul class="no-margin">
                    <li data-link="lecturesTalksWorkshops.php" class=" jslink collection-item avatar">
                        <img src="images/events/Conference.png" alt="" class="circle image-collection">
                        <span class="title padding-collection bold">Lectures Talks Workshops</span>
    <!--                        <p class="padding-collection">< ?php echo $dept_event['description']; ?></p>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="section"></div>
    <div class="section"></div>
    <div class="back-color-concert"></div>

    <div class="container">
        <div class="col l4 m6 s12">
            <div class="collection hoverable">
                <ul class="no-margin">
                    <li data-link="concert.php" class=" jslink collection-item avatar">
                        <img src="images/events/Defacto.png" alt="" class="circle image-collection">
                        <span class="title padding-collection bold">Concert</span>
    <!--                        <p class="padding-collection">< ?php echo $dept_event['description']; ?></p>-->
                    </li>
                </ul>
            </div>
        </div>
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
    
    <div style="position:fixed; bottom:100px; right: 35px;">
        <a href="http://excelmec.org/excel2015/schedule.php" target="_blank" data-position="left" data-delay="60" data-tooltip="Schedule" class="tooltipped btn-floating btn-large waves-effect waves-light btn-large red">
            <i class="material-icons" style="font-size:2rem;">list</i>
        </a>
    </div>

</main>

<footer>
</footer>

</body>
<?php include "scripts.php" ?>
<script type="text/javascript" src="js/hk_dept_events.js"></script>
<!--script type="text/javascript" src="js/yourscripts.js"></script-->
<script type="text/javascript">

    // Initialize collapse button
    $(".button-collapse").sideNav();
    //  $('.button-collapse').sideNav('show');
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
</script>
</html>