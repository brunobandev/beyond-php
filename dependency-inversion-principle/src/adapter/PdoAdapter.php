<?php

namespace App\Adapter;

use PDO;

class PdoAdapter implements AdapterInterface
{
    const PATH_SQLITE = 'resources/users.db';
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->getPDO();
    }

    public function all()
    {
        $statement = $this->pdo->prepare('SELECT * FROM users');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $statement = $this->pdo->prepare('SELECT * FROM users WHERE id = :id');
        $statement->execute(['id' => $id]);
        $userArray = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$userArray) {
            return null;
        }

        return $userArray;
    }

    private function getPDO()
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO('sqlite:' . self::PATH_SQLITE);
        }
        return $this->pdo;
    }
}
