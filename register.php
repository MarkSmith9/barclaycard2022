<?php
session_start(); //used to start the session
$title = 'Northampton News - Register'; //sets the title
//sets the content
$content = '
<form action="register.php" method="POST">
<label>Please make a username: </label> <input type="username" name="username" required/>
<label>Please make a password: </label> <input type="password" name="password" required/>
<label>e-mail </label> <input type="email" name="email"/>
<input type="submit" name="submit" value="Submit" />
</form>
';
//an if statement to only execute code if the user has filled in all of the fields
if (!empty($_POST['email']) && ($_POST['username']) && ($_POST['password'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $hash = password_hash($_POST['password'], PASSWORD_DEFAULT); //the passwords are hashed for security reasons and POST is used in order to keep them from appearing in the URL
  //code to connect to the database
  $server = 'v.je';
  $dbusername = 'student';
  $dbpassword = 'student';
  $schema = 'csy2028';
  $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $dbusername, $dbpassword,
  [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
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
  echo '<script>alert("registration succesful")</script>';
}
if (isset($_POST['submit'])) {
  if (empty($_POST['email']) or ($_POST['username']) or ($_POST['password'])) {
  }}
  require '../layout.php'; //gets content.php which provides the layout. It is outside of the public folder as users should not directly access it
  ?>
