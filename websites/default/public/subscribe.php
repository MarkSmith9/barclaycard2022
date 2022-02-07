<?php
session_start();
require '../nonpublic/utils/head.php';


if(isset($_SESSION['access'])){
      if(isset($_POST['submit'])) {
            if($_POST['email']!='') {
                  try {                 
                  addSubscriber();
                  echo '<h3 class="text-center my-3 centerMessage">Thank you for subscription '.$_POST['email'].'</h3>';
                  echo '<form class="text-center" action="index.php"><button style="width: 200px" class="btn btn-lg btn-primary">Back to Fotheby\'s</button></form>';                  }
                  catch (Exception $e) {
                        unset($_POST['email']);
                        echo '<h3 class="text-center my-3 centerMessage">Thank you, but you\'re already subscribed</h3>';
                        echo '<form class="text-center" action="index.php"><button style="width: 200px" class="btn btn-lg btn-primary">Back to Fotheby\'s</button></form>';
                      }
            } else{
                  echo '<h3 class="text-center my-3 centerMessage">You need to provide a valid email address</h3>';
                  echo '<form class="text-center" action="index.php"><button class="btn btn-sm btn-primary" type="button" onclick="history.back();">Back to Fotheby\'s</button></form>';
            }
      } else echo 'nu2';
} else {
      echo '<h3 class="text-center my-3 centerMessage">Invalid operation</h3>';
      echo '<form class="text-center" action="login.php"><button style="width: 200px" class="btn btn-lg btn-primary">Please log in</button></form>';
  }


?>

<?php
function addSubscriber(){
    require '../nonpublic/utils/pdo.php';
    $stmt = $pdo->prepare('INSERT INTO sys.subscribe (email)
    VALUES(:email)');
    $values = [
          'email' => $_POST['email']
    ];
    $stmt->execute($values);
};
?>