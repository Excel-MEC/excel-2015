<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/ak_dept_events.css">
<title>Excel 2015 | Computer Science</title>
<?php include "navcontent.php" ?>
<main>

    <div  data-bg_color="#E75710" class="title_block">
        <p class="title_block_text center-align">Computer Science Events</p>
    </div>

    <div id="depteventscontainer" class="container">
        <div class="row">


            <?php
            $dept_events = array();

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Hack Master", //add more like these, one for each event.. the html will be auto generated
                'url' => "hack-master", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "hackmaster", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "4*120", //add more like these, one for each event.. the html will be auto generated
                'url' => "four-120", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "3x120", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Lord of the Code", //add more like these, one for each event.. the html will be auto generated
                'url' => "lord-of-code", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Debug1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Tech Geek", //add more like these, one for each event.. the html will be auto generated
                'url' => "tech-geek", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Techgeek", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Codeforge Hackathon", //add more like these, one for each event.. the html will be auto generated
                'url' => "codeforge", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Lord of code", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "#include", //add more like these, one for each event.. the html will be auto generated
                'url' => "hash-include", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "include", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => ""  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "App Genius", //add more like these, one for each event.. the html will be auto generated
                'url' => "appgenius", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "android", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
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
                                <p class="padding-collection"><?php echo $dept_event['description']; ?></p>
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