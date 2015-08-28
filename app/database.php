<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'sqlite',
    'database' => '../database/acm_database.litedb',
    'prefix' => ''
]);

$capsule->bootEloquent();
