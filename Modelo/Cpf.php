<?php

class Cpf
{
    private string $cpf;


    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function exibirCpf(): string
    {
        return $this->cpf;
    }
}
