<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/ak_dept_events.css">
<title>Excel 2015 | Lectures Talks Workshops</title>
<?php include "navcontent.php" ?>
<main>

    <div  data-bg_color="#E75710" class="title_block">
        <p class="title_block_text center-align">Lectures Talks Workshops</p>
    </div>

    <div id="depteventscontainer" class="container">
        <div class="row">


            <?php
            $dept_events = array();

            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Guest Lectures", //add more like these, one for each event.. the html will be auto generated
                'url' => "lectures", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Lord of code", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Spread through three power-packed days, 'Guest Lectures’ aims to facilitate the spread of ideas and thoughts, and improve appreciation of art and scientific temper."  //add more like these, one for each event.. the html will be auto generated
            );

                       
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "(Un)titled: Make Your Own Story", //add more like these, one for each event.. the html will be auto generated
                'url' => "untitled", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Dalalbull", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "For the first time in its history, Govt. Model Engineering College, Kochi, brings to you successful startups to share the secrets of the entrepreneurial world"  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Workshops", //add more like these, one for each event.. the html will be auto generated
                'url' => "workshops", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Techgeek", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Industry experts provide a hands on experience for the students on their latest products and enhance their technical skills."  //add more like these, one for each event.. the html will be auto generated
            );
            
            $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => ".ISSUE!", //add more like these, one for each event.. the html will be auto generated
                'url' => "dotissue", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Eadventura", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "“They say actions speak louder than words. But it’s the words that give breath to these actions.”"  //add more like these, one for each event.. the html will be auto generated
            );
            
             $dept_events[] = array(//add more like these, one for each event.. the html will be auto generated
                'name' => "Conferences", //add more like these, one for each event.. the html will be auto generated
                'url' => "conferences", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'img' => "Conference", //dont use special characters or spaces here.. for eg: "hash_include" or "hashinclude" instead of "hash include"
                'description' => "Conferences presents 2 parallel tracks on and Big Data & IoT and Open Hardware, in accordance with the theme 'Towards a connected world' on September 12th 2015"  //add more like these, one for each event.. the html will be auto generated
            );
            
            
 

            foreach ($dept_events as $dept_event) {
                ?>
                <div class="col s12 m8 offset-m2 l8 offset-l2">
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
            
            
                
                
                 <div class="col s12 m8 offset-m2 l8 offset-l2">
                    <div class="collection hoverable">
                        <ul class="no-margin">
                            <li class=" collection-item avatar">
                                <img src="images/events/Defacto.png" alt="" class="circle image-collection">
                                <span class="title padding-collection bold">Exhibitions</span>
                                <p class="padding-collection">
                                
                                Standing true to its motto-To inspire, innovate and engineer, Excel 2015, the techno-managerial symposium of Govt Model Engineering College plans to provide the budding minds a chance to grasp the motivation needed to engineer a better tomorrow. Excel offers a platform where students and professionals display their exhibits because at Excel we believe nothing teaches a person more than exposure. Excel hosts the unique “MECLABS” where the students of model engineering college showcase as projects, some solution to solving real life hitches. Excel also marks the day for the final exhibition of the renowned IBETO-Innovation for Better TOmorrow, where bright ideas of broad thinkers which have the potent to alter the future are funded and mentored. Apart from the students initiative Excel also holds the stature for providing the dais for professionals and organizations to exhibit their inventions and products.
                                
                                </p>
                            </li>
                        </ul>
                    </div>
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

    <div style="position:fixed; bottom:35px; left: 35px;">
        <a href="index.php" data-position="right" data-delay="60" data-tooltip="Back" class="tooltipped btn-floating btn-large waves-effect waves-light btn-large red">
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