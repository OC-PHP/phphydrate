<?php

use App\Controller\HydrateController;
error_reporting(E_ALL);
require __DIR__ . '/../vendor/autoload.php';

$app = new HydrateController();
$app->index();
