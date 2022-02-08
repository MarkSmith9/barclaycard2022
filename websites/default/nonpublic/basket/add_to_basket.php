<?php require '../nonpublic/utils/pdo.php';?>
<?php require '../nonpublic/utils/functions.php';?>


<?php
$stmt = $pdo->prepare('INSERT INTO sys.basket (product, quantity, price)
VALUES(:product, :quantity, :price)');

$values = [
'product' => $_GET['product'],
'quantity' => 1 ,
'price' => $_GET['price']                
];

$stmt->execute($values);



// print_r($_GET);

// Array ( [page] => add_to_basket [product] => 10 [price] => 12 )
echo '<script type="text/JavaScript">window.location.replace("index.php#pricing")</script>';
