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

$productUrlOne =  $urlList[0];
$productUrlTwo = $urlList[1];
$productUrlThree =  $urlList[2];
$productUrlFour = $urlList[3];
$productUrlFive =  $urlList[4];
$productUrlSix = $urlList[5];
$productUrlSeven =  $urlList[6];
$productUrlEight = $urlList[7];

$dog = new Categories('dog', 'Cane');
$cat = new Categories('cat', 'Gatto');
$fish = new Categories('fish', 'Pesce');
$bird = new Categories('kiwi-bird', 'Uccello');

$prodottoOne = new Foods("Royal Canin Mini Adult", $dog, "43.99",  $productUrlOne, "prosciutto e riso", "545");
$prodottoTwo = new Foods("Almo Nature Holistic Maintenance", $dog, "44.99", $productUrlTwo, "manzo e cereali", "600");
$prodottoThree = new Foods("Almo daily menu cat ", $cat, "34.99",  $productUrlThree, "pollo , tonno , prosciutto", "400");
$prodottoFour = new Foods("Mangime per Pesci Guppy in Fioccgu", $fish, "2,95", $productUrlFour, "Pesci e sottoprodotti dei pesci , Cereali , lieviti , Alghe", "30");
$prodottoFive = new Accessories("Voliera Wilma in Legno ", $bird, "184,99",  $productUrlFive, "M: L 83x P 67 x H 153 cm", "Legno");
$prodottoSix = new Accessories("Cartucce Filtranti per Filtro EasyCrystal", $fish, "2,29", $productUrlSix, "ND", "Materiale Espanso");
$prodottoSeven = new Games("Kong Classic ", $dog, "13.49",  $productUrlSeven, "Galleggia e rimbalza", "8,5 cm x 10 cm");
$prodottoEight = new Games("Topini di peluche Trixie", $cat, "4,99", $productUrlEight, "Morbido con la codina in corda", "8,5 cm x 10 cm");

// var_dump($prodottoOne);
// var_dump($prodottoTwo);

// var_dump($prodottoOne->getName());

// var_dump($prodottoOne->getCategories());

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
                    <img src=" <?php echo $prodottoOne->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h2> <?php echo $prodottoOne->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodottoOne->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodottoOne->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodottoOne->getPrice() ?> €</p>
                        <p class="card-text">Ingredienti : <?php echo $prodottoOne->getIngridients() ?></p>
                        <p> Peso : <?php echo $prodottoOne->getWeight() ?> g</p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100 ">
                    <img src="<?php echo $prodottoTwo->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body flex-grow-1">
                        <h2> <?php echo $prodottoTwo->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodottoTwo->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodottoTwo->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodottoTwo->getPrice() ?>€</p>
                        <p class="card-text">Ingredienti : <?php echo $prodottoTwo->getIngridients() ?></p>
                        <p> Peso : <?php echo $prodottoTwo->getWeight() ?> g</p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100">
                    <img src="<?php echo $prodottoThree->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodottoThree->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodottoThree->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodottoThree->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodottoThree->getPrice() ?>€</p>
                        <p class="card-text">Ingredienti : <?php echo $prodottoThree->getIngridients() ?></p>
                        <p> Peso : <?php echo $prodottoThree->getWeight() ?> g</p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100">
                    <img src="<?php echo $prodottoFour->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodottoFour->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodottoFour->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodottoFour->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodottoFour->getPrice() ?> €</p>
                        <p class="card-text">Ingredienti : <?php echo $prodottoFour->getIngridients() ?></p>
                        <p> Peso : <?php echo $prodottoFour->getWeight() ?> g</p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100">
                    <img src="<?php echo $prodottoFive->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodottoFive->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodottoFive->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodottoFive->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodottoFive->getPrice()  ?>€</p>
                        <p>Materiale : <?php echo $prodottoFive->getMaterials() ?></p>
                        <p class="card-text"> Dimensioni : <?php echo $prodottoFive->getDimension() ?></p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100">
                    <img src="<?php echo $prodottoSix->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodottoSix->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodottoSix->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodottoSix->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodottoSix->getPrice()  ?>€</p>
                        <p>Materiale : <?php echo $prodottoSix->getMaterials() ?></p>
                        <p class="card-text"> Dimensioni : <?php echo $prodottoSix->getDimension() ?></p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100">
                    <img src="<?php echo $prodottoSeven->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodottoSeven->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodottoSeven->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodottoSeven->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodottoSeven->getPrice() ?> €</p>
                        <p> Caratteristica : <?php echo $prodottoSeven->getFeature() ?></p>
                        <p class="card-text"> Dimensioni : <?php echo $prodottoSeven->getDimension() ?></p>
                    </div>
                </div>
            </article>
            <article class="col-4 mb-3">
                <div class="card h-100">
                    <img src="<?php echo $prodottoEight->getImg(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2> <?php echo $prodottoEight->getName() ?></h2>
                        <div class="mb-2">
                            <i class="fa-solid fa-<?php echo $prodottoEight->getCategories()->getIcon(); ?>"></i>
                            <span><?php echo $prodottoEight->getCategories()->getName(); ?></span>
                        </div>
                        <p>Price : <?php echo $prodottoEight->getPrice() ?> €</p>
                        <p>Caratteristica : <?php echo $prodottoEight->getFeature() ?></p>
                        <p class="card-text"> Dimensioni : <?php echo $prodottoEight->getDimension() ?></p>
                    </div>
                </div>
            </article>
        </div>
    </main>
</body>

</html>