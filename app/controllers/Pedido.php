<?php

class Pedido extends Controller
{
    private $pedidoModel;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->pedidoModel = new PedidoModel($conexao->getConnection());
    }

    public function index()
    {
        // Recupera os pedidos do modelo
        $pedidos = $this->pedidoModel->listarPedidos();
        // Passa os pedidos para a visão 'home/index'
        $this->view('home/index', ['pedidos' => $pedidos]);
    }

    public function create()
    {
        // Exibe o formulário de cadastro
        $this->view('pedido/index');
    }
}
