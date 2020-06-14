<?php

namespace Adapter;

class Database
{
    protected $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function getAllUsers()
    {
        return $this->adapter->all();
    }
}
