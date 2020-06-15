<?php

namespace App\Domain;

interface UserInterface
{
    public function all();

    public function find($id);
}
