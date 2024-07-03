<?php
require_once __DIR__ . "/classes/Products.php";
require_once __DIR__ . "/classes/Foods.php";
require_once __DIR__ . "/classes/Games.php";
require_once __DIR__ . "/classes/Accessories.php";


$prodotto1 = new Games("Palla rimbalzante ", "cane", "14.99", "palla di gomma che rimbalza");
$prodotto2 = new Foods("cibo per gatti ducky-duck", "gatto", "2,99", "carne di manzo e vitello", "200gr");
var_dump($prodotto1);
var_dump($prodotto2);
