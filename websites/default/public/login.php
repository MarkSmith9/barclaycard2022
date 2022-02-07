<?php session_start();?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Phillip's Cheese</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="assets/css/login.css" rel="stylesheet">

</head>

<body class="text-center">

    <main class="form-signin">
        <?php 
require '../nonpublic/utils/pdo.php';



if (isset($_POST['submit'])) {
  if($_POST['email'] !=''&& $_POST['password'] !=''){

      $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
      $values = [
            'email' => $_POST['email'],
      ];

      $stmt->execute($values);

      $user = $stmt->fetch();

      if($user!=null && password_verify($_POST['password'], $user['password']))  {
            //if the login is ok - we set some SESION variables used across the website
            $_SESSION['access'] = $user['access'];
            $_SESSION['name'] = $user['fname'].' '.$user['lname'];
            $_SESSION['userid'] = $user['id'];
            $_SESSION['fname']= $user['fname'];

            echo '<h3 class="centerMessage">Welcome back '.$user['fname'].' '.$user['lname'].'!!!</h3>';
            echo '<button class="btn btn-lg btn-primary" type="button" onclick="parent.location=\'index.php\'">Take me to the website</button>';

      }
      else {
        $welcome_message = 'Invalid email or password';
        require './forms/login_form.php';
      }
  }
  else {
    $welcome_message = 'Please enter email and password';

    require './forms/login_form.php';

  }
}




else { 
  $welcome_message = 'Please log in';
  require './forms/login_form.php';
}
?>
    </main>
</body>

</html>