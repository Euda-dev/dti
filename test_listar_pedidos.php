<?php
// Ajuste o caminho relativo para a pasta 'app'
echo 'Incluindo arquivos...<br>';
require_once 'app/core/Conexao.php';
require_once 'app/models/PedidoModel.php';
echo 'Arquivos incluídos com sucesso!<br>';

// Crie uma instância de Conexao
$conexao = new Conexao();
$pdo = $conexao->getConnection();

// Crie uma instância de PedidoModel
$pedidoModel = new PedidoModel($pdo);

// Teste o método listarPedidos
$pedidos = $pedidoModel->listarPedidos();
echo '<pre>';
print_r($pedidos);
echo '</pre>';
