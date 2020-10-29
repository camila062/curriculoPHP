<?php

//Header
include_once "paginas/includes/header2.php";

//Páginas

$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'inicial':
            include_once "paginas/inicial.php";
            break;

        default:
            # code...
            break;
    }
} else {
    include_once "paginas/inicial.php";
}



//Footer
include_once "paginas/includes/footer2.php";
