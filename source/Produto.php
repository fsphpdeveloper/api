<?php

namespace Source;

use PDO;
use PDOException;

class Produto
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function listar()
    {
        $stmt = $this->pdo->query('SELECT * FROM produtos');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function criar($nome, $preco)
    {
        $stmt = $this->pdo->prepare('INSERT INTO produtos (nome, preco) VALUES (?, ?)');
        return $stmt->execute([$nome, $preco]);
    }

    public function atualizar($id, $nome, $preco)
    {
        $stmt = $this->pdo->prepare('UPDATE produtos SET nome = ?, preco = ? WHERE id = ?');
        return $stmt->execute([$nome, $preco, $id]);
    }

    public function excluir($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM produtos WHERE id = ?');
        return $stmt->execute([$id]);
    }
}