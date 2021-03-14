<?php
// import controller

use App\Controllers\UserController;

// Routes

$app->get('/', App\Action\HomeAction::class)
    ->setName('homepage');


$app->get('/users', UserController::class . ':index');
