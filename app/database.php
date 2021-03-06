<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

// connection settings
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'username' => 'mranyone',
    'password' => '',
    'database' => 'php_mvc',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci'
]);

// load eloquent based on the settings
$capsule->bootEloquent();