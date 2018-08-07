<?php

// Composer Autoloader
require  __DIR__ . '/vendor/autoload.php';

// Load Environment
if( file_exists( __DIR__ . '/.env' ) ) {
  $dotenv = new \Dotenv\Dotenv(__DIR__);
  $dotenv->load();
}

// Instantiate App
$app = new Ubiweb\Site(__DIR__);

$app->run();
