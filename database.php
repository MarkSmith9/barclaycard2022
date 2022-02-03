<?php
$pdo = new PDO('mysql:host=localhost;dbname=WUC_RMS;charset=utf8', 'student', 'student');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
