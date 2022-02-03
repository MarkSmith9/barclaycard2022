<?php
session_start(); //used to start the session - has to be on the first line

//connecting to database
require '../database.php';

if (isset($_SESSION["loggedin"])) { //checks that the user is logged in
	$title = 'WUC - home'; //sets the title
	$content = '
<div class = "login">
<h1> Welcome back </h1>
<p> Attendance status </p>
<p> Present: 100 </p>
<p> Absent:  100 </p>
<p> Late:  100 </p>

<h1> Average attendance </h1>
<p> Day: </p>
            <div class="progress">
              <div class="progress-inside" style="width: 50%">
                <span>50%  </span>
              </div>
            </div>
<p> Month: </p>
            <div class="progress">
              <div class="progress-inside" style="width: 50%">
                <span>50%  </span>
              </div>
            </div>
<p> Year: </p>
            <div class="progress">
              <div class="progress-inside" style="width: 50%">
                <span>50%  </span>
              </div>
            </div>
<h1> Messages </h1>
<p>  Message </p>
</div>
';//sets the content inside the page
}
else { //displays an access denied if the user is not logged in
  $title = 'Access denied';
  $content = 'Access denied - please log in to access this page';
}
require '../templates/layout.html.php'; //loads layout.php which contains the layout for the page
?>
