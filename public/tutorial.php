<?php
	$title = 'Tutorial'; //sets the title
	$content = '
<div class = "login">
 <img src="image/logo.svg" alt="logo">
	<h1> Tutorial </h1>
	<h2> Logging in </h2>
<p> to log in enter your username and password provided by the university </p>
<form action="index.php">
    <input type="submit" class="button" value="Go back" />
</form>
</div>';//sets the content inside the page
require '../templates/login.html.php'; //loads layout.php which contains the layout for the page
?>
