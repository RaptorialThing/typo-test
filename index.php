<?php

require_once 'vendor/autoload.php';
require_once "config.php"; 

use \Controller\PersonController;
use \Model\Person;
use \View\View;

try {

$person = \Model\Person::getLastPerson();
\View\View::render('main.html',$person);
require __DIR__ . '/routes.php';

} catch (Exception $e) {
    echo 'Выброшено исключение '.$e;
}    