<?php

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct ($cpf, $nome);
        $this->endereco = $endereco;
    }




    public function exibirEndereco(): Endereco
    {
        return $this->endereco;
    }

}



























