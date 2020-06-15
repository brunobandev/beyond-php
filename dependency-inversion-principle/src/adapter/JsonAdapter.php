<?php

namespace App\Adapter;

class JsonAdapter implements AdapterInterface
{
    private $filename;

    public function __construct($jsonFilePath)
    {
        $this->filename = $jsonFilePath;
    }

    public function all()
    {
        $jsonContents = file_get_contents($this->filename);
        return json_decode($jsonContents, true);
    }

    public function find($id)
    {
        $users = $this->all();
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }
}
