<?php
require_once __DIR__ . "/classes/Products.php";
require_once __DIR__ . "/classes/Foods.php";
require_once __DIR__ . "/classes/Games.php";
require_once __DIR__ . "/classes/Accessories.php";
require_once __DIR__ . "/classes/Categories.php";

$urlList = [
    "https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg",
    "https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg",
    "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg",
    "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg",
    "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg",
    "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg",
    "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg",
    "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg"
];
//var_dump($urlList);

$productUrl1 =  $urlList[0];
$productUrl2 = $urlList[1];
$productUrl3 =  $urlList[2];
$productUrl4 = $urlList[3];
$productUrl5 =  $urlList[4];
$productUrl6 = $urlList[5];
$productUrl7 =  $urlList[6];
$productUrl8 = $urlList[7];

$prodotto1 = new Foods("Royal Canin Mini Adult", new Categories("dog", "Cane"), "43.99",  $productUrl1, "prosciutto e riso", "545");
$prodotto2 = new Foods("Almo Nature Holistic Maintenance", new Categories("dog", "Cane"), "44.99", $productUrl2, "manzo e cereali", "600");
$prodotto3 = new Foods("Almo daily menu cat ", new Categories("cat", "Gatto"), "34.99",  $productUrl3, "pollo , tonno , prosciutto", "400");
$prodotto4 = new Foods("Mangime per Pesci Guppy in Fioccgu", new Categories("fish", "Pesce"), "2,95", $productUrl4, "Pesci e sottoprodotti dei pesci , Cereali , lieviti , Alghe", "30");
$prodotto5 = new Accessories("Voliera Wilma in Legno ", new Categories("kiwi-bird", "Uccello"), "184,99",  $productUrl5, "M: L 83x P 67 x H 153 cm", "Legno");
$prodotto6 = new Accessories("Cartucce Filtranti per Filtro EasyCrystal", new Categories("fish", "Pesce"), "2,29", $productUrl6, "ND", "Materiale Espanso");
$prodotto7 = new Games("Kong Classic ", new Categories("dog", "Cane"), "13.49",  $productUrl7, "Galleggia e rimbalza", "8,5 cm x 10 cm");
$prodotto8 = new Games("Topini di peluche Trixie", new Categories("cat", "Gatto"), "4,99", $productUrl8, "Morbido con la codina in corda", "8,5 cm x 10 cm");

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <header class="container text-center">
        <h1>BoolShop</h1>
    </header>
    <main class="container">
        <div class="row">
            <h2 class="col-12">
                I nostri Prodotti
            </h2>
            <article class="col-4 mb-3">
                <div class=" card h-100 ">
                    <img src=" <?php echo $prodotto1->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h2> <?php echo $prodotto1->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodotto1->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodotto1->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodotto1->getPrice() ?> €</p>
                        <p class="card-text">Ingredienti : <?php echo $prodotto1->getIngridients() ?></p>
                        <p> Peso : <?php echo $prodotto1->getWeight() ?> g</p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100 ">
                    <img src="<?php echo $prodotto2->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body flex-grow-1">
                        <h2> <?php echo $prodotto2->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodotto2->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodotto2->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodotto2->getPrice() ?>€</p>
                        <p class="card-text">Ingredienti : <?php echo $prodotto2->getIngridients() ?></p>
                        <p> Peso : <?php echo $prodotto2->getWeight() ?> g</p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100">
                    <img src="<?php echo $prodotto3->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto3->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodotto3->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodotto3->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodotto3->getPrice() ?>€</p>
                        <p class="card-text">Ingredienti : <?php echo $prodotto3->getIngridients() ?></p>
                        <p> Peso : <?php echo $prodotto3->getWeight() ?> g</p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100">
                    <img src="<?php echo $prodotto4->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto4->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodotto4->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodotto4->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodotto4->getPrice() ?> €</p>
                        <p class="card-text">Ingredienti : <?php echo $prodotto4->getIngridients() ?></p>
                        <p> Peso : <?php echo $prodotto4->getWeight() ?> g</p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100">
                    <img src="<?php echo $prodotto5->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto5->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodotto5->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodotto5->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodotto5->getPrice()  ?>€</p>
                        <p>Materiale : <?php echo $prodotto5->getMaterials() ?></p>
                        <p class="card-text"> Dimensioni : <?php echo $prodotto5->getDimension() ?></p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100">
                    <img src="<?php echo $prodotto6->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto6->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodotto6->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodotto6->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodotto6->getPrice()  ?>€</p>
                        <p>Materiale : <?php echo $prodotto6->getMaterials() ?></p>
                        <p class="card-text"> Dimensioni : <?php echo $prodotto6->getDimension() ?></p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100">
                    <img src="<?php echo $prodotto7->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto7->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodotto7->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodotto7->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodotto7->getPrice() ?> €</p>
                        <p> Caratteristica : <?php echo $prodotto7->getFeature() ?></p>
                        <p class="card-text"> Dimensioni : <?php echo $prodotto7->getDimension() ?></p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100">
                    <img src="<?php echo $prodotto8->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodotto8->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodotto8->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodotto8->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodotto8->getPrice() ?> €</p>
                        <p>Caratteristica : <?php echo $prodotto8->getFeature() ?></p>
                        <p class="card-text"> Dimensioni : <?php echo $prodotto8->getDimension() ?></p>
                    </div>
                </div>
            </article>
        </div>
    </main>
</body>

</html>