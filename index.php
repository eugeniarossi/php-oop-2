<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';

$category_cat = new Category('Cat', '<i class="fa-solid fa-cat"></i>');
$category_dog = new Category('Dog', '<i class="fa-solid fa-dog"></i>');
$category_fish = new Category('Fish', '<i class="fa-solid fa-fish"></i>');
$category_bird = new Category('Bird', '<i class="fa-solid fa-dove"></i>');

//var_dump($category_cat, $category_dog, $category_fish, $category_bird);

$product1 = new Product(10, 'Guinzaglio', 'Lorem ipsum', $category_dog, 15.99, '#');



$product2 = new Product(20, 'Osso di gomma', 'Lorem ipsum', $category_dog, 5.99, '#');


$product3 = new Food(30, 'Croccantini', 'Lorem ipsum', $category_cat, 10.99, '#');

$product3->set_ingredients('pollo, cartone, manzo'); // per evitare di definire un nuovo costruttore in food

$products = [
    $product1,
    $product2,
    $product3
];

//var_dump($product3);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/disrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Pet Shop</h1>
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-12 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->get_name() ?></h5>
                            <p class="card-text"><?php echo $product->get_description() ?></p>

                            <?php if (method_exists($product, 'get_ingredients')) : ?> <!-- se il metodo esiste stampa ingredients -->
                                <p class="card-text"><?php
                                                        /** @var Food $product */  //elimina errore intelephense
                                                        echo $product->get_ingredients();
                                                        ?></p>
                            <?php endif; ?>
                            <p class="card-text"><?php echo $product->get_description() ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
        </div>
</body>

</html>