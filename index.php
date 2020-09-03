<?php

require_once 'vendor/autoload.php';
require_once "config.php"; 
use \Controller\PersonController;

try {

    // In case one is using PHP 5.4's built-in server
    $filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

    // Create a Router
    $router = new \Bramus\Router\Router();

    // Custom 404 Handler
    $router->set404(function () {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
        echo '404, route not found!';
    });

    // Before Router Middleware
    $router->before('GET', '/.*', function () {
        header('X-Powered-By: bramus/router');
    });

$routePatterns = require __DIR__ . '/routes.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/src/View/');

$twig = new \Twig\Environment(
    $loader,[
        'cache' => __DIR__.'/src/View/cache'
    ]
);

$template = $twig->load('main.html');

echo $twig->render('main.html',['the'=>'typo']);

    $router->get('/hello', function () {
        echo '<h1>bramus/router</h1><p>Visit <code>/hello/<em>name</em></code> to get your Hello World mojo on!</p>';
    });

        // Dynamic route: /hello/name
    $router->get('/hello/(\w+)', function ($name) {
        echo 'Hello ' . htmlentities($name);
    });

    // Thunderbirds are go!
    $router->run();    

} catch (Exception $e) {
    echo 'Выброшено исключение '.$e;
}    