<?php

namespace Notes\App\Repository;

use Notes\App\Entity\User;
use PDO;

class UserRepository extends Repository
{
    public function findAll()
    {
        $sql = "SELECT * FROM user ";
        $request = $this->pdo->prepare($sql);
        $request->execute();
        $users = $request->fetchAll(PDO::FETCH_CLASS, User::class);
        return $users;
    }
}