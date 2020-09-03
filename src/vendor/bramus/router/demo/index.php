<?php

require_once 'vendor/autoload.php';
require_once "config.php"; 
use \Controller\PersonController;

try {

    In case one is using PHP 5.4's built-in server
    $filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

    if (isset($_POST)) {
        $post = $_POST;
    }

    if (isset($_GET)) {
        $get = $_GET;
    }


$routePatterns = require __DIR__ . '/routes.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/src/View/');

$twig = new \Twig\Environment(
    $loader,[
        'cache' => __DIR__.'/src/View/cache'
    ]
);

$template = $twig->load('main.html');

echo $twig->render('main.html',['the'=>'typo']);

    foreach ($get as $gKey=>$gVal) {
        foreach ($routePatterns as $rpKey=>$rpVal) {
            if (preg_match('/'.$rpKey.'/i', ''.$gKey.'',$matches)) {
                echo $gVal;
                $rpVal($gVal);
            }
        }
    }

} catch (Exception $e) {
    echo 'Выброшено исключение '.$e;
}    