<?php
session_start(); //used to start the session - has to be on the first line

//connecting to database
require '../database.php';

if (isset($_SESSION["loggedin"])) { //checks that the user is logged in
	$title = 'Favourites'; //sets the title
	$content = '
<div class = "login">
<h1> Messages </h1>
<h2> Message title <h2>
<p> message content placeholder </p>
<h3> Teacher <h3>
<p> message content placeholder </p>
<h4> Messages <h4>
<p> message content placeholder </p>
</div>
';//sets the content inside the page
}
else { //displays an access denied if the user is not logged in
  $title = 'Access denied';
  $content = 'Access denied';
}
require '../templates/layout.html.php'; //loads layout.php which contains the layout for the page
?>
