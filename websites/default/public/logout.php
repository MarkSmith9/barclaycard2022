<?php
session_start();

//unseting the SESSION variables made on login

      unset($_SESSION['access']);
      unset($_SESSION['name']);
      unset($_SESSION['userid']);
      unset($_SESSION['fname']);


      header('Location: index.php');
?>

</body>
</html>