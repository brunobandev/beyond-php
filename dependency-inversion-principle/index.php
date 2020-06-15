<?php

use App\Application\ContainerService;

require __DIR__ . '/vendor/autoload.php';

$container = new ContainerService();
$userLoader = $container->getUserLoader();

print(json_encode($userLoader->all()));
