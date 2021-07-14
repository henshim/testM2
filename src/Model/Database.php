<?php

namespace App\Model;

use PDO;
use PDOException;

class Database
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=testM2';
        $this->user = 'admin';
        $this->password = '123456';
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
}