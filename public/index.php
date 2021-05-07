<?php

use App\Controller\UserController;

error_reporting(E_ALL);
require __DIR__ . '/../vendor/autoload.php';

$app = new UserController();
$app->index();
