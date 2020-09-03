<?php

require_once 'vendor/autoload.php';
require_once "config.php"; 
require __DIR__ . '/routes.php';

use \Controller\PersonController;

try {


$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/src/View/');

$twig = new \Twig\Environment(
    $loader,[
        'cache' => __DIR__.'/src/View/cache'
    ]
);

$template = $twig->load('main.html');

echo $twig->render('main.html',['the'=>'typo']);
  

} catch (Exception $e) {
    echo 'Выброшено исключение '.$e;
}    