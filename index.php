<?php
// richiedo la classe Product
require_once __DIR__ .'/Models/Product.php';
// richiedo la classe Food
require_once __DIR__ .'/Models/Food.php';

$meat = new Food('Royal Canin', 3, 6, 'Carne');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
</head>
<body>
    <h2><?php echo $meat->get_name() ?></h2>
    <p><?php echo $meat->get_weight() ?></p>
</body>
</html>