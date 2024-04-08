<?php
require_once 'Controller/MainController.controller.php';
$mainController = new MainController();
try {
    if (empty($_GET['page'])) {
        $page = 'accueil'; // "acceuil" corrigé en "accueil"
    } else {
        $url = explode('/', filter_var($_GET['page'], FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch ($page) {
        case 'accueil':
            $mainController->acceuil(); // "acceuil" corrigé en "accueil"

            break;
        case 'page1':
            $mainController->page1(); // "page1" corrigé en "page1"
            break;
        case 'page2':
            $mainController->page2();
            break;
        case 'page3':
            $mainController->page3();
            break;
        default:
            throw new Exception('Page introuvable');
    }
} catch (Exception $e) {
    $mainController->pageErreur($e->getMessage());
}


/* require 'layouts/base.php'; */
