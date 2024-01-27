<?php

namespace dbConnection;

class Db
{
    /** @var \PDO */
    private $pdo;
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function getConnection()
    {
        $host = 'localhost';
        $dbName = 'burgers';
        $dbUser = 'dacidonDB';
        $dbPassword = '1952';

        if (!$this->pdo) {
            $this->pdo = new \PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
        }

        return $this->pdo;
    }

    public function fetchAll(string $query, $_method, array $params = [])
    {
        $prepared = $this->getConnection()->prepare($query);

        $ret = $prepared->execute($params);

        if (!$ret) {
            $errorInfo = $prepared->errorInfo();
            trigger_error("{$errorInfo[0]}#{$errorInfo[1]}: " . $errorInfo[2]);
            return [];
        }

        $data = $prepared->fetchAll(\PDO::FETCH_ASSOC);
        $affectedRows = $prepared->rowCount();

        return $data;
    }

    public function fetchOne(string $query, $_method, array $params = [])
    {
        $prepared = $this->getConnection()->prepare($query);

        $ret = $prepared->execute($params);

        if (!$ret) {
            $errorInfo = $prepared->errorInfo();
            trigger_error("{$errorInfo[0]}#{$errorInfo[1]}: " . $errorInfo[2]);
            return [];
        }

        $data = $prepared->fetchAll(\PDO::FETCH_ASSOC);
        $affectedRows = $prepared->rowCount();

        if (!$data) {
            return false;
        }
        return reset($data);
    }

    public function exec(string $query, $_method, array $params = []): int
    {
        $prepared = $this->getConnection()->prepare($query);

        $ret = $prepared->execute($params);

        if (!$ret) {
            $errorInfo = $prepared->errorInfo();
            trigger_error("{$errorInfo[0]}#{$errorInfo[1]}: " . $errorInfo[2]);
            return -1;
        }
        $affectedRows = $prepared->rowCount();

        return $affectedRows;
    }

    public function lastInsertId()
    {
        return $this->getConnection()->lastInsertId();
    }
}