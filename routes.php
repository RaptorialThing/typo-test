<?php


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
    $router->get('/',function () {

    });

    // Dynamic route: /hello/name
    $router->get('/hello/(\w+)', function ($name) {
        echo 'Hello ' . htmlentities($name);
    });

    // Dynamic route: /ohai/name/in/parts
    $router->get('/ohai/(.*)', function ($url) {
        echo 'Ohai ' . htmlentities($url);
    });

      // Dynamic route with (successive) optional subpatterns: /blog(/year(/month(/day(/slug))))
    $router->get('/person/(\d+)', function ($id = null) {
        if (!$id) {
            echo 'id не передан. /person/id/';
            return;
        }
        \Controller\PersonController::selectPerson($id);
    });

    $router->get('/person/insert/(\w+)', function ($name=null) {
        if (!$name) {
            echo 'name не передан. /person/id/';
            return;
        }
        \Controller\PersonController::createPerson($name);
    });

    $router->get('/person/(\d+)/delete', function ($id = null) {
        if (!$id) {
            echo 'id не передан. /person/id/ ';
            return;
        }
        \Controller\PersonController::deletePerson($id);
    });

    $router->get('/person/(\d+)/update/(\w+)', function ($id = null, $name = null) {
        if (!$id) {
            echo 'id не передан. /person/id/update/';
            return;
        }
        echo \Controller\PersonController::updatePerson($id,$name);
    });

    // Thunderbirds are go!
    $router->run();  