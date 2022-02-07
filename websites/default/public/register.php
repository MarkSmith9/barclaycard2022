<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Footheby's</title>
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

<?php 
require '../nonpublic/utils/pdo.php';

?>

<body class="text-center">

    <main class="form-signin">

        <?php 

try {
  if(isset($_POST['submit'])) {

    if($_POST['fname'] !='' && $_POST['lname'] !='' && $_POST['email'] !='' && $_POST['password'] !=''){
          $stmt = $pdo->prepare('INSERT INTO sys.users (fname, lname, email, phone, access, password)
                      VALUES(:fname, :lname, :email, :phone, :access, :password)');
          $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);

          $values = [
                'fname' => $_POST['fname'],
                'lname' => $_POST['lname'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'access' => 1,
                'password' => $passwordHash
          ];
    
          $stmt->execute($values);

          echo '<h3 class="centerMessage">Registration complete!</h3>';
          echo '<form action="login.php"><button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Take me to the Log in</button></form>';
        } else {
        $welcome_message= 'You need to enter all values';
        require './forms/register_form.php';

    }
}

else {
  $welcome_message= 'Welcome to registration page';
  require './forms/register_form.php';
}

}

catch (Exception $e) {
  echo $e;
  unset($_POST['email']);
  $welcome_message= 'INVALID EMAIL ADDRESS';
  require './forms/register_form.php';

}
      
?>

    </main>
</body>

</html>