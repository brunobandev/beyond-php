<?php

namespace App\Adapter;

interface AdapterInterface
{
    public function all();

    public function find($id);
}
