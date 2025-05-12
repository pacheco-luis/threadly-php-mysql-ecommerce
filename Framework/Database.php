<?php

namespace Framework;

use PDO;
use PDOException;
use PDOStatement;
use Exception;

class Database
{
    public $conn;

    /**
     * Constructor to initialize the database connection.
     * 
     * @param array $config
     * @throws PDOException
     */
    public function __construct($config)
    {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];

        try {
            $this->conn = new PDO($dsn, $config['username'], $config['password'], $options);
        } catch (PDOException $e) {
            throw new Exception("Database connection failed: " . $e->getMessage());
        }
    }

    /**
     * Query the database
     * 
     * @param string $query
     * @return PDOStatement
     * @throws PDOException
     */
    public function query($query, $params = []): PDOStatement
    {
        try {
            $stmt = $this->conn->prepare($query);

            // Bind parameters
            foreach ($params as $key => $value) {
                $stmt->bindValue(':' . $key, $value);
            }

            $stmt->execute();
            return $stmt;
        } catch (PDOException $e) {
            throw new Exception("Query failed to execute: " . $e->getMessage());
        }
    }
}
