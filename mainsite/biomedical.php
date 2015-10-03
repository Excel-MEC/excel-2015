<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/ak_dept_events.css">
<title>Excel 2015 | Biomedical</title>
<?php include "navcontent.php" ?>
<main>

    <div  data-bg_color="#E75710" class="title_block">
        <p class="title_block_text center-align">Biomedical Events</p>
    </div>

    <div id="depteventscontainer" class="container">
        <div class="row">


            <?php
            $dept_events = array();

            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Lifeline", //add more like these, one for each event.. the html will be auto generated
                'url' => "lifeline", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "lifelime", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );



            foreach ($dept_events as $dept_event) {
                ?>
                <div class="col l4 m6 s12">
                    <div class="collection hoverable">
                        <ul class="no-margin">
                            <li data-link="<?php echo $dept_event['url']; ?>.php" class=" jslink collection-item avatar">
                                <img src="images/events/<?php echo $dept_event['img']; ?>.png" alt="" class="circle image-collection">
                                <span class="title padding-collection bold"><?php echo $dept_event['name']; ?></span>
                                <p class="padding-collection truncate"><?php echo $dept_event['description']; ?></p>
                            </li>
                        </ul>
                    </div>
                </div>

                <?php
            }
            ?>

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

    <div style="position:fixed; bottom:35px; left: 35px;">
        <a href="competitions.php" data-position="right" data-delay="60" data-tooltip="Back" class="tooltipped btn-floating btn-large waves-effect waves-light btn-large red">
            <i class="material-icons" style="font-size:2rem;">skip_previous</i>
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