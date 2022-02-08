<?php


$_SESSION['basket'][] = [$_GET['product'], 1, $_GET['price']] ;


// if(isset($_SESSION['basket'])){
//     array_push ($_SESSION['basket'], [$_GET['product'], 1, $_GET['price']] );

// }else $_SESSION['basket'];

echo '<script type="text/JavaScript">window.location.replace("index.php#pricing")</script>';
