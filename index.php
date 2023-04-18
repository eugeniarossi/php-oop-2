<?php
// richiedo la classe Product
require_once __DIR__ . '/Models/Product.php';
// richiedo la classe Category
require_once __DIR__ . '/Models/Category.php';
// richiedo le classi che estendono Product
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Toy.php';

// definisco delle istanze della classe Category
$category_cat = new Category('Cat', '<i class="fa-solid fa-cat"></i>');
$category_dog = new Category('Dog', '<i class="fa-solid fa-dog"></i>');
$category_fish = new Category('Fish', '<i class="fa-solid fa-fish"></i>');
$category_bird = new Category('Bird', '<i class="fa-solid fa-dove"></i>');

//var_dump($category_cat, $category_dog, $category_fish, $category_bird);

/*--------------------- definisco i prodotti -------------------------*/

$product1 = new Accessory(10, 'Guinzaglio', 'Lorem ipsum', $category_dog, 15.99, 'https://picsum.photos/600/600');
$product1->set_materials('cotone, metallo');
$product1->set_size('3 cm x 300 cm');

$product2 = new Toy(20, 'Osso di gomma', 'Lorem ipsum', $category_dog, 5.99, 'https://picsum.photos/600/600');
$product2->set_features('Galleggia e rimbalza');
$product2->set_size('4 cm x 10 cm');

$product3 = new Food(30, 'Croccantini', 'Lorem ipsum', $category_cat, 20.99, 'https://picsum.photos/600/600');
$product3->set_ingredients('pollo, cartone, manzo'); // per evitare di definire un nuovo costruttore in food
$product3->set_weight(2);

$product4 = new Food(50, 'Mangime', 'Lorem ipsum', $category_fish, 20.99, 'https://picsum.photos/600/600');
$product4->set_ingredients('proteine, fibra'); // per evitare di definire un nuovo costruttore in food
$product4->set_weight(0.2);

$product5 = new Accessory(40, 'Collare', 'Lorem ipsum', $category_dog, 14.99, 'https://picsum.photos/600/600');
$product5->set_materials('cotone, metallo');
$product5->set_size('3 cm x 45 cm');

/*--------------------- /definisco i prodotti -------------------------*/

// definisco un array con tutti i prodotti
$products = [
    $product1,
    $product2,
    $product3,
    $product4,
    $product5
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container my-5">
        <h1>Pet Shop</h1>
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-12 col-md-3">
                    <div class="card my-3" style="width: 18rem;">
                        <img src="<?php echo $product->get_image(); ?>" class="card-img-top" alt="#">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $product->get_name() ?></h3>
                            <!-- <h4><?php echo $product->get_category()->get_name(); //chain di due metodi 
                                        ?></h4> -->
                            <h4><?php echo $product->get_category()->get_category_info(); //chain di due metodi 
                                ?></h4>

                            <p class="card-text"><?php echo $product->get_description() ?></p>
                            <!-- Ingredients -->
                            <?php if (method_exists($product, 'get_ingredients')) : ?> <!-- se il metodo esiste stampa ingredients -->
                                <p class="card-text"><?php
                                                        /** @var Food $product */  //elimina errore intelephense
                                                        echo "Ingredienti: {$product->get_ingredients()}";
                                                        ?></p>
                            <?php endif; ?>
                            <!-- /Ingredients -->
                            <!-- Weight -->
                            <?php if (method_exists($product, 'get_weight')) : ?>
                                <p class="card-text"><?php /** @var Food $product */ echo "Peso: {$product->get_weight()} kg"; ?></p>
                            <?php endif; ?>
                            <!-- Weight -->
                            <!-- Materials -->
                            <?php if (method_exists($product, 'get_materials')) : ?>
                                <p class="card-text"><?php echo "Materiali: {$product->get_materials()}"; ?></p>
                            <?php endif; ?>
                            <!-- Materials -->
                            <!-- Features -->
                            <?php if (method_exists($product, 'get_features')) : ?>
                                <p class="card-text"><?php echo "Caratteristiche: {$product->get_features()}"; ?></p>
                            <?php endif; ?>
                            <!-- Features -->
                            <!-- Size -->
                            <?php if (method_exists($product, 'get_size')) : ?>
                                <p class="card-text"><?php echo "Dimensioni: {$product->get_size()}"; ?></p>
                            <?php endif; ?>
                            <!-- Size -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>