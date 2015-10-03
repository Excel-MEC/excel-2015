<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/hk_profile.css">
<!--link rel="stylesheet" type="text/css" href="css/yourcss.css"-->
<title>Excel 2015 | Profile</title>
<?php include "navcontent.php" ?>
<main>

    <div id="notloggedin">
        <div class="container">

            <div class="row">
            
            
            <div id="login_loader" class="col s8 offset-s2 m4 offset-m4 l4 offset-l5">
                      <div class="preloader-wrapper big active">
			    <div class="spinner-layer spinner-blue-only">
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
            
            
            
                <div id="login_loaded" style="display:none" class="col s8 offset-s2 m4 offset-m4 l4 offset-l4">
                    <div class="card hoverable waves-effect" onclick="CustomCheckLoginState()">
                        <div class="card-image">
                            <img width="100%" src="images/user_pic.png"> 
                            <!--show loading gif if checking login -->
                        </div>
                        <div class="card-content">
                            <p class="center-align card-title card_heading">Welcome User</p>
                            <img width="100%" src="images/social/fblogin.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="loggedin">
        <div class="container">

            <div class="row">
                <div class="col s8 offset-s2 m4 offset-m4 l3">
                    <div class="card">
                        <div class="card-image">
                            <img id="prof_pic" width="100%" src="images/user_pic.png">                           
                        </div>
                        <div class="card-content">
                            <p id="username" class="center-align card_heading">Welcome User</p>
                        </div>
                    </div>
                </div>

		<div class="col s12 m8 offset-m2 l8 ">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title card_heading"><a href="http://excelmec.org/excel2015/schedule.php">Schedule</a></span>
                            <p>Check out the schedule and plan your calanders!!!!</p>

                        </div>
                    </div>
                </div>

                <!--div class="col s12 m8 offset-m2 l8 ">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title card_heading"><a href="http://excelmec.org/excel2015/newsfeed.php">Newsfeed</a></span>
                            <p>See what's happening. Get the latest updates!!!</p>

                        </div>
                    </div>
                </div-->
                
                


                <div class="col s12 m12 l1">

                    <div class="row">

                        <div class="col s2 offset-s1 m2 offset-m1 l10 offset-l2">
                           <a href="https://facebook.com/excelmec" target="_blank"> <img style="border-radius: 50%" class=" hoverable social_img" src="images/social/fb.png"></a>
                        </div>

                        <div class="col s2 m2 l10 offset-l2">
                             <a href="https://youtube.com/excelmec" target="_blank"> <img style="border-radius: 50%" class=" hoverable social_img" src="images/social/yt.png"></a>
                        </div>

                        <div class="col s2 m2 l10 offset-l2">
                             <a href="https://instagram.com/excelmec" target="_blank"> <img style="border-radius: 50%" class="hoverable social_img" src="images/social/insta.png"></a>
                        </div>

                        <div class="col s2 m2 l10 offset-l2">
                             <a href="https://plus.google.com/105749244546874520653" target="_blank"> <img style="border-radius: 50%" class="hoverable social_img" src="images/social/g+.png">
                        </div></a>

                        <div class="col s2 m2 l10 offset-l2">
                             <a href="https://twitter.com/excelmec" target="_blank"> <img style="border-radius: 50%" class=" hoverable social_img" src="images/social/twtr.png"></a>
                        </div>

                    </div>

                </div>
                
	</div>
        <div class="row">
                
                <div class="col s12 m8 offset-m2 l6 ">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title card_heading"><a href="http://techgeek.excelmec.org">Tech Geek</a></span>
                            <p>Tech Geek has ended!!!</p>
<!--                            <p><br>Today's challenge</p>
                            <p><br>You haven't started playing Daily Challenge. Join, challenge your friends and win exciting prizes.</p>-->
                        </div>
                    </div>
                </div>
                
                <div class="col s12 m8 offset-m2 l6 ">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title card_heading"><a href="http://kryptos.excelmec.org">Kryptos</a></span>
                            <p>Kryptos has ended!!!</p>
