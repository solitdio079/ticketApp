<?php

class Dbh3
{
    private $host = "localhost";
    private $dbName = "finder";
    private $userName = "root";
    private $pwd = "";

    protected function connect()
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
        $pdo = new PDO($dsn, $this->userName, $this->pwd);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}