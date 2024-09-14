<?php

namespace app\Models;

use PDO;
use PDOException;

class DatabaseModel
{
    private $dbhost = DB_HOST;
    private $dbname = DB_NAME;
    private $dbuser = DB_USER;
    private $dbpass = DB_PASS;
    private $conn;
    private $stmt;

    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=" . $this->dbhost . ";port=4306;dbname=" . $this->dbname, $this->dbuser, $this->dbpass . "");
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    // Hàm này dùng để hủy
    function __destruct()
    {
        unset($this->conn);
    }

    // Lấy Tất Cả
    function get_all($sql)
    {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $this->stmt = $this->conn->prepare($sql);
            $this->stmt->execute($sql_args);
            $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $this->stmt->fetchAll();
        } catch (PDOException $e) {
            throw $e;
        }
    }

    function get_all_value($sql)
    {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $this->stmt = $this->conn->prepare($sql);
            $this->stmt->execute($sql_args);
            $row = $this->stmt->fetch(PDO::FETCH_ASSOC);
            return array_values($row)[0];
        } catch (PDOException $e) {
            throw $e;
        }
    }
    // Lấy 1 
    function get_one($sql)
    {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $this->stmt = $this->conn->prepare($sql);
            $this->stmt->execute($sql_args);
            $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $this->stmt->fetch();
        } catch (PDOException $e) {
            throw $e;
        }
    }


    function getRegester($sql)
    {
        $this->conn->exec($sql);
        return $this->conn->lastInsertId();
    }


    
}
