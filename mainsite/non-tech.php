<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/ak_dept_events.css">
<title>Excel 2015 | Non Technical</title>
<?php include "navcontent.php" ?>
<main>

    <div  data-bg_color="#E75710" class="title_block">
        <p class="title_block_text center-align">Non Technical Events</p>
    </div>

    <div id="depteventscontainer" class="container">
        <div class="row">


            <?php
            $dept_events = array();

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Kryptos", //add more like these, one for each event.. the html will be auto generated
                'url' => "kryptos", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "kryptos", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Best Manager", //add more like these, one for each event.. the html will be auto generated
                'url' => "bestmanager", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Bestmanager", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "DalalBull", //add more like these, one for each event.. the html will be auto generated
                'url' => "dalalbull", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Dalalbull", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "General Quiz: Excel Risor", //add more like these, one for each event.. the html will be auto generated
                'url' => "generalquiz", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Quiz", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );


            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Kluge", //add more like these, one for each event.. the html will be auto generated
                'url' => "kluge", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Kluge", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Fun Zone", //add more like these, one for each event.. the html will be auto generated
                'url' => "funzone", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Funzone", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "CSI", //add more like these, one for each event.. the html will be auto generated
                'url' => "csi", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Csi", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Spider Web", //add more like these, one for each event.. the html will be auto generated
                'url' => "spiderweb", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Spiderweb", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Third Eye Photography", //add more like these, one for each event.. the html will be auto generated
                'url' => "thirdeyephotography", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "3rd-eye", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Tiki-Taka", //add more like these, one for each event.. the html will be auto generated
                'url' => "tiki-taka", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Football", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Dunk 360", //add more like these, one for each event.. the html will be auto generated
                'url' => "dunk-360", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Basketball", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Game Zone", //add more like these, one for each event.. the html will be auto generated
                'url' => "game-zone", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Gamezone", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Treasure Hunt", //add more like these, one for each event.. the html will be auto generated
                'url' => "treasure-hunt", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Treasurehunt", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Short Film", //add more like these, one for each event.. the html will be auto generated
                'url' => "shortFilm", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "3rd-eye", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Defacto", //add more like these, one for each event.. the html will be auto generated
                'url' => "defacto", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Defacto", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Papyrus of Ani", //add more like these, one for each event.. the html will be auto generated
                'url' => "PapyrusofAni", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "papyrus", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );



            foreach ($dept_events as $dept_event) {
                ?>
                <div class="col l4 m6 s12">
                    <div class="collection hoverable">
                        <ul class="no-margin">
                            <li data-link="<?php echo $dept_event['url']; ?>.php" class=" jslink collection-item avatar">
                                <img src="images/events/<?php echo $dept_event['img']; ?>.png" alt="" class="circle image-collection">
                                <span class="title padding-collection bold truncate"><?php echo $dept_event['name']; ?></span>
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