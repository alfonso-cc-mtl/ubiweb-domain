<?php

// Composer Autoloader
require  __DIR__ . '/vendor/autoload.php';

// Load Environment
$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

// Instantiate App
$app = new Ubiweb\Site(__DIR__);

// Only Needed for demo
// require __DIR__ . '/app/routes.php';

$app->run();
