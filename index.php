<?php
    include_once __DIR__ . "/date/Product.php";
    include_once __DIR__ . "/date/Alimentation.php";
    include_once __DIR__ . "/date/User.php";
    include_once __DIR__ . "/date/CreditCard.php";

    /**
     * 1) Scegli un prodotto;
     * 2) Inserisci la tua carta di credito;
     * 3) Inserisci i tuoi dati personali;
     * 4) Compri il prodotto scelto;
     */

    $bocconcini = new Alimentation('cibo umido', '85g', true, true, 'Bocconcini in salsa', 'RC', 1.29, 'Migliori bocconcini in salsa');
    var_dump($bocconcini);

    $card = new CreditCard(45214521365789210, 2025);

    $user = new User('Pippo', 'Pluto', 'pippo@gmail.com', false, $card);

    echo $user->buyProduct($bocconcini);
?>