<!--                            <p><br>Today's challenge</p>
                            <p><br>You haven't started playing Daily Challenge. Join, challenge your friends and win exciting prizes.</p>-->
                        </div>
                    </div>
                </div>
                
                <div class="col s12 m8 offset-m2 l6 ">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title card_heading"><a href="http://dalalbull.excelmec.org">Dalalbull</a></span>
                            <p>Dalalbull has ended!!!</p>
<!--                            <p><br>Today's challenge</p>
                            <p><br>You haven't started playing Daily Challenge. Join, challenge your friends and win exciting prizes.</p>-->
                        </div>
                    </div>
                </div>
                
                <div class="col s12 m8 offset-m2 l6 ">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title card_heading"><a href="http://extrinsicity.excelmec.org">Extrinsicity</a></span>
                            <p>The online leg of Extrinsicity has come to an end.</p>
<!--                            <p><br>Today's challenge</p>
                            <p><br>You haven't started playing Daily Challenge. Join, challenge your friends and win exciting prizes.</p>-->
                        </div>
                    </div>
                </div>
                
                <div class="col s12 m8 offset-m2 l6 ">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title card_heading"><a href="http://hackmaster.excelmec.org">Hackmaster</a></span>
                            <p>Hackmaster has ended. Check out the results.</p>
<!--                            <p><br>Today's challenge</p>
                            <p><br>You haven't started playing Daily Challenge. Join, challenge your friends and win exciting prizes.</p>-->
                        </div>
                    </div>
                </div>
                
                <div class="col s12 m8 offset-m2 l6 ">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title card_heading"><a href="http://include.excelmec.org">#include</a></span>
                            <p>#include has ended. Check out the results.</p>
<!--                            <p><br>Today's challenge</p>
                            <p><br>You haven't started playing Daily Challenge. Join, challenge your friends and win exciting prizes.</p>-->
                        </div>
                    </div>
                </div>
                
                

                <!--
                <div class="col s12 m8 offset-m2 l8 offset-l1">
                    <div class="card small">
                        <div class="card-content">
                            <span class="card-title card_heading">Marked Events</span>

                        </div>
                    </div>
                </div>
                
                -->



            </div>

            <!--            <div class="row">
            
            
            
            
            
                            <div class="col s12 m8 offset-m2 l4">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title card_heading">Kryptos</span>
                                        p>Online teasure hunt. Coming soon.</p
                                        <p><br>Total players: 1329</p>
                                        <p><br>Your Rank: 32</p>
                                        <p><br>You haven't started playing Kryptos. Are ye a treasure seeker matey??</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col s12 m8 offset-m2 l4">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title card_heading">Dalalbull</span>
                                        <p>Virtual stock trading. Coming soon.</p>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col s12 m8 offset-m2 l4">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title card_heading">#include</span>
                                        <p>Code out the challenging problem statements online. Coming soon.</p>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col s12 m8 offset-m2 l4">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title card_heading">Hackmaster</span>
                                        <p>Try hacking it out with Hackmaster. Coming soon.</p>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col s12 m8 offset-m2 l4">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title card_heading">Extrinsicity</span>
                                        <p>Electronic circuit simulation. Coming soon.</p>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col s12 m8 offset-m2 l4">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title card_heading">Event name</span>
                                        <p>I am a very simple card. I am good at containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>
                                    </div>
                                </div>
                            </div>
            
                        </div>-->
        </div>
        <div class="section"></div>
        <div class="section"></div>
        <div class="section"></div>
        
    </div>



    <div id="fabout" style="position:fixed; bottom:20px; left: 35px;">
                <div class="fb-like social_img" data-href="https://facebook.com/excelmec" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
    </div>
</main>

<footer>
</footer>


</body>

<?php include "scripts.php" ?>
<script type="text/javascript" src="js/hk_profile.js"></script>

<script type="text/javascript">

                        // Initialize collapse button
                        $(".button-collapse").sideNav();
                        //  $('.button-collapse').sideNav('show');
                        // Initialize collapsible (uncomment the line below if you use the dropdown variation)
</script>

<script type="text/javascript" src="js/ak_redirect-from-profile.js"></script>

</html>