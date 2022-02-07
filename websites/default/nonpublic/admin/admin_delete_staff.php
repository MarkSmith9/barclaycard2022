<?php require '../nonpublic/utils/pdo.php';?>
<?php require '../nonpublic/utils/functions.php';?>

<?php 
      if(isset($_POST['submit'])) {

            delete($pdo, 'users', 'id', $_GET['id']);
      }
      echo '<script type="text/JavaScript">window.location.replace("personal_page.php?page=staff")</script>';
?>
