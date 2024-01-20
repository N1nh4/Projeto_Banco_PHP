<?php

class Funcionario extends Pessoa
{
    private string $cargo;


    public function __construct(Cpf $cpf, string $nome, string $cargo)
    {
        parent::__construct($cpf,$nome);
        $this->cargo = $cargo;
    }


    public function exibirCargo(): string
    {
        return $this->cargo;
    }
}