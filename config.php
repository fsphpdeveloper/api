<?php

// Configuração do banco de dados MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'user1');
define('DB_PASS', 'password1');
define('DB_NAME', 'example_database');

use PDO;
use PDOException;

function getConnection()
{
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
        exit();
    }
}