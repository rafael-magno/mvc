<?php

require_once 'model/Cliente.php';

class ClienteController
{
    private $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente();
    }

    public function index()
    {
        $clienteEdit = new Cliente(false);

        if ($_GET['idcliente'])
        {
            $dadosCliente = $this->cliente->buscarDadosId($_GET['idcliente']);

            if (count($dadosCliente))
            {
                $clienteEdit = $dadosCliente[0];
            }
        }

        $listagemCliente = $this->cliente->listarTodos();

        require_once 'view/cliente.php';
        $_SESSION['mensagem'] = '';
    }

    public function salvarDados()
    {
        $_SESSION['mensagem'] = $this->cliente->salvarDados($_POST) ? 'Sucesso' : 'Falha';

        header('Location: '.BASE_URL.'/Cliente');
    }

    public function removerDados()
    {
        $_SESSION['mensagem'] = $this->cliente->removerDados($_GET['idcliente']) ? 'Sucesso' : 'Falha';

        header('Location: '.BASE_URL.'/Cliente');
    }
}