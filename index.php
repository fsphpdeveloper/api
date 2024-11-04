<?php
require 'vendor/autoload.php';
require 'config.php';

use Source\Router;
use Source\Produto;

header('Content-Type: application/json');

$pdo = getConnection();
$produto = new Produto($pdo);
$router = new Router();

// Definir rotas
$router->add('GET', '/produtos', function () use ($produto) {
    echo json_encode($produto->listar());
});

$router->add('POST', '/produtos', function () use ($produto) {
    $input = json_decode(file_get_contents('php://input'), true);
    if ($produto->criar($input['nome'], $input['preco'])) {
        echo json_encode(['message' => 'Produto criado com sucesso!']);
    } else {
        http_response_code(400);
        echo json_encode(['message' => 'Erro ao criar produto.']);
    }
});

$router->add('PUT', '/produtos/(\d+)', function ($id) use ($produto) {
    $input = json_decode(file_get_contents('php://input'), true);
    if ($produto->atualizar($id, $input['nome'], $input['preco'])) {
        echo json_encode(['message' => 'Produto atualizado com sucesso!']);
    } else {
        http_response_code(400);
        echo json_encode(['message' => 'Erro ao atualizar produto.']);
    }
});

$router->add('DELETE', '/produtos/(\d+)', function ($id) use ($produto) {
    if ($produto->excluir($id)) {
        echo json_encode(['message' => 'Produto id ' . $id . ' excluído com sucesso!'], JSON_UNESCAPED_UNICODE);
    } else {
        http_response_code(400);
        echo json_encode(['message' => 'Erro ao excluir produto.']);
    }
});

$router->run();