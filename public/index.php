<?php

define('ROOT_DIR', realpath(dirname(__DIR__)));
define('VIEWS_DIR', ROOT_DIR . '/v1/views');

require_once ROOT_DIR .  '/vendor/autoload.php';

require_once ROOT_DIR . '/db/connect.php';
require_once ROOT_DIR . '/db/library.php';

$router = new \Bramus\Router\Router();

require_once ROOT_DIR . '/routes/doctor.php';

$router->get('/camthi-khung', function () {
    echo "Dung roi toi la Cam Thi bi khung ma";
});

$router->run();
