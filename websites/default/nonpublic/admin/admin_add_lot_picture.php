<?php require '../nonpublic/utils/pdo.php'?>

<?php 

if(isset($_POST['submit'])) {
    $file = $_FILES['image'];
    $fileName= uniqid('', true).strtolower($_FILES['image']['name']);
    $fileSize = $_FILES['image']['size'];
    move_uploaded_file($_FILES['image']['tmp_name'], 'lot_pictures/'.$fileName);
    $date = date('Y-m-d H:i:s');
    
    $stmt = $pdo->prepare('INSERT INTO sys.pictures (name, item)
                                          VALUES(:name, :item)');
    $values = [
        'name' => $fileName,
        'item' => $_GET['id']
        ];
    $stmt->execute($values);


    echo '<script type="text/JavaScript">window.location.replace("personal_page.php?page=profile_lot&id='.$_GET['id'].'")</script>';

}


?>