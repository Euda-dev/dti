<?php

class PedidoModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function listarPedidos()
    {
        $sql = "SELECT * FROM pedidos";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function criarPedido($nome, $valor, $data_vencimento)
    {
        $sql = "INSERT INTO pedidos (nome, valor, data_vencimento) VALUES (:nome, :valor, :data_vencimento)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':nome' => $nome,
            ':valor' => $valor,
            ':data_vencimento' => $data_vencimento
        ]);
    }
}
