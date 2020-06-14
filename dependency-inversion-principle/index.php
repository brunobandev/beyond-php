<?php

use Adapter\Database;
use Adapter\JsonAdapter;

require __DIR__ . '/bootstrap.php';

$adapter = new JsonAdapter(__DIR__ . '/resources/users.json');
$container = new Database($adapter);

print_r(json_encode($container->getAllUsers()));
