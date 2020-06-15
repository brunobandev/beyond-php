<?php

namespace App\Application;

use App\Adapter\AdapterInterface;

class UserService
{
    public $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function all()
    {
        return $this->adapter->all();
    }

    public function find($id)
    {
        return $this->adapter->find($id);
    }
}
