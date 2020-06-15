<?php

try {
    $pdo = new \PDO('sqlite:resources/users.db');

    $users = 'CREATE TABLE IF NOT EXISTS `users` (
        `id` INTEGER PRIMARY KEY,
        `name` TEXT NOT NULL
    )';

    $statement = $pdo->prepare($users);
    $statement->execute();

    $pdo->exec(
        'INSERT INTO `users`
        (name) VALUES
        ("Paulo")'
    );

    $pdo->exec(
        'INSERT INTO `users`
        (name) VALUES
        ("Mari")'
    );
} catch (\PDOException $e) {
    echo $e->getMessage();
}
