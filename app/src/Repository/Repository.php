<?php

namespace Notes\App\Repository;


class Repository  
{
    protected $pdo;
    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=mysql; dbname=bulletin', 'user', 'pwd');
    }

}