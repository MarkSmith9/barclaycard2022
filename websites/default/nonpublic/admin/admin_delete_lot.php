<?php require '../nonpublic/utils/pdo.php';?>


<?php 
      if(isset($_POST['submit'])) {

            $stmt = $pdo->prepare('DELETE FROM sys.items 
                                    WHERE id= :id LIMIT 1');

            $values = [
                  'id' => $_GET['id'],
            ];
       
            $stmt->execute($values);
      }

      echo '<script type="text/JavaScript">window.location.replace("personal_page.php?page=lot")</script>';

 
      
    //   header('Location: personal_page.php?page=staff')
    //   echo '<button class="btn btn-lg btn-primary" onclick="window.location.href=\'personal_page.php?page=staff\'">User deleted succesfuly</button>';
      
?>
