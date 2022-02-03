<?php
session_start(); //used to start the session - has to be on the first line

//connecting to database
require '../database.php';

$title = 'WUC - Log in';

  if (isset($_POST["submit"])) {
    $stmt = $pdo->prepare('SELECT * FROM user WHERE email = :email');
      //user input is inserted on the way to prevent SQL injection
      $values = [
        'email' => $_POST['email'],
      ];
      $stmt->execute($values); //execute the query
      $user = $stmt->fetch(); //fetch the user array
      if (password_verify($_POST['password'], $user[1])) { //verifies that the password is correct
      
        $content =  'log in successful'; //notifies the user that they are logged in
        $_SESSION["loggedin"] = "yes"; //sets the session variable loggedin to true in order to tell other sites that the user is logged in

        $_SESSION["email"] = $_POST['email']; //also stores the email in session in case it is needed
        header("Location: splash.php"); // directs you to the splash page when successfully logged in
        die(); //added for security
        if (isset($user['admin'])) {
          $_SESSION["admin"] ="admin";

        }
      }
        
      else{

        $content = 'The email or password was incorrect'; //if there is no such account they are also notified
    
  }
}

else{

  $content = '
 <div class = "login">
 <img src="image/logo.svg" alt="logo">
 <h2>Log in</h2>
 <form action="index.php" method="POST">
 <label>email: </label>
 <input required type="text" name="email" />
 <label>Password: </label>
 <input required type="password" name="password" />
<br>
 <input required type="submit" name="submit" class="button" value="Log In" />
<p> <a href="pass.php">Forgot Password?</a> </p>
</div>
</form> <div class="bottom login">
<p>©2020-2021 Woodlands University College. All Rights Reserved.</p> <br>
<p> <a href="tutorial.php">Help</a> </p>
<p> <a href="privacy.php">Privacy Policy</a> </p>
<p> <a href="tos.php">Terms of Service</a> </p>
</div>
';
 }

require '../templates/login.html.php'; //gets content.php which provides the layout. It is outside of the public folder as users should not directly access it
?>
