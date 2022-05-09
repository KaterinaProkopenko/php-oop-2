<?php
    include_once __DIR__ . "/date/Buy.php";
    include_once __DIR__ . "/date/Product.php";
    include_once __DIR__ . "/date/Alimentation.php";
    include_once __DIR__ . "/date/VeterinaryDiet.php";

    $catThing = new Product('lettiera', 'RC', 2.44, 'cat');
    var_dump($catThing);

    $dogFood = new Alimentation('cibo umido', '100g', true, false, 'Bocconcini in salsa', 'RC', 1.99, 'dog');
    var_dump($dogFood);
?>