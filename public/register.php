<?php
session_start(); //used to start the session
$title = 'Make an account'; //sets the title

if (!empty($_POST['email']) && ($_POST['username']) && ($_POST['password'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $hash = password_hash($_POST['password'], PASSWORD_DEFAULT); //the passwords are hashed for security reasons and POST is used in order to keep them from appearing in the URL
  require '../database.php';
  //prepares the insert query to add the username password and an email.
  $stmt = $pdo->prepare('INSERT INTO user (email, username, password)
  VALUES (:email, :username, :password)
  ');
  $values = [
    'email' => $_POST['email'],
    'username' => $_POST['username'],
    'password' => $hash,
  ];
  $stmt->execute($values);
  $content = 'registration successful';

if (isset($_POST['submit'])) {
  if (empty($_POST['email']) or ($_POST['username']) or ($_POST['password'])) {
  }
}}
  else{ // else displays content
  //sets the content
$content = '
<form action="register.php" method="POST">
<label>username: </label> <input required type="username" name="username" required/>
<label>password: </label> <input required type="password" name="password" required/>
<label>e-mail </label> <input required type="email" name="email"/>
<input type="submit" name="submit" value="Submit" />
</form>
';
}
require '../templates/layout.html.php'; //gets content.php which provides the layout. It is outside of the public folder as users should not directly access it
?>
