<?php
// import controller

use App\Controllers\UserController;

// Routes
$app->get('/users', UserController::class . ':index');
