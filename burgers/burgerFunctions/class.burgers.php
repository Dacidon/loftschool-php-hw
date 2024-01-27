<?php

use dbConnection\Db;

class Burgers
{
    public function getUserByEmail(string $email)
    {
        $db = Db::getInstance();
        $query = "SELECT * FROM clients WHERE email = :email";
        return $db->fetchOne($query, __METHOD__, [':email' => $email]);
    }

    public function createUser(string $email, string $name)
    {
        $db = Db::getInstance();
        $query = "INSERT INTO clients(email, `name`) VALUES (:email, :name)";
        $result = $db->exec($query, __METHOD__, [
            ':email' => $email,
            ':name' => $name
        ]);
        if (!$result) {
            return false;
        }

        return $db->lastInsertId();
    }

    public function addOrder(int $userId, array $data)
    {
        $db = Db::getInstance();
        $query = "INSERT INTO orders(client_id, client_address, order_date) VALUES (:user_id, :address, :created_at)";
        $result = $db->exec(
            $query,
            __METHOD__,
            [
                ':user_id' => $userId,
                ':address' => $data['address'],
                ':created_at' => date('Y-m-d H:i:s'),

            ]
        );
        if (!$result) {
            return false;
        }
        return $db->lastInsertId();
    }

    public function incOrders(int $userId)
    {
        $db = Db::getInstance();
        $query = "UPDATE clients SET order_number = order_number +1 WHERE id = $userId";
        return $db->exec($query, __METHOD__);
    }
}