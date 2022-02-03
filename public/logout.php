<?php
session_start();
session_destroy(); //removes the session
header("Location: index.php");
die(); //added for security
 ?>
