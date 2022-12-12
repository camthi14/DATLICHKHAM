<?php

$router->get('/', '\app\controllers\DoctorController@index');
$router->get('/books/add', '\app\controllers\DoctorController@showAddDoctor');



?>