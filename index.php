<?php

    include_once __DIR__ . '/models/accessories.php';
    include_once __DIR__ . '/models/categories.php';
    include_once __DIR__ . '/models/products.php';
    include_once __DIR__ . '/models/petFood.php';
    include_once __DIR__ . '/models/toys.php';

    $fishfood = new Food('img/fishFood.jpg', 'Mangime per pesci', 2.95, 'Pesce', 30, 'Pesci e sotto prodotti dei pesci, Cerelai, Alghe');
    $almoNature = new Food('img/petfood_2.jpg', 'Royal Canin Mini Adult ', 43.99, 'Cane', 545, 'Prosciutto e riso');
    $almoHolistic = new Food('img/petfood.jpg', 'Almo Nature Holistc ', 44.99, 'Cane', 600, 'Manzo e Cereali');
    $kong = new Toys('img/kong.jpg', 'Kong classic', 13.49, 'Cane', 'Rimabalza e Galleggia', 10);
    $mouse = new Toys('img/topo.jpg', 'Topini di Peluche', 4.99, 'Gatto', 'Morbido con codina in corda', 8);
    $voliera = new Accessories('img/voliera.webp', 'Voliera', 184.99, 'Uccello', 'legno', 153);
    

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
    <h1>Boolshop</h1>
</body>
</html>