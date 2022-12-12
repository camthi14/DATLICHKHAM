<?php

$router->get('/', '\app\controllers\DoctorController@index');
$router->get('/doctor/add', '\app\controllers\DoctorController@add');
$router->post('/doctor/add', '\app\controllers\DoctorController@add');
$router->get('/doctor/edit/(\d+)', '\app\controllers\DoctorController@edit');
$router->post('/doctor/edit/(\d+)', '\app\controllers\DoctorController@edit');
$router->get('/doctor/delete/(\d+)', '\app\controllers\DoctorController@delete');



?>