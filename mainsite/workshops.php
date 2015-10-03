<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/ak_dept_events.css">
<title>Excel 2015 | Workshops</title>
<?php include "navcontent.php" ?>
<main>

    <div  data-bg_color="#E75710" class="title_block">
        <p class="title_block_text center-align">Workshops</p>
    </div>

    <div id="depteventscontainer" class="container">
        <div class="row">


            <?php
            $dept_events = array();
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "VAPT Workshop", //add more like these, one for each event.. the html will be auto generated
                'url' => "vapt", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "hackmaster", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "A workshop on Vulnerability Assessment and Penetration Testing."  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "UI/UX Workshop", //add more like these, one for each event.. the html will be auto generated
                'url' => "uiux", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Techgeek", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Learn to produce a first class user experience that becomes eye candy for the users."  //add more like these, one for each event.. the html will be auto generated
            );

            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "MSP 430", //add more like these, one for each event.. the html will be auto generated
                'url' => "msp430", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "msp_logo", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "An intermediate workshop on MSP 430 microcontrollers."  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Framing The Perspective", //add more like these, one for each event.. the html will be auto generated
                'url' => "framingThePerspective", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "3rd-eye", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "An interactive session with Dr. Mathew Jacob, a wildlife photographer of national repute."  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Cansat", //add more like these, one for each event.. the html will be auto generated
                'url' => "cansat", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Kluge", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Wanna go and fly in space? Why not build your own spaceship?"  //add more like these, one for each event.. the html will be auto generated
            );

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Ethical Hacking", //add more like these, one for each event.. the html will be auto generated
                'url' => "EthicalHacking", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Lord of code", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Take the first step to becoming a cyber-security guru!"  //add more like these, one for each event.. the html will be auto generated
            );
            
            

            




            foreach ($dept_events as $dept_event) {
                ?>
                <div class="col s12 m8 offset-m2 l6">
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
        <a href="lecturesTalksWorkshops.php" data-position="right" data-delay="60" data-tooltip="Back" class="tooltipped btn-floating btn-large waves-effect waves-light btn-large red">
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