<?php

require __DIR__ . '/src/adapter/AdapterInterface.php';
require __DIR__ . '/src/adapter/JsonAdapter.php';
require __DIR__ . '/src/adapter/MysqlAdapter.php';

require __DIR__ . '/src/domain/User.php';
require __DIR__ . '/src/domain/UserRepository.php';

require __DIR__ . '/src/application/UserService.php';
require __DIR__ . '/src/application/ContainerService.php';
