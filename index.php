<?php

    include_once __DIR__ . '/models/accessories.php';
    include_once __DIR__ . '/models/categories.php';
    include_once __DIR__ . '/models/products.php';
    include_once __DIR__ . '/models/petFood.php';
    include_once __DIR__ . '/models/toys.php';

    $fishfood = new Food('img/fishFood.jpg', 'Mangime per pesci', 2.95, 'Pesce', 30, 'Pesci e sotto prodotti dei pesci, Cerelai, Alghe');
    $almoNature = new Food('img/petfood_2.jpg', 'Royal Canin Mini Adult ', 43.99, 'Cane', 545, 'Prosciutto e riso');
    $almoHolistic = new Food('img/petfood.jpeg', 'Almo Nature Holistc ', 44.99, 'Cane', 600, 'Manzo e Cereali');
    $kong = new Toys('img/kong.jpg', 'Kong classic', 13.49, 'Cane', 'Rimabalza e Galleggia', 10);
    $mouse = new Toys('img/topo.jpg', 'Topini di Peluche', 4.99, 'Gatto', 'Morbido con codina in corda', 8);
    $voliera = new Accessories('img/voliera.webp', 'Voliera', 184.99, 'Uccello', 'legno', 153);
    
    $Product = [
        $fishfood,
        $almoNature,
        $kong,
        $voliera,
        $mouse,
        $almoHolistic
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Boolshop</title>
</head>
<body>
    <h1 class="text-center">Boolshop</h1>
    <div>
        <div class="d-flex justify-content-center flex-wrap gap-3 p-3">
            <?php foreach ($Product as $articles) : ?>
                <div class="card">
                    <div>
                        <img style="width: 300px;" src="<?php echo $articles->img ?>">
                    </div>
                    <?php foreach ($articles as $key => $articles) : ?>
                        <p class="p-1"><?php echo $articles ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>