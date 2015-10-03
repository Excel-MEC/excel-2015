<?php include "headers.php" ?>
<link rel="stylesheet" type="text/css" href="css/ak_dept_events.css">
<title>Excel 2015 | Schedule</title>
<?php include "navcontent.php" ?>
<main>

    <div  data-bg_color="#E75710" class="title_block">
        <p class="title_block_text center-align">SCHEDULE</p>
    </div>

    <div id="depteventscontainer" class="container">
    
    <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#day1">Day 1</a></li>
        <li class="tab col s3"><a href="#day2">Day 2</a></li>
        <li class="tab col s3"><a href="#day3">Day 3</a></li>
      </ul>
    </div>
    <div id="day1" class="col s12">

    
									    <div class="row card">
										        <div class="col s12">
										        <p class="center"><b>DAY 1 (17th September)</b></p>
										        <table class="bordered">
										        <thead>
										          <tr>
										              <th data-field="Category">Category</th>
										              <th data-field="Event">Event</th>
										              <th data-field="Venue">Venue</th>
										              <th data-field="Time">Time</th>
										          </tr>
										        </thead>
										
										        <tbody>
										        
										        
										        
									
									
									<!--*******************************Inauguration CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Inauguration",
									                'venue'=>"Auditorium",
									                'time'=>"10:00 AM - 11:00 AM",
									            );
									            
									            
	
									
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--******************************* CATEGORY END********************-->	           
									

										        
									
									
									<!--*******************************GENERAL CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>General</b>";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Untitled",
									                'venue'=>"Auditorium",
									                'time'=>"5:30 PM - 8:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Mec Labs",
									                'venue'=>"Room  311, Room 312",
									                'time'=>"11:00 AM - 3:00 PM",
									            );
									
	
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Papyrus of Ani (Tech)",
									                'venue'=>"Mtech Lab",
									                'time'=>"11:00 AM - 1:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Papyrus of Ani (Non Tech)",
									                'venue'=>"Mtech Lab",
									                'time'=>"2:00 PM - 4:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Defacto - School Quiz (P)",
									                'venue'=>"Auditorium",
									                'time'=>"11:00 AM - 12:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Defacto - School Quiz (F)",
									                'venue'=>"Auditorium",
									                'time'=>"1:00 PM - 3:00 PM",
									            );
	
									
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************GENERAL CATEGORY END********************-->	           
									
									
									<!--*******************************WORKSHOPS CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>Seminars & Workshops</b>";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"MSP 430 Workshop",
									                'venue'=>"Room 409",
									                'time'=>"11:00 AM - 5:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Guest Lectures (Inspire)",
									                'venue'=>"Auditorium",
									                'time'=>"12:00 PM - 12:45 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Guest Lectures (Inspire)",
									                'venue'=>"Auditorium",
									                'time'=>"3:30 PM - 4:15 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"VAPT Workshop",
									                'venue'=>"Media Hall",
									                'time'=>"11:00 AM -5:00 PM",
									            );
									
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************WORKSHOPS CATEGORY END********************-->	           
									            
									<!--*******************************EC CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>EC Events</b>";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Robowars (P)",
									                'venue'=>"Amphitheatre",
									                'time'=>"11:00 AM - 3:00 PM",
									            );
									            
									             $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Robowar (F)",
									                'venue'=>"Amphitheatre",
									                'time'=>"3:30 PM - 5:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Extundo Prodigo (P)",
									                'venue'=>"Graphics Hall, Room 501, Room 515",
									                'time'=>"10:00 AM - 11:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Extundo Prodigo (Const.)",
									                'venue'=>"Electrical Workshop",
									                'time'=>"11:30 PM - 3:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Extundo Prodigo (F)",
									                'venue'=>"College Front Side",
									                'time'=>"3:30 PM - 4:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Circuimstance (P)",
									                'venue'=>"Room 509, Room 510, Room 511",
									                'time'=>"12:00 PM - 1:00 PM",
									            );
									            
									             $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Circuimstance (F)",
									                'venue'=>"Circuit Lab, Communication Lab",
									                'time'=>"2:00 PM - 5:00 PM",
									            );
									            
									            
									
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************CATEGORY END********************-->	           
									            
									
									
									<!--*******************************CS CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>CS Events</b>";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"LOC (P)",
									                'venue'=>"Room 301, Room 314, Room 315",
									                'time'=>"11:30 AM - 1:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"LOC (F)",
									                'venue'=>"Computer Center 1",
									                'time'=>"2:00 PM - 4:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"App Genius",
									                'venue'=>"Computer Center 2",
									                'time'=>"11:00 AM - 4:00 PM",
									            );
									            
									            
									
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************CATEGORY END********************-->	           
									           
									
									
									
																		
									<!--*******************************NONTECH CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>Non Tech Events</b>";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Spiderweb (P)",
									                'venue'=>"Graphics Hall, Room 501, Room 515",
									                'time'=>"11:00 PM - 12:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Spiderweb (F)",
									                'venue'=>"Volleyball Court",
									                'time'=>"2:00 PM - 5:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Game Zone",
									                'venue'=>"Room 309, Room 310",
									                'time'=>"11:00 AM - 4:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Fun Zone",
									                'venue'=>"Near Volleyball Court",
									                'time'=>"11:30 AM - 12:30 PM<br>1:30 PM - 4:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Short Film",
									                'venue'=>"Seminar Hall",
									                'time'=>"12:00 AM - 3:00 PM",
									            );
									            
									             $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"TikiTaka",
									                'venue'=>"Ground",
									                'time'=>"11:00 AM - 5:00 PM",
									            );
									            
									            
									            
									            
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************CATEGORY END********************-->	
									
									
									
									           
									           
									           
									        
										        
										          
										          
										        </tbody>
										      </table>
										      </div>
										</div>

    
    </div>
    
    
    
    <!--*********************************DAY 2**********************************-->
    
    
    
    <div id="day2" class="col s12">
    
    
    
        
									    <div class="row card">
										        <div class="col s12">
										        <p class="center"><b>DAY 2 (18th September)</b></p>
										        <table class="bordered">
										        <thead>
										          <tr>
										              <th data-field="Category">Category</th>
										              <th data-field="Event">Event</th>
										              <th data-field="Venue">Venue</th>
										              <th data-field="Time">Time</th>
										          </tr>
										        </thead>
										
										        <tbody>
										        
										        
										        
										        
									
									
									<!--*******************************GENERAL CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>General<b>";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Mec Labs",
									                'venue'=>"Room 311, Room 312",
									                'time'=>"9:30 AM - 3:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>".issue!",
									                'venue'=>"Amphitheatre",
									                'time'=>"3:30 PM - 5:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Biomedical Exhibition",
									                'venue'=>"Room 401",
									                'time'=>"10:00 AM - 3:00 PM",
									            );
									
									
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************GENERAL CATEGORY END********************-->	           
									
									
									<!--*******************************WORKSHOPS CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>Seminars & Workshops</b>";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"MSP 430 Workshop",
									                'venue'=>"Room 409",
									                'time'=>"9:30 AM - 3:30 AM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Guest Lectures (Innovate)",
									                'venue'=>"Auditorium",
									                'time'=>"10:00 AM - 10:45 AM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Guest Lectures (Innovate)",
									                'venue'=>"Auditorium",
									                'time'=>"2:00 PM - 2:45 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"VAPT Workshop",
									                'venue'=>"Media Hall",
									                'time'=>"9:00 AM - 5:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"UI UX Workshop",
									                'venue'=>"Seminar Hall",
									                'time'=>"9:30 AM - 12:30 PM",
									            );
									
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************WORKSHOPS CATEGORY END********************-->	           
									            
									<!--*******************************EC CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>EC Events</b>";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"E Aventura (P)",
									                'venue'=>"Room 509, Room 510, Room 511",
									                'time'=>"9:30 AM - 10:30 AM",
									            );
									            
									             $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"E Aventura (F)",
									                'venue'=>"Measurements Lab, Circuits Lab, Power Electronics Lab, Test Lab",
									                'time'=>"11:30 PM - 2:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Terrain master",
									                'venue'=>"College Front Side",
									                'time'=>"9:30 AM - 4:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Defuse (P)",
									                'venue'=>"Room 509, Room 510, Room 511",
									                'time'=>"10:30 AM - 11:30 AM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Defuse (F)",
									                'venue'=>"Communication Lab",
									                'time'=>"12:30 PM - 3:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Lumiere (P)",
									                'venue'=>"Room 509, Room 510, Room 511",
									                'time'=>"11:30 AM - 12:30 PM",
									            );
									            
									             $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Lumiere (F)",
									                'venue'=>"Elecrical Workshop, Machines Lab",
									                'time'=>"1:30 PM - 4:30 PM",
									            );
									            
									            
									
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************CATEGORY END********************-->	           
									            
									
									
									<!--*******************************CS CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>CS Events</b>";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Codeforge Hackathon",
									                'venue'=>"Computer Center 2",
									                'time'=>"10:00 AM - 7:00 PM",
									            );
									            								
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************CATEGORY END********************-->	           
									           
									
									
								
									<!--*******************************NONTECH CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>Non Tech Events</b>";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Tiki Taka",
									                'venue'=>"Ground",
									                'time'=>"9:00 AM - 4:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Kluge (R1)",
									                'venue'=>"Graphics Hall, Room 501, Room 515",
									                'time'=>"9:30 AM - 10:30 AM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Kluge (R2)",
									                'venue'=>"Amphitheatre",
									                'time'=>"11:30 AM - 12:00 PM",
									            );
									          								            
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Kluge (F)",
									                'venue'=>"Amphitheatre",
									                'time'=>"12:30 PM - 3:00 PM",
									            );
									            
									             $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"CSI (R1)",
									                'venue'=>"Graphics Hall, Room 501, Room 515",
									                'time'=>"10:30 AM - 11:30 AM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"CSI (R2)",
									                'venue'=>"Mtech Mech Lab",
									                'time'=>"12:00 PM - 1:00 PM",
									            );
									            
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"CSI (F)",
									                'venue'=>"Room 310",
									                'time'=>"2:00 PM - 3:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Fun Zone",
									                'venue'=>"Near Volleyball Court",
									                'time'=>"10:00 AM - 12:00 PM<br>1:30 PM - 3:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Game Zone",
									                'venue'=>"Room 309",
									                'time'=>"10:30 AM - 3:00 PM",
									            );


									            
									            
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************CATEGORY END********************-->	
									
									
									
									           
									           
									           
									        
										        
										          
										          
										        </tbody>
										      </table>
										      </div>
										</div>


    
    
    
    </div>
    
    
    <!--******************************************************DAY 3****************************-->
    
    
    <div id="day3" class="col s12">
    
    
    
        
									    <div class="row card">
										        <div class="col s12">
										        <p class="center"><b>DAY 3 (19th September)</b></p>
										        <table class="bordered">
										        <thead>
										          <tr>
										              <th data-field="Category">Category</th>
										              <th data-field="Event">Event</th>
										              <th data-field="Venue">Venue</th>
										              <th data-field="Time">Time</th>
										          </tr>
										        </thead>
										
										        <tbody>
										        
										        
										        
										        
									
									
									<!--*******************************GENERAL CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>General</b>";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Ibeto Presentation",
									                'venue'=>"Seminar Hall",
									                'time'=>"9:00 AM - 2:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Ibeto junior",
									                'venue'=>"Room 311, Room 312",
									                'time'=>"9:00 AM - 2:30 PM",
									            );
									
									
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************GENERAL CATEGORY END********************-->	           
									
									
									<!--*******************************WORKSHOPS CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>Seminars & Workshops</b>";
											
									            
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Guest Lectures (Engineer)",
									                'venue'=>"Auditorium",
									                'time'=>"9:00 AM - 9:45 AM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Guest Lectures (Engineer)",
									                'venue'=>"Media Hall",
									                'time'=>"10:30 AM - 11:15 AM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Framing The Perspective:<br>Tips & Tricks on Photography",
									                'venue'=>"Media Hall",
									                'time'=>"1:00 PM - 2:30 PM",
									            );
									
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************WORKSHOPS CATEGORY END********************-->	           
									            
									<!--*******************************EC CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>EC Events</b>";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Extrinsicity (P)",
									                'venue'=>"Room 509, Room 510, Room 511",
									                'time'=>"9:00 AM - 10:00 AM",
									            );
									            
									             $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Extrinsicity (F)",
									                'venue'=>"Circuit Lab, Communication Lab, Test Lab",
									                'time'=>"11:30 AM - 2:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Life Line (P)",
									                'venue'=>"Room 509, Room 510, Room 511",
									                'time'=>"10:00 AM - 11:00 AM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Life line (F)",
									                'venue'=>"Biomedical Lab",
									                'time'=>"11:30 AM - 2:30 PM",
									            );
									            
									
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************CATEGORY END********************-->	           
									            
									
									
									<!--*******************************CS CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="CS Events";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"4*120 (P)",
									                'venue'=>"Room 301, Room 314, Room 315",
									                'time'=>"10:00 AM - 11:00 AM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"4*120 (F)",
									                'venue'=>"Computer Center 2",
									                'time'=>"12:00 PM - 2:00 PM  ",
									            );
									            
								            
									            
									
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************CATEGORY END********************-->	           
									           
									
									
									
									<!--*******************************NONTECH CATEGORY START********************-->	        
										        <?php
										        $events = array();
											$category="<b>Non Tech Events</b>";
											
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Best Manager (R1)",
									                'venue'=>"Graphics Hall, Room 501, Room 515",
									                'time'=>"9:00 AM - 10:00 AM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Best Manager (R2)",
									                'venue'=>"MTech Mech lab",
									                'time'=>"11:00 AM - 12:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Best Manager (R3)",
									                'venue'=>"Room 301, Room 314, Room 315",
									                'time'=>"12:30 PM - 1:00 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Best Manager (F)",
									                'venue'=>"MTech Mech Lab",
									                'time'=>"1:30 PM - 2:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Treasure Hunt (P)",
									                'venue'=>"Graphics Hall, Room 501, Room 515",
									                'time'=>"10:00 AM - 11:00 PM",
									            );
									            
									             $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Treasure hunt (F)",
									                'venue'=>"All around campus",
									                'time'=>"11:30 AM - 2:30 PM",
									            );
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"General Quiz: Excel Risor (P)",
									                'venue'=>"Auditorium",
									                'time'=>"10:30 AM - 11:30 AM",
									            );
									            
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"General Quiz: Excel Risor (F)",
									                'venue'=>"Auditorium",
									                'time'=>"12:00 PM - 2:00 PM",
									            );
	
	
	$events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Instant Photography",
									                'venue'=>"Room 309",
									                'time'=>"9:00 AM - 12:00 PM",
									            );		
									            
									            $events[] = array(//add more like these, one for each event.. the html will be auto generated
									                'event'=>"Fun Zone",
									                'venue'=>"Near Volleyball Court",
									                'time'=>"10:30 AM - 12:30 PM<br>1:30 PM - 4:00 PM",
									            );	
									            
									            					            
									            
										?>
										<td rowspan="<?php echo(count($events)+1);?>"><?php echo($category);?></td>
										<?php
									
									            foreach ($events as $event) {
									                ?>
									                <tr>
										            
										            <td><?php echo($event['event']);?></td>
										            <td><?php echo($event['venue']);?></td>
										            <td><?php echo($event['time']);?></td>
										          </tr>
									
									                <?php
									            }
									            ?>
									  <!--*******************************CATEGORY END********************-->	
									
									
									
									
									           
									           
									           
									        
										        
										          
										          
										        </tbody>
										      </table>
										      </div>
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