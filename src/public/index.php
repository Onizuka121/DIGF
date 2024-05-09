<?php


$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/test':
        require __DIR__ . '/php/test.php';
        break;

    case '/':
        require __DIR__ . '/views/home.html';
        break;
    case '/login':
        require __DIR__ . '/views/login.php';
        break;
    case '/registrazione':
        require __DIR__ . '/views/registrazione.php';
        break;
    case '/home-page':
        require __DIR__ . '/views/home-page.php';
        break;
    case '/aggiungi-metodo-pagamento':
        require __DIR__ . '/views/add-payment.php';
        break;
    case '/home-page-ads':
        require __DIR__ . '/views/add-payment.php';
        break;
    default:
        require __DIR__ . '/views/404.html';
        break;
}