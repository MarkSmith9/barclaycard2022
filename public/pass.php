<?php
	$title = 'Reset password'; //sets the title
	$content = '
<div class = "login">
 <img src="image/logo.svg" alt="logo">
	<h1> Reset password </h1>
<div class = "login">
 <form action="login.php" method="POST">
 <label>Username: </label>
 <input required type="text" name="username" />
 <label>e-mail: </label>
 <input required type="email" name="email" />
<br>
</form>
</div>
 <input required type="submit" name="submit" class="button" value="Request password reset" />
<form action="index.php">
    <input type="submit" class="button" value="Go back" />
</div>';//sets the content inside the page
require '../templates/login.html.php'; //loads layout.php which contains the layout for the page
?>
