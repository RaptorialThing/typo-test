<?php

return [
    "[a-z0-9_-]+" => "\Controller\PersonController::word",
    "person\/insert\.*" => "\Controller\PersonController::createPerson",
    "person\/update\/id\.*" => "\Controller\PersonController::updatePerson",
];