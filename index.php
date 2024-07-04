<?php
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Game.php";
require_once __DIR__ . "/classes/Accessory.php";
require_once __DIR__ . "/classes/Category.php";

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

$dog = new Category('dog', 'Cane');
$cat = new Category('cat', 'Gatto');
$fish = new Category('fish', 'Pesce');
$bird = new Category('kiwi-bird', 'Uccello');

$prodottoOne = new Foods("Royal Canin Mini Adult", $dog, "43.99",  $productUrlOne, "prosciutto e riso", "545");
$prodottoTwo = new Foods("Almo Nature Holistic Maintenance", $dog, "44.99", $productUrlTwo, "manzo e cereali", "600");
$prodottoThree = new Foods("Almo daily menu cat ", $cat, "34.99",  $productUrlThree, "pollo , tonno , prosciutto", "400");
$prodottoFour = new Foods("Mangime per Pesci Guppy in Fioccgu", $fish, "2,95", $productUrlFour, "Pesci e sottoprodotti dei pesci , Cereali , lieviti , Alghe", "30");
$prodottoFive = new Accessories("Voliera Wilma in Legno ", $bird, "184,99",  $productUrlFive, "M: L 83x P 67 x H 153 cm", "Legno");
$prodottoSix = new Accessories("Cartucce Filtranti per Filtro EasyCrystal", $fish, "2,29", $productUrlSix, "ND", "Materiale Espanso");
$prodottoSeven = new Games("Kong Classic ", $dog, "13.49",  $productUrlSeven, "Galleggia e rimbalza", "8,5 cm x 10 cm");
$prodottoEight = new Games("Topini di peluche Trixie", $cat, "4,99", $productUrlEight, "Morbido con la codina in corda", "8,5 cm x 10 cm");

$productList = [$prodottoOne, $prodottoTwo, $prodottoThree, $prodottoFour, $prodottoFive, $prodottoSix,  $prodottoSeven, $prodottoEight];
// var_dump($prodottoOne);
// var_dump($prodottoTwo);

// var_dump($prodottoOne->getName());

// var_dump($prodottoOne->getCategory());

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

            <?php foreach ($productList as $prodotto) : ?>
                <?php if ($prodotto instanceof Foods) { ?>
                    <article class="col-4 mb-3">

                        <div class="card h-100">
                            <img src="<?php echo $prodotto->getImg(); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2> <?php echo $prodotto->getName() ?></h2>
                                <div class="mb-2">
                                    <i class="fa-solid fa-<?php echo $prodotto->getCategory()->getIcon(); ?>"></i>
                                    <span><?php echo $prodotto->getCategory()->getName(); ?></span>
                                </div>
                                <p>Price : <?php echo $prodotto->getPrice() ?> €</p>
                            </div>
                        </div>
                    </article>
                <?php } elseif ($prodotto instanceof Accessories) {  ?>

                    <article class="col-4 mb-3">
                        <div class="card h-100">
                            <img src="<?php echo $prodotto->getImg(); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2> <?php echo $prodotto->getName() ?></h2>
                                <div class="mb-2">
                                    <i class="fa-solid fa-<?php echo $prodotto->getCategory()->getIcon(); ?>"></i>
                                    <span><?php echo $prodotto->getCategory()->getName(); ?></span>
                                </div>
                                <p>Price : <?php echo $prodotto->getPrice()  ?>€</p>
                                <p>Materiale : <?php echo $prodotto->getMaterials() ?></p>
                                <p class="card-text"> Dimensioni : <?php echo $prodotto->getDimension() ?></p>
                            </div>
                        </div>
                    </article>
                <?php } elseif ($prodotto instanceof Games) {  ?>
                    <article class="col-4 mb-3">
                        <div class="card ">
                            <img src="<?php echo $prodotto->getImg(); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2> <?php echo $prodotto->getName() ?></h2>
                                <div class="mb-2">
                                    <i class="fa-solid fa-<?php echo $prodotto->getCategory()->getIcon(); ?>"></i>
                                    <span><?php echo $prodotto->getCategory()->getName(); ?></span>
                                </div>
                                <p>Price : <?php echo $prodotto->getPrice() ?> €</p>
                                <p>Caratteristica : <?php echo $prodotto->getFeature() ?></p>
                                <p class="card-text"> Dimensioni : <?php echo $prodotto->getDimension() ?></p>
                            </div>
                        </div>
                    </article>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>