<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/ak_dept_events.css">
<title>Excel 2015</title>
<?php include "navcontent.php" ?>
<main>

    <div  data-bg_color="#E75710" class="title_block">
        <p class="title_block_text center-align">DEPARTMENT NAME</p>
    </div>

    <div id="depteventscontainer" class="container">
        <div class="row">


            <?php
            $dept_events = array();

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 1", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_1", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 1"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "event 2", //add more like these, one for each event.. the html will be auto generated
                'url' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "event_2", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Description for event 2"  //add more like these, one for each event.. the html will be auto generated
            );




            foreach ($dept_events as $dept_event) {
                ?>
                <div class="col l4 m6 s12">
                    <div class="collection hoverable">
                        <ul class="no-margin">
                            <li data-link="<?php echo $dept_event['url']; ?>.php" class=" jslink collection-item avatar">
                                <img src="images/events/<?php echo $dept_event['img']; ?>.png" alt="" class="circle image-collection">
                                <span class="title padding-collection bold"><?php echo $dept_event['name']; ?></span>
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


    <!--login + profile button needed for all pages except profile page-->
    <div id="fabout" class="fixed-action-btn tooltipped" data-position="left" data-delay="60" data-tooltip="Register" style="bottom:35px; right: 35px;">
        <a id="profile_fab" href="profile.php" class="btn-floating btn-large waves-effect waves-light btn-large red">
            <i class="material-icons" style="font-size:2rem;">account_circle</i>
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