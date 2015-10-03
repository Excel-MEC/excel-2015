<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/hk_contacts.css">
<title>Excel 2015</title>
<?php include "navcontent.php" ?>
<main>

    <div id="hk_contactscontainer" class="container">
        <div class="row">

            <?php
            $corecount = 21;
            $core = array();

            $core[] = array(
                'name' => "Mathew T George",
                'pos' => "Chairman",
                'pic' => "mathew",
                'mail' => "mathewtg",
                'phone' => "9400072264"
            );

            $core[] = array(
                'name' => "Aasif Ali N S",
                'pos' => "Secretary",
                'pic' => "aasif",
                'mail' => "aasifali",
                'phone' => "7736668688"
            );

            $core[] = array(
                'name' => "Kevin Jacob",
                'pos' => "Joint Secretary",
                'pic' => "kevin",
                'mail' => "kevin",
                'phone' => "9446265884"
            );


            $core[] = array(
                'name' => "Ajmal Azeez",
                'pos' => "CS Tech Head",
                'pic' => "valsan",
                'mail' => "ajmal",
                'phone' => "9020404022"
            );

            $core[] = array(
                'name' => "Neelanjana J",
                'pos' => "Non-Tech Head",
                'pic' => "neeli",
                'mail' => "neelanjana",
                'phone' => "8089575550"
            );

            $core[] = array(
                'name' => "Vibin John",
                'pos' => "EC Tech Head",
                'pic' => "vibin",
                'mail' => "vibin",
                'phone' => "8086434781"
            );

            $core[] = array(
                'name' => "Arjun S",
                'pos' => "Media Manager",
                'pic' => "sasi",
                'mail' => "arjun",
                'phone' => "9809958043"
            );

            $core[] = array(
                'name' => "Hilal Mohammed",
                'pos' => "Management Head",
                'pic' => "hilal",
                'mail' => "hilal",
                'phone' => "9020602011"
            );

            $core[] = array(
                'name' => "Sethu Madhavan",
                'pos' => "Management Head",
                'pic' => "sethu",
                'mail' => "sethu",
                'phone' => "9809341233"
            );

            $core[] = array(
                'name' => "Harisankar P K",
                'pos' => "Web Admin",
                'pic' => "hk",
                'mail' => "harisankar",
                'phone' => "9447652970"
            );

            $core[] = array(
                'name' => "Ashwin Jose",
                'pos' => "Design Manager",
                'pic' => "ashwin",
                'mail' => "ashwin",
                'phone' => "8714438293"
            );
            
            $core[] = array(
                'name' => "Avinash Pai A",
                'pos' => "Content Manager",
                'pic' => "pai",
                'mail' => "avinash",
                'phone' => "9846544057"
            );

            
            $core[] = array(
                'name' => "Mathew Shaji",
                'pos' => "Marketing Manager",
                'pic' => "shaji",
                'mail' => "mathewshaji",
                'phone' => "9447680207"
            );

            $core[] = array(
                'name' => "Eldhose Alias",
                'pos' => "Marketing Manager",
                'pic' => "eldhose",
                'mail' => "eldhose",
                'phone' => "9744387867"
            );

            $core[] = array(
                'name' => "Muhammed Althaf",
                'pos' => "Finance Manager",
                'pic' => "althaf",
                'mail' => "althaf",
                'phone' => "9048118221"
            );

            $core[] = array(
                'name' => "Shine Ali",
                'pos' => "Conferences Manager",
                'pic' => "shine",
                'mail' => "shine",
                'phone' => "8891701283"
            );

            $core[] = array(
                'name' => "Anjaly Saju",
                'pos' => "Conferences Manager",
                'pic' => "saju",
                'mail' => "anjaly",
                'phone' => "8943957906"
            );

            $core[] = array(
                'name' => "Gayathri S Nambiar",
                'pos' => "Talks Manager",
                'pic' => "gayathri",
                'mail' => "gayathri",
                'phone' => "9447341943"
            );

            $core[] = array(
                'name' => "Anjana Krishnakumar V",
                'pos' => "Social Initiatives Manager",
                'pic' => "anjana",
                'mail' => "anjana",
                'phone' => "9847091568"
            );

            $core[] = array(
                'name' => "Ajay Mathew Joseph",
                'pos' => "Publicity Manager",
                'pic' => "amj",
                'mail' => "ajay",
                'phone' => "8547880092"
            );

            $core[] = array(
                'name' => "Aswin R K",
                'pos' => "Publicity Manager",
                'pic' => "rk",
                'mail' => "aswinr",
                'phone' => "9946638821"
            );

            for ($i = 0; $i < $corecount; $i++) {
                ?>
                <div class="col s8 offset-s2 m4 l4">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="images/contacts/<?php echo $core[$i]['pic']; ?>.jpg">
                        </div>
                        <p class="no-padding center-align card-title activator grey-text text-darken-4 speaker_name"><?php echo $core[$i]['name']; ?><br><?php echo $core[$i]['pos']; ?></p>

                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4 speaker_name"><?php echo $core[$i]['name']; ?><i class="material-icons right">close</i></span>
                            <p class="no-padding"><br><?php echo $core[$i]['mail']; ?>@excelmec.org<br>+91-<?php echo $core[$i]['phone']; ?></p>
                        </div>
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
<!--script type="text/javascript" src="js/yourscripts.js"></script-->
<script type="text/javascript">

    // Initialize collapse button
    $(".button-collapse").sideNav();
    //  $('.button-collapse').sideNav('show');
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
</script>
</html>