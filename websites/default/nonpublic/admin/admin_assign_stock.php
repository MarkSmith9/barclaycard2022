<?php require '../nonpublic/utils/pdo.php'?>

<?php 

if(isset($_POST['submit'])) {
    $stmt = $pdo->prepare('INSERT INTO sys.branch_stocks (branch, stock, quantity)
                                           VALUES(:branch, :stock, :quantity)');
    $values = [
        'branch' => $_POST['branch'],
        'stock' => $_POST['stock'],
        'quantity' => $_POST['quantity']
        ];
    $stmt->execute($values);


    echo '<script type="text/JavaScript">window.location.replace("personal_page.php?page=profile_lot&id='.$_GET['id'].'")</script>';

print_r($_POST);

}


?>


<!-- Array ( [branch] => 1 [stock] => 10 [quantity] => 22 [submit] => Transfer ) -->