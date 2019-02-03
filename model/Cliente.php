<?php

class Cliente extends Model
{
    private $idcliente;
    private $nomeCliente;

    public function __construct($inicializarClassePai = true)
    {
        parent::__construct($inicializarClassePai, $this);
    }

    public function listarTodos()
    {
        $sql = 'SELECT idcliente, nome_cliente AS nomeCliente FROM cliente';
        return $this->fetchRows($sql);
    }

    public function buscarDadosId($id)
    {
        $sql = 'SELECT idcliente, nome_cliente AS nomeCliente FROM cliente WHERE idcliente = '.(int)$id;
        return $this->fetchRows($sql);
    }

    public function salvarDados($dados)
    {
        $this->setIdcliente($dados['idcliente']);
        $this->setNomeCliente($dados['nomeCliente']);
        return $this->salvar();
    }

    public function removerDados($id)
    {
        $this->setIdcliente($id);
        return $this->remover();
    }

    /**
     * @return mixed
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * @param mixed $idcliente
     *
     * @return self
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    /**
     * @param mixed $nomeCliente
     *
     * @return self
     */
    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }
}