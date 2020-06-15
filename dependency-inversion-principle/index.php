<?php

require __DIR__ . '/bootstrap.php';

$container = new ContainerService();
$userLoader = $container->getUserLoader();

print_r(json_encode($userLoader->all()));
