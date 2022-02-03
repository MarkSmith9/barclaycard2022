<?php
session_start(); //used to start the session - has to be on the first line

//connecting to database
require '../database.php';

if (isset($_SESSION["loggedin"])) { //checks that the user is logged in
	$title = 'User information'; //sets the title
	$content = '
<div class = "login">
<h1> user name </h1>
<p> John Doe <p>
</div>
';//sets the content inside the page
}
else { //displays an access denied if the user is not logged in
  $title = 'Access denied';
  $content = 'Access denied';
}
require '../templates/layout.html.php'; //loads layout.php which contains the layout for the page
?>
