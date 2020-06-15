<?php

use Adapter\JsonAdapter;
use Application\UserService;

class ContainerService
{
    private $userLoader;
    private $userStorage;

    public function getUserLoader()
    {
        if ($this->userLoader === null) {
            $this->userLoader = new UserService($this->getUserStorage());
        }
        return $this->userLoader;
    }

    public function getUserStorage()
    {
        if ($this->userStorage === null) {
            $this->userStorage = new JsonAdapter('./resources/users.json');
            // $this->userStorage = new MysqlAdapter();
        }
        return $this->userStorage;
    }
}
