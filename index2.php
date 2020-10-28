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
        case 'educacao':
            include_once "paginas/educacao.php";
            break;
        case 'empresa1':
            include_once "paginas/empresa1.php";
            break;
        case 'empresa2':
            include_once "paginas/empresa2.php";
            break;
        case 'empresa3':
            include_once "paginas/empresa3.php";
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
