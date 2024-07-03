<?php
require_once __DIR__ . "/classes/Products.php";
require_once __DIR__ . "/classes/Foods.php";
require_once __DIR__ . "/classes/Games.php";
require_once __DIR__ . "/classes/Accessories.php";
require_once __DIR__ . "/classes/Categories.php";


$prodotto1 = new Games("Palla rimbalzante ", new Categories("cane", "doggo"), "14.99", "https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg", "palla di gomma che rimbalza");
$prodotto2 = new Foods("cibo per gatti ducky-duck", new Categories("gatto", "catto"), "2,99", "https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg", "carne di manzo e vitello", "200gr");
// var_dump($prodotto1);
// var_dump($prodotto2);

// var_dump($prodotto1->getName());

// var_dump($prodotto1->getCategories());

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <header class="container text-center">
        <h1>BoolShop</h1>
    </header>
    <main class="container">
        <div class="row">
            <p class="col-12">
                Ours Splendid Animals Product
            </p>
            <article class="col-4 mb-3">
                <div class="card">
                    <img src="<?php echo $prodotto1->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto1->getName() ?></h2>
                        <h3> Categories empty for now </h3>
                        <p>Price : <?php echo $prodotto1->getPrice() ?></p>
                        <p class="card-text"><?php echo $prodotto1->getFeature() ?></p>
                    </div>
                </div>
            </article>
            <article class="col-4">
                <div class="card">
                    <img src="<?php echo $prodotto1->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto1->getName() ?></h2>
                        <h3> Categories empty for now </h3>
                        <p>Price : <?php echo $prodotto1->getPrice() ?></p>
                        <p class="card-text"><?php echo $prodotto1->getFeature() ?></p>
                    </div>
                </div>
            </article>
            <article class="col-4">
                <div class="card">
                    <img src="<?php echo $prodotto1->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto1->getName() ?></h2>
                        <h3> Categories empty for now </h3>
                        <p>Price : <?php echo $prodotto1->getPrice() ?></p>
                        <p class="card-text"><?php echo $prodotto1->getFeature() ?></p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card">
                    <img src="<?php echo $prodotto1->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto1->getName() ?></h2>
                        <h3> Categories empty for now </h3>
                        <p>Price : <?php echo $prodotto1->getPrice() ?></p>
                        <p class="card-text"><?php echo $prodotto1->getFeature() ?></p>
                    </div>
                </div>
            </article>
            <article class="col-4">
                <div class="card">
                    <img src="<?php echo $prodotto1->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto1->getName() ?></h2>
                        <h3> Categories empty for now </h3>
                        <p>Price : <?php echo $prodotto1->getPrice() ?></p>
                        <p class="card-text"><?php echo $prodotto1->getFeature() ?></p>
                    </div>
                </div>
            </article>
            <article class="col-4">
                <div class="card">
                    <img src="<?php echo $prodotto1->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto1->getName() ?></h2>
                        <h3> Categories empty for now </h3>
                        <p>Price : <?php echo $prodotto1->getPrice() ?></p>
                        <p class="card-text"><?php echo $prodotto1->getFeature() ?></p>
                    </div>
                </div>
            </article>
            <article class="col-4">
                <div class="card">
                    <img src="<?php echo $prodotto1->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto1->getName() ?></h2>
                        <h3> Categories empty for now </h3>
                        <p>Price : <?php echo $prodotto1->getPrice() ?></p>
                        <p class="card-text"><?php echo $prodotto1->getFeature() ?></p>
                    </div>
                </div>
            </article>
            <article class="col-4">
                <div class="card">
                    <img src="<?php echo $prodotto1->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto1->getName() ?></h2>
                        <h3> Categories empty for now </h3>
                        <p>Price : <?php echo $prodotto1->getPrice() ?></p>
                        <p class="card-text"><?php echo $prodotto1->getFeature() ?></p>
                    </div>
                </div>
            </article>
        </div>
    </main>
</body>

</html>